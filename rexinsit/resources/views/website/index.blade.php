@extends('layouts.webmaster')
@section('web_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rex-Innovative & Solutions </title>
</head>
<body>
@include('website.web_manager.manage_header.header_version_1')
    
    <section class="bannerindex">
        <div class="container">
            <img src="{{asset('contents/vendor/frontend')}}/vendor/images/logo.png" alt="image" >
            <h1><span>Rex-</span> Innovative & Solutions</h1>
            <a href="{{route('login')}}">Login  || </a>
            <a href="{{route('register')}}"> Register  </a>
        </div>
    </section>

    
</body>
</html>
@endsection