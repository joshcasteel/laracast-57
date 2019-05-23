<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Laracasts Project</title>
</head>
<body>
        <nav>
            <div class="nav-wrapper">
                <a href="/projects" class="brand-logo right">Laracast-Project</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/projects">Home</a></li>
                <li><a href="/projects/create">New</a></li>
                </ul>
            </div>
            </nav>
    @yield('content')
</body>
</html>