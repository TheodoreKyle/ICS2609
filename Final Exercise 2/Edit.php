<?php
    require_once("Post.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $p = new Post();
        $p->setId($_POST['id']);
        $p->setProductName($_POST['product_name']);
        $p->setDescription($_POST['description']);
        $p->setPrice($_POST['price']);
        $p->setStockQuantity($_POST['stock_quantity']);
        $p->setCategory($_POST['category']);

        $p->updatePost();
        echo "<script>alert('Data Updated Successfully'); document.location='Read.php'</script>";
        exit;
    }

    // Fetch existing data
    if (!isset($_GET['id'])) {
        header("Location: Read.php");
        exit;
    }

    $p = new Post();
    $post = $p->getPost($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Inventory Item</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="form-wrap">
    <div class="form-header">
      <div class="badge">
        <span class="badge-dot"></span>
        Inventory Management
      </div>
      <h1>Edit Inventory Item</h1>
    </div>

    <form action="Edit.php" method="post">
      <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>

      <div class="form-row">
        <label for="product_name">Product name</label>
        <select id="product_name" name="product_name" required>
          <option value="" disabled>Select a brand</option>
          <?php
            $brands = ['Apple','Samsung','Xiaomi','HONOR','Vivo','Oppo','Tecno','Huawei','Nubia'];
            foreach ($brands as $brand) {
              $selected = ($post->product_name === $brand) ? 'selected' : '';
              echo "<option value=\"$brand\" $selected>$brand</option>";
            }
          ?>
        </select>
      </div>

      <div class="form-row">
        <label for="description">Description</label>
        <input
          type="text"
          id="description"
          name="description"
          placeholder="e.g. iPhone 16 Pro, 256GB, Black Titanium"
          value="<?php echo htmlspecialchars($post->description); ?>"
        />
      </div>

      <div class="form-grid">
        <div class="form-row" style="margin-bottom: 0;">
          <label for="price">Price <span class="req">*</span></label>
          <div class="input-prefix">
            <span class="prefix-symbol">₱</span>
            <input type="number" id="price" name="price" placeholder="0.00" min="0" step="0.01" required
              value="<?php echo $post->price; ?>"/>
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
            value="<?php echo $post->stock_quantity; ?>"
          />
        </div>
      </div>

      <div class="form-row" style="margin-top: 1.25rem;">
        <label for="category">Category <span class="req">*</span></label>
        <select id="category" name="category" required>
          <option value="" disabled>Select a category</option>
          <?php
            $categories = ['Phone', 'Tablet'];
            foreach ($categories as $cat) {
              $selected = ($post->category === $cat) ? 'selected' : '';
              echo "<option value=\"$cat\" $selected>$cat</option>";
            }
          ?>
        </select>
      </div>

      <div class="form-actions">
        <a href="Read.php" class="btn-reset" style="display:inline-flex; align-items:center; text-decoration:none;">Cancel</a>
        <button type="submit" class="btn-submit">Save Changes</button>
      </div>

    </form>
  </div>

</body>
</html>