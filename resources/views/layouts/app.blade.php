<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="font-['Poppins']">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    <x-chat></x-chat>
    @include('partials.footer')
</body>
</html>
