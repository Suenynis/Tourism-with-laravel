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
    <link rel="stylesheet" href="css/comments.css">
    <link rel="stylesheet" href="css/new.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>

</head>
<body>
<div class="main_page">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href = "index.html">
                <img src="img/Logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <img class=" navbar-toggler-icon " src = "img/toggler.png"></img>
            </button>
            <div class = " collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class = "navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active lang" aria-current="page" href="tours" key="tour">    Все туры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="comments" key="feedback">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="login" key="signin">Войти</a>
                    </li>



                </ul>
            </div>

        </div>
    </nav>
    <div class="comment-form">
        <form method="post">
            <div class="comment-block">
                <img class = "comment-block-img" src="img/person-comment.png" >
                <div class="comment-text-box">
                    <a class = "comment-text lang" key="comment1">Всё отлично! Ответственные за свои дела. Пошли с хорошей компанией. Нам все понравилось!                </a>
                </div>
            </div>
            <div class="comment-block">
                <img class = "comment-block-img" src="img/person-comment.png" >
                <div class="comment-text-box">
                    <a class = "comment-text lang" key="comment2">Отлично!!! Все сделано от души! Хорошо организовано. Стоит своих деген!!! В следующий раз тоже возьму у вас!               </a>
                </div>
            </div>
            <div class="comment-block">
                <img class = "comment-block-img" src="img/person-comment.png" >
                <div class="comment-text-box">
                    <a class = "comment-text lang" key="comment3">Всё очень даже хорошо! Но почти на все ближайшие туры мест нету... Сделайте побельше мест или новые рейсы.               </a>
                </div>
            </div>
            <div class="comment-block">
                <img class = "comment-block-img" src="img/person-comment.png" >
                <div class="comment-text-box">
                    <a class = "comment-text lang" key="comment4">Всё отлично! Ответственные за свои дела. Пошли с хорошей компанией. Нам все понравилось!                </a>
                </div>
            </div>
            <
            <li class="nav-item lang-en"><button id="en"  onclick="Functioneng_rus()"  style = "display:block" class="nav-link translate"></button></li>
            <li class="nav-item lang-ru"><button id="ru"  onclick="Functioneng_rus()"  style = "display:none" class="nav-link translate"></button></li>
                <div class="area">
                <textarea name="comment" cols="70" rows="3"></textarea></p>
                 <p><input type="submit" value="Отправить">
                <input type="reset" value="Очистить"></p>
                </div>
        </form>
    </div>



</div>

<footer >
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
<script src="js/index.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>
