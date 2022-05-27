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
    <link rel="stylesheet"  href="css/preloader.css">
    <link rel="stylesheet" href="css/smile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class = "main_page container-fluid">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href = "/">
                <img  src="img/Logo.png">
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
                        <a class="nav-link lang"  key="contact" href="#so-net" >Контакты</a>
                    </li>
                    <li class="nav-item">
                        @if(Session::has('loginId'))
                            <div class="lang dropdown">
                                <a class="nav-link lang btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{$user->name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                                    @if($user->hasRole('admin'))
                                    <li><a class="dropdown-item" href="admin_Main">Admin Main page</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                    </li>
                        @else
                            <a class="nav-link lang" href="login" key="signin" >Войти</a>
                        </li>
                        @endif
                    <!--
                    <li class="header-item-lang-en"><button id="en" class="translate"><img src="./img/flagofeng.png" alt="flagofeng" width="35px" height="25px"></button></li>
                    <li class="header-item-lang-ru"><button id="ru" class="translate"><img src="./img/flagofrus.png" alt="flagofrus" width="35px" height="25px"></button></li>
                    -->
                    <li class="nav-item lang-en"><button id="en"  onclick="Functioneng_rus()"  style = "display:block" class="nav-link translate">ENG</button></li>
                    <li class="nav-item lang-ru"><button id="ru"  onclick="Functioneng_rus()"  style = "display:none" class="nav-link translate">RUS</button></li>
                </ul>
            </div>

        </div>
    </nav>
    <div class = "slogan-container">
        <h1 class="slogan lang" key="open" >Открой для себя новый Туркестан</h1>
        <h2 class = "author lang" key="author">Авторские туры от Айдын Сабит</h2>
        <a  class = "btn btn-zayavka lang text-button" key="request"    href = "#form"> Оставить  заявку</a>
    </div>
</div>
<div>
    <div class = "mainp-2">
        <img class = " img-ozero "src="img/Фото озера.png">
        <div class = "mainp-2-txt">
            <h1 class = "tour-1 lang" key="direction">Посмотрите все направления туров </h1>
            <a class = "text lang" key="place">Красивые и особые места Южного Казахстана. Древние  топ  города и исторические земли</a>
            <button class="btn btn2 lang" key="all" href = "tours.html"><p href = "tours.html">Смотреть все<p></button>
        </div>
    </div>
    <audio id="a" src=""></audio>


    <div class="containerlil">
        <div class="eyesContainer">
            <div class="eye">
                <div class="pupil"></div>
            </div>
            <div class="eye">
                <div class="pupil"></div>
            </div>
            <div class = "smile_text">
                <p>Пусть другие завидует тебя</p>
            </div>
        </div>



        <div class="block">

            <img data-file = "Aktau" id = "pic1" class="square" src="img/1.png" style = "transform:rotate(-30deg)"alt="">

        </div>
        <div class="block">

            <img data-file = "Almaty" id = "pic2"  class="square" src="img/2.png" style = "transform:rotate(-90deg)"alt="">

        </div>
        <div class="block">

            <img data-file = "Turkestan" id = "pic3" class="square" src="img/3.png" style = "transform:rotate(-150deg)"alt="">
        </div>
        <div class="block">

            <img data-file = "Kokshetau" id = "pic4" class="square" src="img/4.png" style = "transform:rotate(-210deg)"alt="">
            </img>
        </div>
        <div class="block">

            <img data-file = "Коркыт"  id = "pic5"class="square" src="img/5.jpg" style = "transform:rotate(30deg)"alt="">

        </div>
    </div>


    <script>

        let eyes = document.querySelectorAll(".eye");

        let eyeRect = eyes[0].getBoundingClientRect();

        let container = document.querySelector(".eyesContainer");

        document.body.addEventListener("mousemove" , eyesFollow,false);

        function eyesFollow(e){
            requestAnimationFrame (() => {
                let xPos = e.pageX;
                let yPos = e.pageY;

                let xDiff = (eyeRect.x + eyeRect.width / 2) - xPos;
                let yDiff = (eyeRect.y + eyeRect.height / 2) - yPos;

                let angle = Math.atan2(yDiff, xDiff) * 180 / Math.PI;
                container.style.setProperty("--eyeAngle", angle.toFixed(2) + "deg");
            });
        }

        /* function playAudio(){
           var x = document.getElementById("myAudio");
           x.play();
        }
        function stopAudio(){
           var x = document.getElementById("myAudio");
           x.pause();
        }
        document.getElementById("picture4").addEventListener("mouseover", playAudio);
        document.getElementById("picture4").addEventListener("mouseout", stopAudio); */

        document.addEventListener("DOMContentLoaded", init);

        function init(){
            let s1 = document.querySelector('#pic1');
            let s2 = document.querySelector('#pic2');
            let s3 = document.querySelector('#pic3');
            let s4 = document.querySelector('#pic4');
            let s5 = document.querySelector('#pic5');
            s1.addEventListener('mouseover',play);
            s2.addEventListener('mouseover',play);
            s3.addEventListener('mouseover',play);
            s4.addEventListener('mouseover',play);
            s5.addEventListener('mouseover',play);
            s1.addEventListener('mouseout',pause);
            s2.addEventListener('mouseout',pause);
            s3.addEventListener('mouseout',pause);
            s4.addEventListener('mouseout',pause);
            s5.addEventListener('mouseout',pause);
        }

        function play(ev){
            let s = ev.currentTarget;
            ev.preventDefault();

            let fn = s.getAttribute('data-file');
            let src = 'audio/' + fn + '.mp3';
            console.log(src);

            let audio = document.getElementById("a");
            audio.src = src;
            audio.play();




        }
        function pause(ev){
            let s = ev.currentTarget;
            ev.preventDefault();

            let fn = s.getAttribute('data-file');
            let src = 'audio/' + fn + '.mp3';
            console.log(src);

            let audio = document.getElementById("a");
            audio.src = src;
            audio.pause();
        }


    </script>
    <section id="form">
        <form>
            <div class = "forman">

                <a class = "form7-main lang"  style = "text-align:center" key="information">Оставьте данные</a>
                <a class = "form7-text lang" key="name">Имя</a>
                <input style ="width: 400px; "></input>
                <a class = "form7-text lang" key="surname">Фамилия</a>
                <input style ="width: 400px;"></input>
                <a class = "form7-text lang" key="what">Кaкой тур хотите и опишите подробнее</a>
                <textarea style = "width:400px" cols="48" rows="8"> </textarea>
                <p><input class = " btn btn-form lang" key="send" name="submit" type="submit" id="submit" value="Отправить"/>
                </p>
            </div>
        </form>
    </section>
    <div>
        <section id="so-net">
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
        </section>
    </div>

    <script src="js/index.js"></script>
    <script src="js/jquery.min.js"></script>

</body>
</html>
