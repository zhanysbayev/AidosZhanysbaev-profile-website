<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('about.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>ABOUT ME</title>
</head>
<body>
    <div class="full">
        <div class="header">
            <a href="{{ route('home') }}" id="home">{{__('lang.home')}}</a>
            <a href="{{ route('about') }}" id="about">{{__('lang.about')}}</a>
            <a href="{{ route('contact') }}" id="contact">{{__('lang.contacts')}}</a>
        </div>
        <div class="center">
            <div class="center1">
            <div class="img">
                <img src="https://cdn.shopify.com/s/files/1/0054/4371/5170/products/PatrickStar_466pin.png?v=1602037829" alt="">
            </div>
            <div class="text">
                <h1>{{__('lang.about')}}</h1>
                <p>{{__('lang.info')}}</p>
                    <div class="card">
                        <div class="part1">
                            <p><b>{{__('lang.fullname')}}</b> {{__('lang.name')}}</p>
                            <p><b>{{__('lang.birthdate')}}</b>{{__('lang.bday')}}</p>
                            <p><b>{{__('lang.country')}} </b>{{__('lang.kazakhstan')}}</p>
                            <p><b>{{__('lang.city')}} </b>{{__('lang.karaganda')}}</p>
                        </div>
                        <div class="part2">
                            <p><b>{{__('lang.exp')}} </b> {{__('lang.years')}}</p>
                            <p><b>{{__('lang.edu')}} </b>{{__('lang.sdu')}}</p>
                            <p><b>{{__('lang.gender')}} </b>{{__('lang.male')}}</p>
                            <p><b>{{__('lang.status')}} </b>{{__('lang.taken')}}</p>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>