<script setup>
import { ref, computed, onMounted, watchEffect } from 'vue';
import { useProductStore } from '@/stores/ProductStore';
import Swal from 'sweetalert2';

const productStore = useProductStore();

// Reactive state
const uniqueCategories = ref([]);
const selected = ref('');
const productsArray = ref([]);
const filterName = ref('');
const currentPage = ref(1);
const pageSize = 6;
const totalProductsCount = ref(0);

// Computed properties
const paginatedProducts = computed(() => {
  const start = (currentPage.value - 1) * pageSize;
  const end = start + pageSize;
  return productsArray.value.slice(start, end);
});


const totalPages = computed(() => Math.ceil(productsArray.value.length / pageSize));
const totalFilteredPrice = computed(() => productsArray.value.reduce((sum, product) => sum + Number(product.price), 0));
const currentPagePriceTotal = computed(() => paginatedProducts.value.reduce((sum, product) => sum + Number(product.price), 0));

// Methods
const updateCategories = (products) => {
  const mappedItems = products.filter((value, index, self) =>
    index === self.findIndex((t) => t.category === value.category)
  );
  uniqueCategories.value = mappedItems.map(value => value.category);  
};

const handleEdit = (id) => productStore.editProductRedirect(id);

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
    if (result.isConfirmed) productStore.deleteProduct(id);
    productsArray.value = productStore.productsArray;
  });
};

const handleFilter = () => {
  const filtered = productStore.productsArray.filter(item => {
    const categories = selected.value === '' || item.category.toUpperCase() === selected.value.toUpperCase();
    const title = filterName.value === '' || item.title.toUpperCase().includes(filterName.value.toUpperCase());
    return categories && title;
  });
  productsArray.value = filtered;
  currentPage.value = 1;
};

const formatCurrency = (amount) => new Intl.NumberFormat('en-IN', {
  style: 'currency',
  currency: 'INR',
  minimumFractionDigits: 2,
  maximumFractionDigits: 2
}).format(amount);

const getImageSource = (image) => localStorage.getItem(image) || image;

// Initialize data
onMounted(async () => {
  // await productStore.fetchProducts();
  // updateCategories(productStore.productsArray);
  productsArray.value = productStore.productsArray;  
});

watchEffect(() => {
  updateCategories(productStore.productsArray);   
  totalProductsCount.value = productsArray.value.length;
})
</script>

<template>
 <div class="d-flex justify-content-center row mt-5">
        <div class="col-md-4">
            <input type="text" placeholder="Filter Name" name="filterName" id="filterName" class="form-control" v-model="filterName"/>
        </div>
        <div class="col-md-4">
            <select v-model="selected" class="form-control">
                <option value="" selected>All</option>
                <option v-for="category in uniqueCategories" :key="category" :value="category">{{ category }}</option>
            </select>
        </div>
        <div>
            <button class="btn btn-primary btn-sm" @click="handleFilter">Filter</button>
            <button class="btn btn-outline-danger btn-sm mx-2" @click="() => { selected = ''; filterName = ''; handleFilter() }">Reset</button>
        </div>
   </div>
    <div class="d-flex justify-content-center">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <td>Sr.No</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Image</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(product, i) in paginatedProducts">
                    <td>{{ i +1}}</td>
                    <td>{{ product.title }}</td>
                    <td>{{ product.category }}</td>
                    <!-- <td><img v-bind:src="`${product.image}`" height="100" width="100"/></td> -->
                    <td><img v-bind:src="`${getImageSource(product.image)}`" height="100" width="100"/></td>
                    <td>{{ formatCurrency(product.price) }}</td>
                    <td>
                        <button @click="handleEdit(product.id)" class="btn btn-lg"><i class="text-success bi bi-pencil-square"></i></button>
                        <button @click="handleDelete(product.id)" class="btn btn-lg"><i class="text-danger bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
   </div>

    <div class="d-flex justify-content-center pagination">
      <button class="btn btn-primary btn-sm mx-2" @click="currentPage--" :disabled="currentPage === 1">⬅ Prev</button>     
      Page {{ currentPage }} of {{ totalPages }}  
      <button class="btn btn-primary btn-sm mx-2" @click="currentPage++" :disabled="currentPage === totalPages">Next ➡</button>
    </div>

    <div class="d-flex justify-content-between mt-5 counts p-5">
        <div>
            <p>Total Products Count: {{ totalProductsCount }}</p>
        </div>
        <div>
            Current Page Price Total: {{ formatCurrency(currentPagePriceTotal) }}
        </div>
        <div>
            Products Price Total: {{ formatCurrency(totalFilteredPrice) }}
        </div>
    </div>
</template>