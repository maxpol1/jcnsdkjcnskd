<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div id="app">
        <form action="" method="post">
            @csrf
{{--            <div class="mb-3">--}}
{{--                <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
{{--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="exampleInputPassword1" class="form-label">Password</label>--}}
{{--                <input type="password" class="form-control" id="exampleInputPassword1">--}}
{{--            </div>--}}
{{--            <div class="mb-3 form-check">--}}
{{--                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}

{{--        <main class="py-4">--}}
            @yield('content')
        </main>
    </div>
</body>
</html>
