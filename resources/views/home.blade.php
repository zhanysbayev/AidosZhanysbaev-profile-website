<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('home.css') }}">
    <title>HOME</title>
</head>
<body>
    <div class="full">
        <div class="header">
            <a href="" id="home">{{__('lang.home')}}</a>
            <a href="{{ route('about') }}" id="about">{{__('lang.about')}}</a>
            <a href="{{ route('contact') }}" id="contact">{{__('lang.contacts')}}</a>
        </div>
        <div class="center">
            <div class="photo">
                <img src="https://wallpaperaccess.com/full/637698.jpg" alt="">
            </div>
            <div class="name">
                <h1>{{__('lang.name')}}</h1>
                <h5>{{__('lang.body')}}</h5>
                <h5>{{__('lang.bodyy')}}</h5>
            </div>
        </div>
    </div>
</body>
</html>