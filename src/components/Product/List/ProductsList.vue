<script setup>
import { useProductStore } from '@/stores/ProductStore';
import { useProductList } from './ProductList.js';

const productStore = useProductStore();
const {
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
} = useProductList(productStore);

const initializeData = async () => {
  await productStore.fetchProducts();
  updateCategories(productStore.productsArray);
  productsArray.value = productStore.productsArray;
  totalProductsCount.value = productStore.productsArray.length;
};

initializeData();

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
