<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="unknown.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>@yield('title')</title>
    
</head>
<body>
    <img class="nv-Background" width="100%" src="background.svg">
    @include('layout.navigationTop')
    <div class="container-fluid">
        <h1>@yield('page_title')</h1>
    </div>
    <div class="container-fluid">
        
        @yield('main_content')
    </div>
</body>
</html>