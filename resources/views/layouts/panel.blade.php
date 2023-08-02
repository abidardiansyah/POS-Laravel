<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>@yield('title')</title>
    @include('includes.meta')
    @include('includes.style')
    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    @include('includes.nav')
    @yield('content')
    @include('includes.footer')
    @include('includes.script')
</body>

</html>
