<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') Larovel @show</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}">
</head>

<body>
    <div class="blank">
        <x-main.header></x-main.header>
        <div class="NavContent">
            <x-main.navbar></x-main.navbar>
            <div class='content'>
                @yield('content')
            </div>
        </div>
    </div>
    <x-main.footer></x-main.footer>
</body>

</html>
