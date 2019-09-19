{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Laravel</title>--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}


{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}

{{--    <h1>This is contact page</h1>--}}


{{--    <div>--}}

{{--        <p>--}}

{{--            askdjflkasdfkjhdsajfhlkjsahdflkjhsadfhdfs--}}

{{--            ashdfasdfhlkashdflkhasdflkh--}}


{{--        </p>--}}

{{--    </div>--}}

{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

@extends('layout.app')

@section('content')

    <h1>This is contact page</h1>

@if(count($page))
    <ul>


    @foreach ($page as $student)

        <li>{{$student}}</li>

    @endforeach
    </ul>
@endif

    @stop

@section('footer')

    <script>
    alert("This is footer");
    </script>
    @stop