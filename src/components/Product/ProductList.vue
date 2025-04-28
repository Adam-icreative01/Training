<script setup>
    import ProductList from "./ProductList.js"
    import { onMounted, ref, computed, watch} from "vue"

    const productList = ProductList();
    const { productsArray, getCategories, handleDelete, calculateTotalPrice, downloadCSV, category, filter, limitedProducts, page, totalPage, currentPagePrice, totalProducts } = productList    
        
        // watch(limitedProducts, () => {
        //     console.log(limitedProducts.value);
        // })
</script>

<template>
  <div class="container">
    <div class="filter">
        <div class="d-flex justify-content-center gap-3">           
            <div class="col-md-4">
                <select class="form-select form-control" aria-label="Default select example" v-model="category">
                    <option selected disabled value="">Filter By Category</option>
                    <option v-for="category in getCategories" :key="category">{{ category }}</option>
                </select>
            </div>
            <div class="d-flex gap-2">
                <button @click="category = ''" class="btn btn-outline-danger">Clear</button>
                <button @click="downloadCSV" class="btn btn-outline-success">Download CSV</button>
            </div>
        </div>
    </div>
    <div class="table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>     
            <tbody>
                <tr v-for="(product, index) in limitedProducts" :key="product.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{ product.title }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.category }}</td>
                    <td>
                        <button @click="handleDelete(product.id)" type="button" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>       
        </table>

        <div class="d-flex justify-content-between">
            <div><h6>Total Products: {{ totalProducts }}</h6></div>
            <div><h6>Current Page Price Total: {{ currentPagePrice }}</h6></div>
            <div><h6>Total Price: {{ calculateTotalPrice }}</h6></div>
        </div>

        <div>
            <div class="flex gap-x-4 items-center mt-4">
                <button :disabled="page === 1" @click="page > 1 && page--" class="btn btn-sm- btn-outline-primary disabled:cursor-not-allowed">Prev</button>
                <span>Page {{ page }} of {{ totalPage }}</span>
                <button :disabled="page === totalPage" @click="page < totalPage && page++" class="btn btn-sm- btn-outline-primary disabled:cursor-not-allowed" >Next</button>
            </div>
        </div>
    </div>
  </div>
</template>