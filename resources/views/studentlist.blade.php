<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>{{ $nama }}</p> <br>
    <h1>belajar laravel di views</h1><br>
    <h2>{{ $jurusan }}</h2><br>
    @foreach ($mapel as $mp)
        <li>{{ $mp }}</li>
    @endforeach
</body>

</html>
