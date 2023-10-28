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
            <h3 class="text-center text-info border border-secondary">Modifier le paiement</h3>
        </div>
        
<div class="card-body">

<form action="{{route('paiement.update',$paiement->id)}}" method="post">

@method("PUT")
  @csrf

  <label class="form-label">Mois</label>
 
<select  class="form-control" name="mois">

<option value="janvier">Janvier</option>
<option value="fevrier">fevrier</option>
<option value="Mars">Mars</option>
<option value="Avril">Avril</option>
<option value="Mai">Mai</option>
<option value="Juin">Juin</option>
<option value="Juillet">Juillet</option>
<option value="Aout">Aout</option>
<option value="Septembre">Septembre</option>
<option value="Octobre">Octobre</option>
<option value="Novembre">Novembre</option>
<option value="Decembre<">Decembre</option>
</select>


  <label class="form-label">apprenant</label>
  <select  class="form-control" name="id_apprenant">


          @foreach($apprenants as $apprenant)
            <option value="{{$apprenant->id}}">id {{$apprenant->id}} {{$apprenant->nom}} {{$apprenant->prenom}}
           
            </option>
          @endforeach
        </select>

        <label class="form-label">Modules</label>

        <select  class="form-control" name="id_module">
             @foreach($modules as $module)
            <option value="{{$module->id}}">{{$module->libelle}}</option>
          @endforeach
        </select>

  
  <button type="submit" class="btn btn-info mt-3">Submit</button>
</form>


</div>
</div>
</div>


</body>
</html>