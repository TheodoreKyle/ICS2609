<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Phone and Tablet Inventory Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="form-wrap">
    <div class="form-header">
      <div class="badge">
        <span class="badge-dot"></span>
        Inventory Management
      </div>
      <h1>Phone and Tablet Inventory Form</h1>
    </div>

    <form action="Save.php" method="post">

      <div class="form-row">
        <label for="product_name">Product name</label>
        <select id="product_name" name="product_name" required>
          <option value="" disabled selected>Select a brand</option>
          <option value="Apple">Apple</option>
          <option value="Samsung">Samsung</option>
          <option value="Xiaomi">Xiaomi</option>
          <option value="HONOR">HONOR</option>
          <option value="Vivo">Vivo</option>
          <option value="Oppo">Oppo</option>
          <option value="Tecno">Tecno</option>
          <option value="Huawei">Huawei</option>
          <option value="Nubia">Nubia</option>
        </select>
      </div>

      <div class="form-row">
        <label for="description">Description</label>
        <input
          type="text"
          id="description"
          name="description"
          placeholder="e.g. iPhone 16 Pro, 256GB, Black Titanium"
        />
      </div>

      <div class="form-grid">
        <div class="form-row" style="margin-bottom: 0;">
          <label for="price">Price <span class="req">*</span></label>
          <div class="input-prefix">
            <span class="prefix-symbol">₱</span>
            <input type="number" id="price" name="price" placeholder="0.00" min="0" step="0.01" required/>
          </div>
        </div>

        <div class="form-row" style="margin-bottom: 0;">
          <label for="stock_quantity">Stock quantity <span class="req">*</span></label>
          <input
            type="number"
            id="stock_quantity"
            name="stock_quantity"
            placeholder="0"
            min="0"
            step="1"
            required
          />
        </div>
      </div>

      <div class="form-row" style="margin-top: 1.25rem;">
        <label for="category">Category <span class="req">*</span></label>
        <select id="category" name="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="Phone">Phone</option>
          <option value="Tablet">Tablet</option>
        </select>
      </div>

      <div class="form-actions">
        <button type="reset" class="btn-reset">Reset</button>
        <button type="submit" class="btn-submit">Add to inventory</button>
      </div>

    </form>
  </div>

</body>
</html>