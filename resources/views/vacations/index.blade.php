<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vacations</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>My Vacations</h1>
        <p><?= $greeting; ?></p>
        <p>this is a list of the vacations from the database:</p>
        <ul>
<!-- blade templating foreach loop to loop over vacation collection passed in from route. note: calling of each attribute -->
        @foreach ($vacations as $vacation)
        <li><a href="/vacations/{{ $vacation->id }}">{{ $vacation->location }}<span> </span>{{ $vacation->date }}</a></li>
        @endforeach
      </ul>

    </body>
</html>
