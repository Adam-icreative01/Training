import { defineStore } from "pinia";
import axios from "axios";
import { computed, onMounted, ref } from "vue";
import Swal from "sweetalert2";
import { useRouter } from 'vue-router'
// import ProductEdit from "@/components/Product/Edit/ProductEdit.vue";

export const useProductStore = defineStore('product', () => {

    const productsArray = ref([]);
    const router = useRouter()    

    onMounted(async () => {
        try {
            
            axios
                .get('https://fakestoreapi.com/products')
                .then(function(res) {                    
                    productsArray.value.push(...res.data);
                })
                .catch(function(err) {
                    console.log(err);
                })   
        }
        catch (err) {
            console.log('Fetch Error:', err);
        }
    });

    const createProduct = async (title, category, price, image) => {    
        const id = productsArray.value.at(-1)
        productsArray.value.push({id:id.id + 1, title: title, category: category, price: price, image: image});
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Record Inserted Successfully !'
        })
        setTimeout(async()=>{
            router.push({path: '/products/product-list'})
        }, 1000);
    }

    const editProductRedirect = async (id) => {
        router.push({name: 'product-edit', params: {id: id}})
    }

    const updateProduct = async(id, product, image) => {
        console.log(product, image);
        const index = productsArray.value.findIndex(item => item.id === id)
        if(index !== -1)
        {
            productsArray.value[index] = {...productsArray.value[index], ...product, image: image}
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Record Updated Successfully !'
            })

            setTimeout(()=> {
                router.push({name: 'product-list'})
            }, 1000)
        }
        else {
            Swal.fire({
                icon: 'error',
                title: 'Not Found',
                text: 'Record Not Found'
            })
        }
    }

    const deleteProduct = async (id) => {
        try {        
            if(productsArray.value.find(ele => ele.id === id))
            {
                productsArray.value = productsArray.value.filter(p => p.id !== id)
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Record Deleted Successfully !'
                })
            }
        }
        catch (err) {
            console.log("Error: ", err);
        }
    }
 
    return {
        productsArray,
        createProduct,
        editProductRedirect,
        updateProduct,
        deleteProduct,
    }
});