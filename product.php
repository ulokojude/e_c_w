<?php 
  include("includes/header.php");
  include("data/products.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
      crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/products.css">
    <title>Products | GrabBoss</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">GrabBoss</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="products.php" class="nav-link text-light">Products</a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Profile</a></li>
  
          </ul>
        </div>

      </div>
    </nav>

    <!-- Pages Header -->
    <section class="container py-5">
      <div class="row g-4 product-grid">
        <!-- Product Card -->
        <?php foreach($products as $product): ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="product-container">
              <div class="product-image-container">
                <img class="product-image" src="<?php echo $product['image']; ?>">
              </div> 
              <div class="product-name limit-text-to-2-lines">
                <?php echo $product['name']; ?>
              </div>
              <div class="product-rating-container">
                <img class="product-rating-stars"
                  src="images/ratings/rating-<?php echo $product['rating']['stars'] * 10; ?>.png">
                <div class="product-rating-count link-primary">
                    <?php echo $product['rating']['count']; ?>
                </div>
              </div>
              <div class="product-price">
                $<?php echo number_format($product['priceCents'] / 100, 2); ?>
              </div>
              <div class="product-spacer"></div>
              <div class="added-to-cart">
                <img src="images/icons/checkmark.png">
                Added
              </div>
              <button 
                class="add-to-cart-button button-primary js-add-to-cart-button"
                data-product-id="<?php echo $product['id']; ?>">
                Add to Cart
              </button>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </section>
  </body>
</html>