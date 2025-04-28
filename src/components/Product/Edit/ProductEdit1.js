import { ref, watch, defineProps} from 'vue'
import { useRoute } from 'vue-router';
import { useProductStore } from '@/stores/ProductStore'
// import { productStore } from '../List/ProductList';

// defineProps(['id']);

const route = useRoute();
const productId = Number(route.params.id);


const productEdit = ref(null);
const uniqueCategories = ref(null);
const selected = ref(null);
const storedImage = ref(null);
const currentFile = ref(null);
const preview = ref('')
const selectedFile = ref(null)
const selectedFileName = ref('')



const props = defineProps({
  id: String
})
// productStore.productsArray, (products) => 
// watch(() => {
//     if(!products) return;
        
//     productEdit.value = productStore.productsArray.find(item => item.id === productId)
    
//     selected.value = productEdit.value.category;    
    
//     //Unique Categories Items
//     const mappedItems = productStore.productsArray.filter((value, index, self) =>
//         index === self.findIndex((t) => (
//             t.category === value.category
//         ))
//     )
//     uniquerCategories.value = mappedItems.map(function(value, index, array){
//         return value.category;
//     }) ;
    
//     const imageData = localStorage.getItem(productEdit.value.image)
    
//     if (imageData) {        
//         storedImage.value = imageData
//     }else {
//         storedImage.value = productEdit.value.image
//     }
// })

let productStore;

// Initialize and watch the store
const initProductData = () => {
productStore = useProductStore();

  watch(
    () => productStore.productsArray,
    (products) => {
      if (!products || products.length === 0) return

      productEdit.value = products.find(item => item.id === productId)
      selected.value = productEdit.value?.category || ''

      const mappedItems = products.filter(
        (value, index, self) =>
          index === self.findIndex((t) => t.category === value.category)
      )
      uniqueCategories.value = mappedItems.map(item => item.category)

      const imageData = localStorage.getItem(productEdit.value.image)
      storedImage.value = imageData || productEdit.value.image
    },
    { immediate: true }
  )
}

const generateUniqueFileName = (originalName) => {
    const timestamp = Date.now()
    const extension = originalName.split('.').pop()
    return `img_${timestamp}.${extension}`
}

const handleImageLoad = (event) => {
  const file = event.target.files[0]
  if (!file) return

  selectedFile.value = file

  const reader = new FileReader()
  reader.onload = () => {
    preview.value = reader.result // base64 image
  }
  reader.readAsDataURL(file)
}

const handleImageUpload = (event) => {
  const file = event.target.files[0]
  if (!file) return

  const uniqueFileName = generateUniqueFileName(file.name)

  const reader = new FileReader()
  reader.onload = () => {
    const base64Image = reader.result
    localStorage.setItem(uniqueFileName, base64Image)

    // save the filename to your product form
    selectedFileName.value = uniqueFileName    
  }
  reader.readAsDataURL(file)
}

const onFormSubmit = () => {    
    productEdit.value.category = selected;
    productStore.updateProduct(productId, productEdit.value, selectedFileName.value);
}

// const props = defineProps({
//   id: String
// })


export {
  initProductData,
  route, 
  productStore,
  productId,
  productEdit,
  uniqueCategories,
  selected,
  storedImage,
  currentFile,
  preview,
  selectedFile,
  selectedFileName,  
  handleImageLoad,
  handleImageUpload,
  onFormSubmit,
  props
}