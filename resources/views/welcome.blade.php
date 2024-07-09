<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card m-2" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$movie['title']}}</h3>
                        <p class="card-text fs-5">{{$movie['nationality']}}</p>
                        <p class="card-text fs-5">{{$movie['date']}}</p>
                        <p class="card-text fs-5">{{$movie['vote']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>