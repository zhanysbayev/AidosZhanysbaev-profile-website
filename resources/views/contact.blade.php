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
            <a href="{{ route('home') }}" id="home">Home</a>
            <a href="{{ route('about') }}" id="about">About me</a>
            <a href="{{ route('contact') }}" id="contact">Contacts</a>
        </div>
        <div class="contact" id="contact">
            <div class="hero_img">
                <form class="needs-validation">
                <h1 id="shh2">Hi!</h1>
                <p id="shp"> If you have some questions you can send me message </p>
                <div class="form-group">
                     <label id="labn" for="name">Name</label><br> 
                     <input id="name" type="text" class="form-control" name = "name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                     <label id="labe" for="email">Email</label><br> 
                     <input id="email" type="email" class="form-control" name = "email" placeholder="Enter your email" required >
                </div>
                <div class="form-group">
                    <label id="labm" for="mes">Message</label> 
                    <input id="mes" type="text" class="form-control" name = "message" placeholder="Enter your message" required>
                </div>
                <div class="end">
                     <button id="but2" class="btn">Send Message</button> 
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>