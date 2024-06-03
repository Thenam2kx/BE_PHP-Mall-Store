<section class="AddPrd">
  <form class="productForm" id="productForm">
    <div class="form-group">
      <label for="productName">Tên sản phẩm:</label>
      <input type="text" id="productName" name="productName" required>
      <span class="error" id="productNameError"></span>
    </div>
    <div class="form-group">
      <label for="productCategory">Danh mục sản phẩm:</label>
      <select id="productCategory" name="productCategory" required>
        <option value="">Chọn danh mục</option>
        <option value="electronics">Điện tử</option>
        <option value="fashion">Thời trang</option>
        <option value="home">Đồ gia dụng</option>
        <option value="books">Sách</option>
      </select>
      <span class="error" id="productCategoryError"></span>
    </div>
    <div class="form-group">
      <label for="productPrice">Giá sản phẩm:</label>
      <input type="text" id="productPrice" name="productPrice" required>
      <span class="error" id="productPriceError"></span>
    </div>
    <div class="form-group">
      <label for="productQuantity">Số lượng:</label>
      <input type="number" id="productQuantity" name="productQuantity" required>
      <span class="error" id="productQuantityError"></span>
    </div>
    <div class="form-group">
      <label for="productDescription">Mô tả sản phẩm:</label>
      <textarea id="productDescription" name="productDescription" required></textarea>
      <span class="error" id="productDescriptionError"></span>
    </div>
    <div class="form-group">
      <label for="productSKU">SKU:</label>
      <input type="text" id="productSKU" name="productSKU" required>
      <span class="error" id="productSKUError"></span>
    </div>
    <div class="form-group">
      <label for="productBrand">Thương hiệu:</label>
      <input type="text" id="productBrand" name="productBrand" required>
      <span class="error" id="productBrandError"></span>
    </div>
    <div class="form-group">
      <label for="productImage">Hình ảnh sản phẩm:</label>
      <input type="file" id="productImage" name="productImage" accept="image/*" required>
      <span class="error" id="productImageError"></span>
    </div>
    <button type="submit">Tạo Sản Phẩm</button>
  </form>
</section>