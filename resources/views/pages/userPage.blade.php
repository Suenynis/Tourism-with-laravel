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
    <link rel="stylesheet" href="css/userpage.css">
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
                    <a class="nav-link lang" key="contact" href="#so-net">Контакты</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class = "user-content" >
<img id="ava" src="img/userpagee.jpg">
<div class="jazu">Имя</div>
<div class="jazu1">Something</div>
<div class="jazu2">Почта</div>
<div class="jazu3">Something</div>
<div class="jazu4">Номер</div>
<div class="jazu5">Something</div>




<div class="warwy">
    <div class="letter">Имя тура</div>
    <div class="rectangle">Подтвержден</div>
</div>

</div>
<footer>
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
