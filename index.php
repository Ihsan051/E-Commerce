<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    
</head>
<body>
<?php include 'navbar.php'; ?>
<!-- main content -->
<div id="carouselExampleCaptions" class="carousel slide me-2" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Assets/1.png" class="d-block w-100" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block">
          <h6>hidupmu belum nikmat kalau belum mencoba EsTeh dari kami😉🤞.</h6>
          <p><a href="./product/index.html" class="btn btn-outline-success">Beli Sekarang</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Assets/2.png" class="d-block w-100" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block">
          <h6>EsTeh Varian yang ada disini sangat nikmat dan terlihat menyegarkan,tunggu apalagi buruan diorder yaa😉🙌.</h6>
          <p><a href="./product/index.html" class="btn btn-outline-success">Beli Sekarang</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Assets/3.png" class="d-block w-100" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block">
          <h6>Some representative placeholder content for the third slide.</h6>
          <p><a href="./product/index.html" class="btn btn-outline-success">Beli Sekarang</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Assets/4.png" class="d-block w-100" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block">
          <h6>Some representative placeholder content for the third slide.</h6>
          <p><a href="./product/index.html" class="btn btn-outline-success">Beli Sekarang</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Assets/5.png" class="d-block w-100" alt="..."  style="height: 700px;">
        <div class="carousel-caption d-none d-md-block">
          <h6>Some representative placeholder content for the third slide.</h6>
          <p><a href="./product/index.html" class="btn btn-outline-success">Beli Sekarang</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- end content -->

    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>