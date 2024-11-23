<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
  <style>
    /* Optional: additional styling */
    .header {
      background-color: #212529;
      padding: 15px;
      color: white;
    }
    .product-gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px; /* Space between photo holders */
}
.product-gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px; /* Space between photo holders */
}

.product-holder {
    border: 1px solid #ccc; /* Add border for each product holder */
    border-radius: 8px; /* Rounded corners */
    padding: 40px; /* Padding inside each holder */
    text-align: center; /* Center text */
    background-color: #f9f9f9; /* Light background color */
    height: 300px; /* Set a fixed height for each holder */
    overflow: hidden; /* Hide any overflow from images */
}

.product-holder img {
    width: 100%; /* Make the images fill the holder width */
    height: 200px; /* Set a fixed height for the images */
    object-fit: cover; /* Ensure the image covers the area without stretching */
    border-radius: 5px; /* Rounded corners for images */
}

    .nav-link {
      text-align: center;
      font-size: 0.875rem;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- main content -->
    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/es-teh.webp" alt="Es Teh" class="img-fluid">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h2>Tentang Es Teh Kami</h2>
                    <p>Kami menyajikan es teh segar yang dibuat dari teh berkualitas tinggi dan bahan alami. Dengan berbagai varian rasa, es teh kami cocok untuk menemani setiap momen spesialmu.</p>
                    <a href="product.php" class="btn btn-outline-success">Explore Menu</a>
                </div>
            </div>
        </div>
<!-- end content -->

    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>