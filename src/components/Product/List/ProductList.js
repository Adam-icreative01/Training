import { ref, watchEffect, computed } from 'vue';
import Swal from 'sweetalert2'


export function useProductList(productStore) {
    const uniqueCategories = ref(null);
    const selected = ref('');
    const productsArray = ref([]);
    const filterName = ref('');
    const currentPage = ref(1);
    const pageSize = 6;
    const totalProductsCount = ref(0);
  
    const updateCategories = (products) => {
      const mappedItems = products.filter(
        (value, index, self) =>
          index === self.findIndex((t) => t.category === value.category)
      );
      uniqueCategories.value = mappedItems.map(value => value.category);
    };

    const handleEdit = (id) => {
        // console.log(id);
        productStore.editProductRedirect(id);
    }
  
    const handleDelete = (id) => {
      Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'You want to delete this record?',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
          productStore.deleteProduct(id);
        }
      });
    };
  
    const handleFilter = () => {
      const filtered = productStore.productsArray.filter(item => {
        const categories = selected.value === '' || 
          item.category.toUpperCase() === selected.value.toUpperCase();
        const title = filterName.value === '' || 
          item.title.toUpperCase().includes(filterName.value.toUpperCase());
        return categories && title;
      });
      productsArray.value = filtered;
      currentPage.value = 1;
    };
  
    const paginatedProducts = computed(() => {
      const start = (currentPage.value - 1) * pageSize;
      const end = start + pageSize;
      return productsArray.value.slice(start, end);
    });
  
    const totalPages = computed(() => {
      return Math.ceil(productsArray.value.length / pageSize);
    });
  
    const formatCurrency = (amount) => {
      return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
      }).format(amount);
    };
  
    const totalFilteredPrice = computed(() => {
      return productsArray.value.reduce(
        (sum, product) => sum + Number(product.price), 0
      );
    });
  
    const currentPagePriceTotal = computed(() => {
      return paginatedProducts.value.reduce(
        (sum, product) => sum + Number(product.price), 0
      );
    });
  
    const getImageSource = (image) => {
      const localImage = localStorage.getItem(image);
      return localImage ? localImage : image;
    };
  
    return {
      uniqueCategories,
      selected,
      productsArray,
      filterName,
      currentPage,
      pageSize,
      totalProductsCount,
      handleEdit,
      handleDelete,
      handleFilter,
      paginatedProducts,
      totalPages,
      formatCurrency,
      totalFilteredPrice,
      currentPagePriceTotal,
      getImageSource,
      updateCategories
    };
  }