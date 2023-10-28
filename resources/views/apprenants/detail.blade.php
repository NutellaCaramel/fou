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
    <h5 class="card-title border border-success bg bg-secondary text-white text-center py-4">DETAIL DE L'APPRENANT <span class="text-info "> {{$apprenant->nom}} {{$apprenant->prenom}}:</span> </h5>
   <p>ID: {{$apprenant->id}}</p> 
   <p>Nom: {{$apprenant->nom}}</p>
   <p>Prenom: {{$apprenant->prenom}}</p>
   <p>Adresse: {{$apprenant->adresse}}</p>
   <p>Telephone: {{$apprenant->telephone}}</p>
   
  
  </div>
</div>
</body>
</html>
