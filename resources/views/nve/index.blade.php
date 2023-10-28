<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('accueil.nav')


<div class="container py-2" >

<h5 class="text-uppercase border border-success p-2 mb-2 mt-4">Liste des niveaux d'etude <i class="fa fa-graduation-cap"></i></h5>
  <a href="/ajouter_nve"  class="btn btn-primary mb-3 mt-3">Ajouter un niveau d'etude <i class="fa fa-plus"></i></a>
    <table class="table border-success table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Niveau d'etude</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
  
  @foreach($nves as $nve)
   
    <tr>
     
      <th scope="row">{{$nve->id}}</th>
      <td>{{$nve->libelle}}</td>


      <td><a href="{{route('nve.editer',$nve->id)}}" class="btn btn-primary">Modifier <i class="fa fa-retweet"></i></a>
    <a href="{{route('nve.destroy',$nve->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash"></i></a>
    <a href="{{route('nve.show',$nve->id)}}" class="btn btn-info">Detail <i class="fa fa-eye"></i></a>
    </td>
     
    </tr>



    @endforeach
  </tbody>
</table>

    </div>
  
</body>
</html>