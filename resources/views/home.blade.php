<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>
<body class = "bg-dark">
<div class= "header">
           <a href="" id="home">Home</a>
           <a href="{{ route('about') }}" id="about" >About</a>
           <a href="{{ route('contact') }}" id="contact">Contact</a>
</div>
    
</body>
</html>