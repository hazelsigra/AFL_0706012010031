<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Navigation</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-warning">
    <div class="container-fluid">
        <ul class="navbar-nav nav-pills">
        <li class="nav-item">
        <a class="nav-link
            @if('title' == 'Home')
            active
            @endif" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link
            @if('title' == 'Player')
            active
            @endif" href="/player">Player</a>
        </li>
        <li class="nav-item">
        <a class="nav-link
            @if('title' == 'Account')
            active
            @endif" href="/account">Account</a>
        </li>
        </ul>
    </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-warning navbar-white fixed-bottom">
    <div class="container-fluid justify-content-center">
        <span class="navbar-text">Copyright Project Catalog ©2021</span>
    </div>
    </nav>
</body>
</html>
