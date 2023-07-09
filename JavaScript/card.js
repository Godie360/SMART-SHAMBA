const form = document.getElementById('productForm');
const nameInput = document.getElementById('nameInput');
const descriptionInput = document.getElementById('descriptionInput');
const imageInput = document.getElementById('imageInput');
const productName = document.getElementById('productName');
const productDescription = document.getElementById('productDescription');
const productImage = document.getElementById('productImage');

form.addEventListener('submit', function (event) {
  event.preventDefault();
  
  const name = nameInput.value;
  const description = descriptionInput.value;
  const image = imageInput.value;
  
  productName.textContent = name;
  productDescription.textContent = description;
  productImage.src = image;
});
