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
        
<div class="card-body">

<form class="m-2" method="POST" action="{{route('nve.store')}}">

@csrf
 

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">libelle</label>
    @error('libelle')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="exampleInputPassword1" name="libelle">
  </div>
  
  <button type="submit" class="btn btn-info">Submit</button>
</form>


</div>
</div>
</div>


</body>
</html>