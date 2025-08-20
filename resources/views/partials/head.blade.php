<meta charset="UTF-8">
<meta property="og:url" content="{{ env('APP_URL') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $desc }}" />
<meta name="description" content="{{ $desc }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title }}</title>
<link rel="shortcut icon" href="{{ $icon ?? asset('images/smk.png')}}" type="image/x-icon">
<link rel="canonical" href="{{ env('APP_URL')}}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/markers-plugin/index.css">

{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])