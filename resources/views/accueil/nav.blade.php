<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<nav class="navbar navbar-expand-lg bg-dark  py-3 border border-secondary">
  <div class="container-fluid">
  <img src="/logo.jpg" class="rounded-circle img" >
 
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link active  border-bottom text-light  border-top border-success" aria-current="page" href="/">Accueil <i class="fa fa-home"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-top text-light  border-bottom border-success" href="/apprenant">Liste des apprenants <i class="fa fa-user"></i></a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link  border-bottom  text-light border-top border-success" href="/modules">Liste des Modules <i class="fa fa-book"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  border-top border-bottom text-light border-success" href="/nves">Liste des Niveaux d'etudes <i class="fa fa-graduation-cap"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  border-bottom text-light border-top border-success" href="/paiements">Liste des Payments <i class="fa fa-credit-card"></i></a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<body class="body">
  
</body>

<footer>
@include('accueil.footer')
</footer>
</html>





