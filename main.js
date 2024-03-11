
let selector=(sel)=>document.querySelectorAll(sel);
 let radiobut = selector('input[type="radio"]')
 ,checkboxes = selector('input[type="checkbox"]')
 ,textInputs = selector('input[type="text"]')
 ,images = selector('input[type="file"]')
 ,drop =selector('select');
 let submit=document.getElementById("save");

function dat() {
  drop.forEach((option) => {     
      console.log(option.name +": " + option.value);
  });

  radiobut.forEach((radio) => {
    if (radio.checked) {
      console.log(radio.name +": " + radio.value);
    }
  });

  checkboxes.forEach((checkbox) => {
    console.log( checkbox.name+": " + checkbox.value + " (Checked: " + checkbox.checked + ")");
  });

  textInputs.forEach((textInput) => {
    console.log(textInput.name+": " + textInput.value);
  });

  images.forEach((imageInput) => {
    console.log(imageInput.name+": " + imageInput.files[0].name);
  });
}



