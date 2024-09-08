@extends('layouts.app')
  
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Carousel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Carousel -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cashback.jpg" class="d-block w-100" alt="Cashback Promo">
        <div class="carousel-caption">
            <p class="cover-title animated fadeInUp delayp1">Promo Cashback Rp10.000</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="img/serbagratiss.jpg" class="d-block w-100" alt="Serba Gratis Promo">
      </div>
      <div class="carousel-caption">
        </div>
      <div class="carousel-item">
        <img src="img/diskon.png" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<div class="promo-program" style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-top: 20px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Promo</h2>
    </div>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="img/1.png" class="card-img-top" alt="Hot Promo">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="img/2.png" class="card-img-top" alt="Promo JSM">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="img/3.png" class="card-img-top" alt="PSM">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="img/4.png" class="card-img-top" alt="Promo Serba">
            </div>
        </div>

        {{-- Add more promo cards here --}}
    </div>
</div>
@endsection

  
  

