
@extends('inc.navbar')

@section('content')
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
<?php
$city_name2='Turkistan';
$api_key2='5757b2dd818d33ce0b08cc1d138b1f5a';
$api_url2='https://api.openweathermap.org/data/2.5/weather?q='.$city_name2.'&appid='.$api_key2;

$weather_data2=json_decode( file_get_contents($api_url2),true);

$temperature2=$weather_data2['main']['temp'];
$temperature_in_celsius2=round($temperature2-273.15);
$temperature_current_weather2=$weather_data2['weather'][0]['main'];
$temperature_current_weather_description2=$weather_data2['weather'][0]['description'];
$temperature_current_weather_icon2=$weather_data2['weather'][0]['icon'];

echo "The current temperature in Turkistan is ". $temperature_in_celsius2. " Celsius.";

echo "<img src='http://openweathermap.org/img/wn/".$temperature_current_weather_icon2."@2x.png' />"
?>

<?php
$city_name3='Burabay';
$api_key3='5757b2dd818d33ce0b08cc1d138b1f5a';
$api_url3='https://api.openweathermap.org/data/2.5/weather?q='.$city_name3.'&appid='.$api_key3;

$weather_data3=json_decode( file_get_contents($api_url3),true);

$temperature3=$weather_data3['main']['temp'];
$temperature_in_celsius3=round($temperature3-273.15);
$temperature_current_weather3=$weather_data3['weather'][0]['main'];
$temperature_current_weather_description3=$weather_data3['weather'][0]['description'];
$temperature_current_weather_icon3=$weather_data3['weather'][0]['icon'];

echo "The current temperature in Burabay is ". $temperature_in_celsius3. " Celsius.";

echo "<img src='http://openweathermap.org/img/wn/".$temperature_current_weather_icon."@2x.png' />"
?>

<?php
$city_name1='Aktau';
$api_key1='5757b2dd818d33ce0b08cc1d138b1f5a';
$api_url1='https://api.openweathermap.org/data/2.5/weather?q='.$city_name1.'&appid='.$api_key1;

$weather_data1=json_decode( file_get_contents($api_url1),true);

$temperature1=$weather_data1['main']['temp'];
$temperature_in_celsius1=round($temperature1-273.15);
$temperature_current_weather1=$weather_data1['weather'][0]['main'];
$temperature_current_weather_description1=$weather_data1['weather'][0]['description'];
$temperature_current_weather_icon1=$weather_data1['weather'][0]['icon'];

echo "The current temperature in Aktau is ". $temperature_in_celsius1. " Celsius.";

echo "<img src='http://openweathermap.org/img/wn/".$temperature_current_weather_icon1."@2x.png' />"
?>

@endsection('content')

