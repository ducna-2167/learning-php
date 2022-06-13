<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/app.css" >
    <title>Welcome to HackerPair</title>
</head>

<body>
    <div>
        @yield('content')
    </div>
    <div>
        @section('advertisement')
        <p>
            Score some HackerPair swag in our store!
        </p>
        @show
    </div>
</body>

</html>