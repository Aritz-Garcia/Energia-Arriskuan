<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontaktua</title>
</head>
<body>
    <h1>{{ $request->input('name') }} kontaktuan jarri nahi da hurrengo mezuarekin:</h1>
    <p><b>Gaia: </b>{{ $request->input('subject') }}</p>
    <p><b>Mezua: </b>{{ $request->input('message') }}</p>
    <br>
    <p>Mezu erantzuteko jarri kontaktuan <b>{{ $request->input('email') }}</b> helbidearekin.</p>
</body>
</html>