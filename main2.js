document.addEventListener('DOMContentLoaded', function () {
    const saveButton = document.getElementById("save");
  
    const errorElements = document.querySelectorAll('.error');
  
    saveButton.addEventListener("click", function () {
      validateForm();
    });
  
    function validateForm() {
      let valid = true;
      errorElements.forEach((errorElement) => {
        errorElement.textContent = "";
      });
  
      const dpInput = document.getElementById("dp");
      const brandSelect = document.getElementById("bra");
      const warrantyRadio = document.querySelectorAll('input[name="warranty"]');
      const modelInput = document.getElementById("model");
      const powerRadio = document.querySelectorAll('input[name="power"]');
      const portnoRadio = document.querySelectorAll('input[name="portno"]');
      const typeCheckboxes = document.querySelectorAll('input[name="type"]');
      const frequencyRadio = document.querySelectorAll('input[name="frequency"]');
      const priceInput = document.getElementById("price");
      const wirelessRadio = document.querySelectorAll('input[name="wireless"]');
      const categorySelect = document.getElementById("cat");
      const dataRateRadio = document.querySelectorAll('input[name="data-rate"]');
  
      if (!dpInput.files[0]) {
        showError("Please select display picture!", errorElements[0]);
        valid = false;
      }
  
      if (brandSelect.value === "Choose...") {
        showError("Please enter Brand name", errorElements[1]);
        valid = false;
      }
  
      let warrantySelected = false;
      warrantyRadio.forEach((radio) => {
        if (radio.checked) {
          warrantySelected = true;
        }
      });
      if (!warrantySelected) {
        showError("Please select warranty", errorElements[2]);
        valid = false;
      }
  
      if (modelInput.value.trim() === "") {
        showError("Please enter Model name", errorElements[3]);
        valid = false;
      }
  
      let powerSelected = false;
      powerRadio.forEach((radio) => {
        if (radio.checked) {
          powerSelected = true;
        }
      });
      if (!powerSelected) {
        showError("Please select power", errorElements[4]);
        valid = false;
      }
  
      let portnoSelected = false;
      portnoRadio.forEach((radio) => {
        if (radio.checked) {
          portnoSelected = true;
        }
      });
      if (!portnoSelected) {
        showError("Please select ports number", errorElements[5]);
        valid = false;
      }
  
      let typeSelected = false;
      typeCheckboxes.forEach((checkbox) => {
        if (checkbox.checked) {
          typeSelected = true;
        }
      });
      if (!typeSelected) {
        showError("Please select types of ports", errorElements[6]);
        valid = false;
      }
  
      let frequencySelected = false;
      frequencyRadio.forEach((radio) => {
        if (radio.checked) {
          frequencySelected = true;
        }
      });
      if (!frequencySelected) {
        showError("Please select frequency", errorElements[7]);
        valid = false;
      }
  
      if (priceInput.value.trim() === "") {
        showError("Please provide the price", errorElements[8]);
        valid = false;
      }
  
      let wirelessSelected = false;
      wirelessRadio.forEach((radio) => {
        if (radio.checked) {
          wirelessSelected = true;
        }
      });
      if (!wirelessSelected) {
        showError("Please select wireless standard", errorElements[9]);
        valid = false;
      }
  
      if (categorySelect.value === "Choose...") {
        showError("Please select category", errorElements[10]);
        valid = false;
      }
  
      let dataRateSelected = false;
      dataRateRadio.forEach((radio) => {
        if (radio.checked) {
          dataRateSelected = true;
        }
      });
      if (!dataRateSelected) {
        showError("Please select Data rate", errorElements[11]);
        valid = false;
      }
  
      if (valid) {
        // Form is valid; you can proceed with form submission or further actions.
        // Example: Send data to the server using AJAX.
      }
    }
  
    function showError(message, errorElement) {
      errorElement.textContent = message;
      errorElement.style.color = "red";
      errorElement.style.display ="block";
    }
  });
  