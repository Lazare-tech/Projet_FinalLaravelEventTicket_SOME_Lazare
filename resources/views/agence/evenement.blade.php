<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>liste evenement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

  <div class="container text-center">
    <div class="row">
      <div class="col-lg-9">
        <h2 class="mt-3">Liste evenement</h2>
        <a href="#" class="btn btn-primary">Creer evenement</a>

      
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
      </div>
      <table class="table table-striped">
        {{-- <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom </th>
            <th scope="col">Classes</th>
            <th scope="col">Photo</th>
            <th scope="col">Ville</th>
            <th scope="col">Nationalite</th>
            <th scope="col">Groupe Sanghin</th>
            <th scope="col">Tuteurs</th>
            <th>Actions</th>
          </tr>
        </thead>
        
          @foreach ($evenement as $evenement )
          <tr>
            <td>{{ $evenement->id }}</td>
            <td>{{ $evenement->lieu }}</td> 
            <td>{{ $evenement->categorie->type }}</td>
            <td>{{ $evenement->description }}</td>
            <td>{{ $evenement->resume }}</td>
            <td>{{ $evenement->date_debut }}</td>
            <td>{{ $evenement->date_fin }}</td>

                        <td>{{ $evenement->->type }}</td>

            <td><img src="images/{{ $evenement->photo }}" alt="" style="height:60px;width:60px"></td>
            <td>{{ $etudiant->timezone->nom }}</td>
            <td>{{ $etudiant->nationalite->nom }}</td>
            <td>{{ $etudiant->groupe->nom}}</td>
            <td>{{ $etudiant->tuteur->nom }} {{ $etudiant->tuteur->prenom }}</td>
            <td>
              <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-primary">Update</a>
              <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>

            </td>
            
          </tr>


          @endforeach --}}


         
        </tbody>

      </table>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>