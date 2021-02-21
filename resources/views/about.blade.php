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
            <a href="{{ route('home') }}" id="home">Home</a>
            <a href="{{ route('about') }}" id="about">About me</a>
            <a href="{{ route('contact') }}" id="contact">Contacts</a>
        </div>
        <div class="center">
            <div class="center1">
            <div class="img">
                <img src="https://cdn.shopify.com/s/files/1/0054/4371/5170/products/PatrickStar_466pin.png?v=1602037829" alt="">
            </div>
            <div class="text">
                <h1>About Me</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aperiam magnam maiores fugit hic suscipit a.
                    Laboriosam aperiam magnam maiores fugit hic suscipit a.Laboriosam aperiam magnam maiores fugit hic suscipit a. </p>
                    <div class="card">
                        <div class="part1">
                            <p><b>Full Name:</b> Aidos Zhanysbayev</p>
                            <p><b>Birth Date:</b> August 20, 2002</p>
                            <p><b>Country: </b>Kazakhstan</p>
                            <p><b>City: </b>Karaganda</p>
                        </div>
                        <div class="part2">
                            <p><b>Experience: </b> 18 years</p>
                            <p><b>Education: </b>SDU</p>
                            <p><b>Gender: </b>Male</p>
                            <p><b>Status: </b>taken</p>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>