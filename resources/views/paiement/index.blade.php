<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('accueil.nav')


<div class="container py-2">

<h5 class="text-uppercase border border-success p-2 mb-2 mt-4">Liste des paiements <i class="fa fa-credit-card"></i></h5>
  <a href="/ajouter_paiement"  class="btn btn-primary mb-3 mt-3">Ajouter un paiement <i class="fa fa-plus"></i></a>
    <table class="table border-success table-dark"> 
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">#ID Apprenant</th>
      <th scope="col">#ID Module</th>
      <th scope="col">mois</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($paiements as $paiement)
   
    <tr>
     
      <th scope="row">{{$paiement->id}}</th>
      <th scope="row">{{$paiement->id_apprenant}}</th>
      <th scope="row">{{$paiement->id_module}}</th>

      <td>{{$paiement->mois}}</td>


      <td><a href="{{route('paiement.editer',$paiement->id)}}" class="btn btn-primary">Modifier <i class="fa fa-retweet"></i></a>
    <a href="{{route('paiement.destroy',$paiement->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash"></i></a>
    <a href="{{route('paiement.show',$paiement->id)}}" class="btn btn-info">Detail <i class="fa fa-eye"></i></a>
       </td>
     
    </tr>



    @endforeach
  </tbody>

</table>

    </div>
   
</body>
</html>