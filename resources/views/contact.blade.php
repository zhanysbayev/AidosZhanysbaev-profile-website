<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('contact.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>CONTACTS</title>
</head>
<body>
    <div class="full">
        <div class="header">
            <a href="{{ route('home') }}" id="home">{{__('lang.home')}}</a>
            <a href="{{ route('about') }}" id="about">{{__('lang.about')}}</a>
            <a href="{{ route('contact') }}" id="contact">{{__('lang.contacts')}}</a>
        </div>
        <div class="contact" id="contact">
            <div class="hero_img">
                <form class="needs-validation">
                <h1 id="shh2">{{__('lang.hi')}}</h1>
                <p id="shp"> {{__('lang.qs')}} </p>
                <div class="form-group">
                     <label id="labn" for="name">{{__('lang.namer')}}</label><br> 
                     <input id="name" type="text" class="form-control" name = "name" placeholder="{{__('lang.enteryourname')}}" required>
                </div>
                <div class="form-group">
                     <label id="labe" for="email">{{__('lang.email')}}</label><br> 
                     <input id="email" type="email" class="form-control" name = "email" placeholder="{{__('lang.enteryouremail')}}" required >
                </div>
                <div class="form-group">
                    <label id="labm" for="mes">{{__('lang.message')}}</label> 
                    <input id="mes" type="text" class="form-control" name = "message" placeholder="{{__('lang.enteryourmessage')}}" required>
                </div>
                <div class="end">
                     <button id="but2" class="btn">{{__('lang.sendmessage')}}</button> 
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>