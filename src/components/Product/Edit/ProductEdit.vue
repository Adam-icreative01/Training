<script setup>
import { onMounted, watch } from 'vue';
import { useRoute } from 'vue-router';
import { useProductStore } from '@/stores/ProductStore';
import { useProductEdit } from './ProductEdit.js';
import Swal from 'sweetalert2';

const route = useRoute();
const productStore = useProductStore();
const productId = Number(route.params.id);

const {
  productEdit,
  uniqueCategories,
  selected,
  storedImage,
  preview,
  initializeProductData,
  handleImageLoad,
  handleImageUpload,
  onFormSubmit
} = useProductEdit(productStore, productId);

// Initialize product data when component mounts
onMounted(async () => {
  await initializeProductData(productId);
});

watch(
  () => productStore.productsArray,
  () => {
    if (!productEdit.value?.id) {
      initializeProductData(productId);
    }
  });


const handleImageChange = (event) => {
    handleImageLoad(event);
    handleImageUpload(event);
}
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
                <input class="form-control" name="price" id="price" v-model="productEdit.price" />
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
