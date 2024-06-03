export default function HandleAddPrdForm () {
  document.getElementById('productForm').addEventListener('submit', function(event) {
    // event.preventDefault();
  
    // Clear previous error messages
    const errors = document.querySelectorAll('.error');
    errors.forEach(error => error.style.display = 'none');
  
    let hasError = false;
  
    // Validate product name (at least 3 characters)
    const productName = document.getElementById('productName').value;
    if (productName.length < 3) {
      document.getElementById('productNameError').textContent = 'Tên sản phẩm phải có ít nhất 3 ký tự.';
      document.getElementById('productNameError').style.display = 'block';
      hasError = true;
    }
  
    // Validate product category (not empty)
    const productCategory = document.getElementById('productCategory').value;
    if (productCategory === "") {
      document.getElementById('productCategoryError').textContent = 'Vui lòng chọn danh mục sản phẩm.';
      document.getElementById('productCategoryError').style.display = 'block';
      hasError = true;
    }
  
    // Validate product price (positive number)
    const productPrice = document.getElementById('productPrice').value;
    const pricePattern = /^\d+(\.\d{1,2})?$/;
    if (!pricePattern.test(productPrice) || parseFloat(productPrice) <= 0) {
      document.getElementById('productPriceError').textContent = 'Giá sản phẩm phải là số dương và có thể có tối đa 2 chữ số thập phân.';
      document.getElementById('productPriceError').style.display = 'block';
      hasError = true;
    }
  
    // Validate product quantity (positive integer)
    const productQuantity = document.getElementById('productQuantity').value;
    if (!Number.isInteger(Number(productQuantity)) || parseInt(productQuantity) <= 0) {
      document.getElementById('productQuantityError').textContent = 'Số lượng phải là số nguyên dương.';
      document.getElementById('productQuantityError').style.display = 'block';
      hasError = true;
    }
  
    // Validate product description (at least 10 characters)
    const productDescription = document.getElementById('productDescription').value;
    if (productDescription.length < 10) {
      document.getElementById('productDescriptionError').textContent = 'Mô tả sản phẩm phải có ít nhất 10 ký tự.';
      document.getElementById('productDescriptionError').style.display = 'block';
      hasError = true;
    }
  
    // Validate SKU (at least 3 characters)
    const productSKU = document.getElementById('productSKU').value;
    if (productSKU.length < 3) {
      document.getElementById('productSKUError').textContent = 'SKU phải có ít nhất 3 ký tự.';
      document.getElementById('productSKUError').style.display = 'block';
      hasError = true;
    }
  
    // Validate brand (at least 2 characters)
    const productBrand = document.getElementById('productBrand').value;
    if (productBrand.length < 2) {
      document.getElementById('productBrandError').textContent = 'Thương hiệu phải có ít nhất 2 ký tự.';
      document.getElementById('productBrandError').style.display = 'block';
      hasError = true;
    }
  
    // Validate product image (file selected)
    const productImage = document.getElementById('productImage').files.length;
    if (productImage === 0) {
      document.getElementById('productImageError').textContent = 'Vui lòng chọn hình ảnh sản phẩm.';
      document.getElementById('productImageError').style.display = 'block';
      hasError = true;
    }
  
    // If no errors, submit the form (you can add your form submission logic here)
    if (!hasError) {
      alert('Sản phẩm được tạo thành công!');
      // form.submit(); // Uncomment this to submit the form
    }
  });
}