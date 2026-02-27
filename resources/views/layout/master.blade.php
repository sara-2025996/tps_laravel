<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\css\app.css','resources\js\app.js'])
</head>
<body>
    @include('partials.navbar')

    <div class='row' >
        <div class="col-3" >
            @include('partials.sidebar')
        </div>
        <div class='col-9' >
            <div class="container" >


{{-- @if (session('success'))
    <div class="alert alert-success " >
        {{ session('success') }}
    </div>
@endif --}}
                @yield('content')
            </div>
        </div>
        
    </div>
</body>
</html>