<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
@include('accueil.nav')

<div class="card mt-5 ms-5" style="width: 25rem;">
  <div class="card-body ">
    <h5 class="card-title bg bg-secondary text-center py-4">DETAIL DU NIVEAU D'ETUDE <span class="text-info ">:{{$nve->libelle}}</span> </h5>
    <p >ID: {{$nve->id}}</p> 
   <p>Libelle: {{$nve->libelle}}</p>
  
  </div>
</div>
    
</body>
</html>
