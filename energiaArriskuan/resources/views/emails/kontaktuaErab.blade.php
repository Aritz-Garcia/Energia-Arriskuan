<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>Energia Arriskuan taldeko norbait jarriko da zurekin harremanetan gutxi barru.</h1>
    <br>
    <h2>Zure mezua ondorengoa izan da:</h2>
    <p><b>Gaia: </b>{{ $request->input('subject') }}</p>
    <p><b>Mezua: </b>{{ $request->input('message') }}</p>
    <br>
    <p>Eskerrik asko zure mezuagatik.</p>
    <p>Barkatu eragozpenengatik.</p>
    <p><i>Energia Arrikuan taldea</i></p>
</body>
</html>