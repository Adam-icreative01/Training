import { ref, watch } from 'vue';

export function useProductEdit(productStore, productId) {
  const productEdit = ref(null);
  const uniqueCategories = ref(null);
  const selected = ref(null);
  const storedImage = ref(null);
  const preview = ref('');
  const selectedFileName = ref('');

 const initializeProductData = (productId) => {
  //  console.log(productId);
    const product = productStore.productsArray.find(item => item.id === productId);
    if (product) {
      productEdit.value = { ...product };
      selectedCategory.value = product.category;
      storedImage.value = localStorage.getItem(product.image) || product.image;
      
      // Initialize unique categories
      updateUniqueCategories();
    }
 }

  const updateUniqueCategories = () => {
    const mappedItems = productStore.productsArray.filter((value, index, self) =>
      index === self.findIndex((t) => t.category === value.category)
    );
    uniqueCategories.value = mappedItems.map(item => item.category);
  };

  const generateUniqueFileName = (originalName) => {
    const timestamp = Date.now();
    const extension = originalName.split('.').pop();
    return `img_${timestamp}.${extension}`;
  };

  const handleImageLoad = (event) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = () => {
      preview.value = reader.result;
    };
    reader.readAsDataURL(file);
  };

  const handleImageUpload = (event) => {
    const file = event.target.files[0];
    if (!file) return;

    const uniqueFileName = generateUniqueFileName(file.name);
    const reader = new FileReader();
    reader.onload = () => {
      localStorage.setItem(uniqueFileName, reader.result);
      selectedFileName.value = uniqueFileName;
    };
    reader.readAsDataURL(file);
  };

  const onFormSubmit = () => {
    if (!productEdit.value) return;
    productEdit.value.category = selected.value;
    productStore.updateProduct(
      productId, 
      productEdit.value, 
      selectedFileName.value
    );
  };

  return {
    productEdit,
    uniqueCategories,
    selected,
    storedImage,
    preview,
    initializeProductData,
    handleImageLoad,
    handleImageUpload,
    onFormSubmit
  };
}