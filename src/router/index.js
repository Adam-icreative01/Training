import { createRouter, createWebHistory } from 'vue-router'; 
import ProductsList from '../components/ProductList.vue';
import ProductCreate from '../components//ProductCreate.vue';
import ProductEdit from '../components/ProductEdit.vue';

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes : [
        {
            path: '/products/product-list',
            name: 'product-list',
            component: ProductsList   
        },
        {
            path: '/products/product-create',
            name: 'product-create',
            component: ProductCreate
        },        
        {
            path: '/products/product-edit/:id',
            name: 'product-edit',
            component: ProductEdit,
            // component: () => import('@/components/Product/Edit/ProductEdit.vue')
            props: true,
        }
    ]
});

export default router;