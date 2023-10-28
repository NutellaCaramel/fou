<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
@include('accueil.nav')
<div class="col-5">
    <div class="card m-2">
        <div class="card-header">
            <h3 class="text-center text-info border border-secondary">Formulaire d'ajout</h3>
        </div>
        
<div class="">

<form class="m-2" method="POST" action="{{route('apprenants.ajouter')}}">

@csrf
 
    <label for="disabledTextInput" class="form-label">Nom</label>
    @error('nom')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control"  name="nom" id="disabledTextInput" aria-describedby="emailHelp">

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Prenom</label>
    @error('prenom')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom">
  </div>
  

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Adresse <i class="fa fa-map-marker"></i></label>
    @error('adresse')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="disabledTextInput" name="adresse">
  </div>

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Telephone</label>
    @error('telephone')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="exampleInputPassword1" name="telephone">
  </div>
  
  <button type="submit" class="btn btn-info">Submit</button>
</form>


</div>
</div>
</div>


</body>
</html>