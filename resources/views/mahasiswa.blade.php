<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach ($nilai as $val)
        @if (($val < 50))
        @break
        @endif
        <div class="alert alert-success d-inline-block">
            {{ $val }}
        </div>
        @endforeach

    </div>
</body>
</html>
