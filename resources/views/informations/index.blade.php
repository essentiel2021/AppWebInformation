<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Informations</title>
</head>
<body>
  <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Identifiant</th>
            <th scope="col">Titre</th>
            <th scope="col">Message</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date de publication</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($informations as $information)
            <tr>
              <th scope="row">{{$information->id}}</th>
              <td>{{$information->titre}}</td>
              <td>{{$information->message}}</td>
              <td>{{$information->auteur}}</td>
              <td>{{$information->created_at->diffForHumans()}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
    <div class="col-lg-1"></div>
  </div>
  
  
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>