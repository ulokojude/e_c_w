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
      <div class="row g-4">
        <!-- Product Card -->

        <?php foreach($products as $product): ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                <!-- Rating -->
                <p class="text-warning mb-1">
                  <?php echo str_repeat('★', floor($product['rating']['stars'])); ?>
                  <?php if($product['rating']['stars'] - floor($product['rating']['stars']) >= 0.5) echo '½'; ?>
                  (<?php echo $product['rating']['count']; ?>)
                </p>
                <!-- Price -->
                <p class="fw-bold">₦<?php echo number_format($product['priceCents']); ?></p>
                <div class="mt-auto">
                  <a href="product-details.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-primary w-100 mb-2">
                    View Details
                  </a>
                  <form action="add-to-cart.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                      <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
                      <input type="hidden" name="price" value="<?php echo $product['priceCents']; ?>">
                      <button class="btn btn-primary w-100 btn-sm">Add to Cart</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </section>
  </body>
</html>