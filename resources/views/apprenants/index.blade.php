<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
@include('accueil.nav')
<body>
<div class="container py-3 ">
  <h5 class="text-uppercase border border-success p-2 mb-2 mt-3 ">Liste des apprenants <i class="fa fa-user"></i></h5>
  <a href="/ajouter"  class="btn btn-primary mb-3 mt-3 ">Ajouter un Apprenant <i class="fa fa-plus"></i>
</a>
<table class="table table-dark border-success">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">adresse</th>
      <th scope="col">telephone</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  <tbody>

@foreach($apprenants as $apprenant)
 <tr>
<th scope="row">{{$apprenant->id}}</th>
<td>{{$apprenant->nom}}</td>
<td>{{$apprenant->prenom}}</td>
<td>{{$apprenant->adresse}}</td>
<td>{{$apprenant->telephone}}</td>

<td><a href="{{route('apprenants.editer',$apprenant->id)}}" class="btn btn-primary">Modifier <i class="fa fa-retweet"></i></a>
    <a href="{{route('apprenants.supprimer',$apprenant->id)}}" class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></a>
    <a href="{{route('apprenants.detail',$apprenant->id)}}" class="btn btn-info">Detail <i class="fa fa-eye"></i></a>
</td>



   
</td>
 </tr>
@endforeach


</tbody>
</table>
</div>
</body>

</html>