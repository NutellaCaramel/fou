<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    @include('accueil.nav') 

    <div class="h4 pb-2 mb-4 border-bottom border-danger bg-dark.bg-gradient ">
  CENTRE DE FORMATION 10HTECH
</div>


<div id="carouselExample" class="carousel slide carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/module1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/module2.jpg" class="d-block w-100" alt="...">
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

</body>
</html>