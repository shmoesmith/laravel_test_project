<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>About This Project</h1>
        <p>This project was designed for me to:
<!-- use blade templating foreach technique to loop vs. standard php loop -->
          <ul>
            @foreach ($points as $point)
            <li>{{ $point }}</li>
            @endforeach
          </ul>
        </p>
    </body>
</html>
