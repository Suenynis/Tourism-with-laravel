<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href = "index.html">
            <img  src="img/Logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <img class=" navbar-toggler-icon " src = "img/toggler.png"></img>
        </button>
        <div class = " collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class = "navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active lang" aria-current="page" href="tours.html" key="tour">    Все туры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="web/comments" key="feedback">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang"  key="contact" href="#so-net" >Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="login.html" key="signin" >Войти</a>
                </li>
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
