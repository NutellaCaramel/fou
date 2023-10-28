<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

@include('accueil.nav')
<body>

    <div class="container py-2">
    <h5 class="text-uppercase border border-success p-2 mb-2 mt-4">Liste des modules <i class="fa fa-book"></i></h5>
  <a href="/ajouter_module"  class="btn btn-primary mb-3 mt-3">Ajouter un Module <i class="fa fa-plus"></i>
</a>
    <table class="table border-secondary table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Modules</th>
      <th scope="col">Duree</th>
      <th scope="col">Montant</th>   
      <th scope="col">Action</th>  

      
    </tr>
  </thead>
  <tbody>
  
  @foreach($modules as $module)
    <tr>
     
      <th scope="row">{{$module->id}}</th>
      <td>{{$module->libelle}}</td>
      <td> {{$module->duree}} </td>
      <td> {{$module->montant}} </td>
   

      <td>
     <a href="{{route('module.edit',$module->id)}}" class="btn btn-primary">Modifier <i class="fa fa-retweet" ></i></a>
     <a href="{{route('module.destroy',$module->id)}}"  class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></a>
    <a href="{{route('module.show',$module->id)}}" class="btn btn-primary">Detail <i class="fa fa-eye"></i></a>
    
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

    </div>

</body>
</html>