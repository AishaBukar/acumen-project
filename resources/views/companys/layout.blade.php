<!DOCTYPE html>
<html>
<head>
    <title>Acumen project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Companies
                </a>
            </div>
        </nav>
    @yield('content')
</div>
    
</body>
</html>