<script setup>
import { useProductStore } from '@/stores/ProductStore';
import { useProductCreate } from './ProductCreate.js';

const { title, category, price, selectedFileName, handleImageUpload } = useProductCreate();
const productStore = useProductStore();

const onFormSubmit = () => {
    productStore.createProduct(title.value, category.value, price.value, selectedFileName.value);
}
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
                <input class="form-control" name="price" id="price" v-model="price" />
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

