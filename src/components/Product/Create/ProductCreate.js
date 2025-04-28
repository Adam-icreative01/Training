import { ref } from 'vue';

export function useProductCreate() {
  const title = ref('');
  const category = ref('');
  const price = ref(0);
  const selectedFileName = ref('')



  const generateUniqueFileName = (originalName) => {
      const timestamp = Date.now()
      const extension = originalName.split('.').pop()
      return `img_${timestamp}.${extension}`
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

  return {
    title,
    category,
    price,
    selectedFileName,
    handleImageUpload
  };
}


// const onFormSubmit = () => {
//     productStore.createProduct(title.value, category.value, price.value, selectedFileName.value);
// }

// export {
//   title,
//   category,
//   price,
//   selectedFileName,
//   handleImageUpload,
//   onFormSubmit,
// }
