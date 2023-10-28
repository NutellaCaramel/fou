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

<div class="container py-2" >
    <h4 class="module"> Ajouter un module</h4>
     
    <form action="{{route('module.store')}}" method="post">
        
    @csrf
   
        <label class="form-label">Module</label>
        @error('libelle')
        <span class=" text-danger">{{$message}}</span>
        @enderror
        <input type="text" class="form-control" name="libelle">

        <label class="form-label">Duree</label>
        @error('duree')
        <span class=" text-danger">{{$message}}</span>
        @enderror
        <input type="text" class="form-control"  name="duree" >

        <label class="form-label">Montant</label>
        @error('montant')
        <span class=" text-danger">{{$message}}</span>
        @enderror
        <input type="text"  class="form-control" name="montant" >

    
        <label class="form-label">Niveau d'etude</label>
        <select  class="form-control" name="id_nve">
             @foreach($nves as $nve)
            <option value="{{$nve->id}}">{{$nve->libelle}}</option>
          @endforeach
        </select>


        <input type="submit" value="Ajouter un module" class="btn btn-primary my-2" >
    </form>
</div>
</body>
</html>