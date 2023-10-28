<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('accueil.nav')
<div class="col-5">
    <div class="card m-2">
        <div class="card-header">
            <h3 class="text-center text-info border border-secondary">Modifier le n'iveau d'etude{{$nve->libelle}}</h3>
        </div>
        
<div class="card-body">

<form class="m-2" action="{{route('nve.update',$nve->id)}}"  method="POST" >

@method("PUT")

@csrf
  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">libelle</label>
    @error('libelle')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control"  name="libelle" id="disabledTextInput" aria-describedby="emailHelp" value="{{$nve->libelle}}">
</div>
 
  
  <button type="submit" class="btn btn-info">modifier</button>
</form>


</div>
</div>
</div>
</body>
</html>