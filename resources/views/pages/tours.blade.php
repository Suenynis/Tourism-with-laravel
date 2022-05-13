<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'webBackend')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/new.css">
    <script src="tours.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-md  p-2 ">
    <div class="container">
        <a class="navbar-brand" href = "index">
            <img  src="img/Logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <img class=" navbar-toggler-icon " src = "img/toggler.png"></img>
        </button>
        <div class = " collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class = "navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active lang " aria-current="page" href="tours" key="tour">    Все туры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="comments" key="feedback">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="login" key="signin">Войти</a>
                </li>
                <li class="nav-item-lang-en"><button id="en"  onclick="Functioneng_rus()"  style = "display:block" class="nav-link translate">ENG</button></li>
                <li class="nav-item-lang-ru"><button id="ru"  onclick="Functioneng_rus()"  style = "display:none" class="nav-link translate">RUS</button></li>
            </ul>
        </div>

    </div>
</nav>
<div class="tours">
    <h2 class = "tours-heading lang" key="our tours">Наши туры</h2>
</div>
<hr>
<div class="content-2">

    <div class="card" style="width: 18rem;">
        <img src="img/1.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title lang" key="Almaty"> АЛМАТЫ </h5>
            <p class="card-text lang" key="duration">Длительность: 6 ночей в Delux </p>
            <p class="card-text">Garden View</p>
            <p class="card-text lang" key="nutrition"> Питание: AI все включено </p>
            <p class="card-text lang" key="toursists">Туристы: 2 взрослых</p>
            <a href="#" class="card-text btn btn-primary align-self-center lang" key="more about">Подробнее</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="img/2.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title lang" key="Turkistan"> ТУРКИСТАН</h5>
            <p class="card-text lang" key="duration">Длительность: 6 ночей в Delux </p>
            <p class="card-text">Garden View</p>
            <p class="card-text lang" kay="nutrition"> Питание: AI все включено </p>
            <p class="card-text lang" key="tourists">Туристы: 2 взрослых</p>
            <a href="#" class="btn btn-primary align-self-center lang" key="more about">Подробнее</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="img/3.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title lang" key="Burabay"> БУРАБАЙ</h5>
            <p class="card-text lang" key="duration">Длительность: 6 ночей в Delux </p>
            <p class="card-text">Garden View</p>
            <p class="card-text lang" key="nutrition"> Питание: AI все включено </p>
            <p class="card-text lang" key="tourists">Туристы: 2 взрослых</p>
            <a href="#" class="btn btn-primary align-self-center lang" key="more about">Подробнее</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="img/4.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title lang" key="Aqtau"> АКТАУ</h5>
            <p class="card-text lang" key="duration">Длительность: 6 ночей в Delux </p>
            <p class="card-text">Garden View</p>
            <p class="card-text lang" key="nutrition"> Питание: AI все включено </p>
            <p class="card-text lang" key="tourists">Туристы: 2 взрослых</p>
            <a href="#" class="btn btn-primary align-self-center lang" key="more about">Подробнее</a>
        </div>
    </div>


</div>

<?php
$city_name='Almaty';
$api_key='5757b2dd818d33ce0b08cc1d138b1f5a';
$api_url='https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;

$weather_data=json_decode( file_get_contents($api_url),true);

$temperature=$weather_data['main']['temp'];
$temperature_in_celsius=round($temperature-273.15);
$temperature_current_weather=$weather_data['weather'][0]['main'];
$temperature_current_weather_description=$weather_data['weather'][0]['description'];
$temperature_current_weather_icon=$weather_data['weather'][0]['icon'];

echo "The current temperature in Almaty is ". $temperature_in_celsius. " Celsius.";

echo "<img src='http://openweathermap.org/img/wn/".$temperature_current_weather_icon."@2x.png' />"

?>

<footer  >
    <img src = "img/iconLogoDark 1.png " style = "position:absolute; top:50px; left:0;"  >
    <div style = "position:absolute; top:50px; right:20px;" >
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>

    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
