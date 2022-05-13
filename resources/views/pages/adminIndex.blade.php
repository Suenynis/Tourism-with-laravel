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
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
<div class = "navbar-up">
    <a  class = "admin-panel-text " href = "admin_Main">ADMIN PANEL</a>
</div>
<div class = "navbar navbar-expand-lg navbar-light " role="navigation">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link white-text active" aria-current="page" href="admin_Index">Control tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text" href="admin_Users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text" href="admin_Comments">Control comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text" href="admin_Main">Control main page</a>
                </li>
                <li class="nav-item">
                    <svg class = "log-out-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64c17.67 0 32-14.33 32-32S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256c0 53.02 42.98 96 96 96h64c17.67 0 32-14.33 32-32S177.7 416 160 416zM502.6 233.4l-128-128c-12.51-12.51-32.76-12.49-45.25 0c-12.5 12.5-12.5 32.75 0 45.25L402.8 224H192C174.3 224 160 238.3 160 256s14.31 32 32 32h210.8l-73.38 73.38c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0l128-128C515.1 266.1 515.1 245.9 502.6 233.4z"/></svg>              </li>
            </ul>
        </div>
    </div>

</div>
<div class="content-2">

    <div class="card" style="width: 18rem;">
        <img src="img/1.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title lang" key="Almaty"> АЛМАТЫ </h5>
            <p class="card-text lang" key="duration">Длительность: 6 ночей в Delux </p>
            <p class="card-text">Garden View</p>
            <p class="card-text lang" key="nutrition"> Питание: AI все включено </p>
            <p class="card-text lang" key="toursists">Туристы: 2 взрослых</p>
            <a href="admin_Tours" class="card-text btn btn-primary align-self-center lang" key="more about">EDIT</a>
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
            <a href="admin_Tours" class="btn btn-primary align-self-center lang" key="more about">EDIT</a>
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
            <a href="admin_Tours" class="btn btn-primary align-self-center lang" key="more about">EDIT</a>
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
            <a href="admin_Tours" class="btn btn-primary align-self-center lang" key="more about">EDIT</a>
        </div>
    </div>


</div>

</body>
</html>
