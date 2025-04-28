import { defineStore } from "pinia";
import { ref, onMounted } from "vue";
import axios from "axios";
import Swal from "sweetalert2";

export const useProductStore = defineStore("product", () => {
    const productsArray = ref([]);

    onMounted(async () => {
        await axios
            .get("https://fakestoreapi.com/products")
            .then((response) => {
                productsArray.value = response.data;
            })
            .catch((error) => {
                console.log(error);
            });
    });

    const deleteProduct = (id) => {
        if(productsArray.value.find((product) => product.id === id)) {            
            productsArray.value = productsArray.value.filter(
                (product) => product.id !== id
            );
            Swal.fire({
                icon: "success",
                title: "Product deleted successfully",                  
            });
        }
    };


    return {
        productsArray,
        // fetchProducts,
        deleteProduct,

    }
});