<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task Management')</title>
   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header>
    
        <nav>
        
        </nav>
    </header>

    <main>
      
        @yield('content')
    </main>

    <footer>
    
    </footer>
</body>
</html>
