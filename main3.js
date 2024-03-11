const updateCategoryModal = document.getElementById('upcat');
const updateCategoryButton = document.querySelector('#upcat button.btn-outline-success');
const updatedCategoryNameInput = document.querySelector('#upcat input.form-control');

const updError = document.getElementById("error");

updateCategoryButton.addEventListener('click', function () {
  function validateUpdatedCategoryInput(input, errorMessage) {
    if (!input.value.trim()) {
      updError.textContent=errorMessage;
      updError.style.color = "red";
      return false;
    }
    return true;
  }

  const isValidUpdatedCategory = validateUpdatedCategoryInput(updatedCategoryNameInput, 'Please enter a category name');

  if (isValidUpdatedCategory) {
    updError.textContent="Category has  been successfully updated";
    updError.style.color="#0f0"
    updateCategoryModal.dispatchEvent(new Event('hide.bs.modal')); 
  }
});
const addCategoryModal = document.getElementById('addcat');
const addCategoryButton = document.querySelector('#addcat button.btn-outline-success');
const categoryNameInput = document.querySelector('#cat');

addCategoryButton.addEventListener('click', function () {
  function validateCategoryInput(input, errorMessage) {
    if (!input.value.trim()) {
        updError.textContent=errorMessage;
        updError.style.color = "red";
      return false;
    }
    return true;
  }

  const isValidCategory = validateCategoryInput(categoryNameInput, 'Please enter a category name');

  if (isValidCategory) {
    updError.textContent="Category has  been successfully added";
    updError.style.color="#0f0"
    addCategoryModal.dispatchEvent(new Event('hide.bs.modal')); 
  }
});
      
       

