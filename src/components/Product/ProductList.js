import { useProductStore } from "../../store/index.js";

import { onMounted, ref, computed } from "vue";
import axios from "axios";
import Swal from "sweetalert2";

export default function ProductList() {
    const productStore = useProductStore()


    // const sort = ref(false);
    const productsArray = ref([])
    const uniqueCategories = ref([])
    const category = ref("");     
    const filteredProducts = ref([]);
    const totalPrice = ref(0);
    const page = ref(1);
    const perPage = ref(6);    


    const formatter = new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
    });

    const getCategories = computed(() => {
        uniqueCategories.value = productsArray.value.map((product) => product.category)
        return uniqueCategories.value = Array.from(new Set(uniqueCategories.value))
    })

    const handleDelete = (id) => {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",            
        }).then((result) => {
            if (result.isConfirmed) {
                if(productsArray.value.find((product) => product.id === id)) {            
                    productsArray.value = productsArray.value.filter(
                        (product) => product.id !== id
                    );
                    Swal.fire({
                        icon: "success",
                        title: "Product deleted successfully",                  
                    });
                }
            }
        })        
    }    

    const downloadCSV = () => {
        // const csvData = filteredProducts.value.map(product => `${product.id},${product.title},${product.price},${product.category}`).join('\n');        
        let csvData = "Sr.No, Product Name, Category, Price\n" + limitedProducts.value.map((product, index) => `${index + 1}, ${product.title}, ${product.category}, ${product.price}`).join('\n');
        csvData += `\n , ,Total Price, ${totalPrice.value}`
        const blob = new Blob([csvData], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = 'filtered_products.csv';
        link.click();
        URL.revokeObjectURL(url);
    }

    const filter = computed(() => {   
        // console.log(productsArray.value.filter((product) => category.value === "" || product.category.toUpperCase() === category.value.toUpperCase()));   
        return productsArray.value.filter((product) => category.value === "" || product.category.toUpperCase() === category.value.toUpperCase())
    })

    const limitedProducts = computed(() => {        
        const start = (page.value - 1) * perPage.value;
        const end = start + perPage.value;
        return filter.value.slice(start, end);
    });

    const totalPage = computed(() => {
        return Math.ceil(filter.value.length / perPage.value);
    });

    const calculateTotalPrice = computed(() => {
        return totalPrice.value = formatter.format(productsArray.value.reduce((total, product) => total + product.price, 0));
    })

    const currentPagePrice = computed(() => {
        return formatter.format(limitedProducts.value.reduce((total, product) => total + product.price, 0));
    });
    
    const totalProducts = computed(() => {
        return productsArray.value.length;
    })
    
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

    return {
        productsArray,  
        getCategories,
        category,
        filteredProducts,
        totalPrice,
        formatter,
        filter,
        calculateTotalPrice,   
        limitedProducts,  
        page,
        totalPage,
        currentPagePrice,
        totalProducts,        
        downloadCSV,
        handleDelete,
    }
}