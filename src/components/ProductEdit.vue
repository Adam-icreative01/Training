<script setup>
import { ref, onMounted, watch } from 'vue';
import { useRoute } from 'vue-router';
import { useProductStore } from '@/stores/ProductStore';

const route = useRoute();
const productStore = useProductStore();
const productId = Number(route.params.id);

// Reactive state
const productEdit = ref({});
const uniqueCategories = ref([]);
const selected = ref('');
const storedImage = ref('');
const preview = ref('');
const selectedFileName = ref('');

// Methods
const initializeProductData = async () => {
  const product = productStore.productsArray.find(item => item.id === productId);
  if (product) {
    productEdit.value = { ...product };
    selected.value = product.category;
    storedImage.value = localStorage.getItem(product.image) || product.image;
    updateUniqueCategories();
  }
};

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
  reader.onload = () => preview.value = reader.result;
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

const handleImageChange = (event) => {
  handleImageLoad(event);
  handleImageUpload(event);
};

const onFormSubmit = () => {
  if (!productEdit.value) return;
  productEdit.value.category = selected.value;
  console.log(selectedFileName.value === "");
  productStore.updateProduct(productId, productEdit.value, selectedFileName.value);
};

const handleInput = (event) => {
  const value = event.target.value;
  if(value < 0 || value == -0)
  {
    event.target.value = 0 
  }
};

// Lifecycle hooks
onMounted(initializeProductData);
watch(() => productStore.productsArray, () => !productEdit.value?.id && initializeProductData());
</script>

<template>
  <h3 class="text-center mt-3">Update Product</h3>
    <div class="d-flex justify-content-center">
        <form @submit.prevent="onFormSubmit" style="width: 60%;"> 
            <div class="row mt-3">
                <label for="title">Title</label>
                <input class="form-control" name="title" id="title" v-model="productEdit.title" />
            </div>
            <div class="row mt-3">
                <label for="category">Category</label>                
                <select v-model="selected" class="form-control">
                    <option v-for="category in uniqueCategories" :key="category" :value="category">{{ category }}</option>
                </select>
            </div>
            <div class="row mt-3">
                <label for="price">Price</label>
                <input class="form-control" name="price" id="price" v-model="productEdit.price" @input="handleInput" />
            </div>
            <div class="row mt-3">
                <input type="file" class="form-input" @change="handleImageChange" name="image" id="image"/>
            </div>

            <div class="d-flex justify-content-space-around" style="gap:50px;">
                <div class="mt-6" v-if="storedImage">
                    <p>Current Image</p>
                    <img :src="storedImage" width="150px"/>
                </div>
                <div class="mt-5" v-if="preview">
                    <p>Selected Image</p>
                    <img :src="preview" alt="Preview" width="150" />
                </div>
            </div>

            <div class="row mt-3">
                <button class="btn btn-primary btn-sm">Submit</button>
            </div>
        </form>
    </div>
</template>