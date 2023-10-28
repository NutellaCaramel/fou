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
        <div class="card-header ">
            <h3 class="text-center border border-primary">Modifier l'apprenant <span class="text-primary">{{$apprenant->nom}}</span></h3>
        </div>
        
<div class="card-body">

<form class="m-2" action="{{route('apprenants.modifier',$apprenant->id)}}"  method="POST" >

@method("PUT")

@csrf
  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Nom</label>
    @error('nom')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control"  name="nom" id="disabledTextInput" aria-describedby="emailHelp" value="{{$apprenant->nom}}">
</div>
  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Prenom</label>
  
        @error('prenom')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom" value="{{$apprenant->prenom}}">
  </div>
  

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Adresse</label>
    @error('adresse')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="disabledTextInput" name="adresse" value="{{$apprenant->adresse}}">
  </div>

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Telephone</label>
    @error('telephone')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" id="exampleInputPassword1" name="telephone" value="{{$apprenant->telephone}}">
  </div>
  
  <button type="submit" class="btn btn-success">modifier</button>
</form>


</div>
</div>
</div>
</body>
</html>