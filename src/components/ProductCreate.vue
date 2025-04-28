<script setup>
import { computed, ref } from 'vue';
import { useProductStore } from '@/stores/ProductStore';

const productStore = useProductStore();

// Reactive state
const title = ref('');
const category = ref('');
// const price = ref(0);
const selectedFileName = ref('');
const priceValue = ref(0);

// Methods

const price = computed({
  get: () => priceValue.value,
  set: (newValue) => {
    priceValue.value = Math.max(0, newValue);
  }
});
const generateUniqueFileName = (originalName) => {
  const timestamp = Date.now();
  const extension = originalName.split('.').pop();
  return `img_${timestamp}.${extension}`;
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

const handleInput = (event) => {
  const value = event.target.value;
  if(value < 0 || value == -0)
  {
    event.target.value = 0 
  }
};

const onFormSubmit = () => {
  productStore.createProduct(title.value, category.value, price.value, selectedFileName.value);  
};
</script>

<template>
  <h3 class="text-center mt-3">Create New Product</h3>
    <div class="d-flex justify-content-center">
        <form @submit.prevent="onFormSubmit" enctype="multipart/form-data" style="width: 60%;"> 
            <div class="row mt-3">
                <label for="title">Title</label>
                <input class="form-control" name="title" id="title" v-model="title" />
            </div>
            <div class="row mt-3">
                <label for="category">Category</label>
                <input class="form-control" name="category" id="category" v-model="category" />
            </div>
            <div class="row mt-3">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" v-model="price" @input="handleInput" />
            </div>
            <div class="row mt-3">
                <!-- <label for="image">Image</label> -->
                <input class="form-control" type="file" @change="handleImageUpload" name="image" id="image">
            </div>

            <div class="row mt-3">
                <button class="btn btn-primary btn-sm">Submit</button>
            </div>
        </form>
    </div>
</template>