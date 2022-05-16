<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- added Crf token -->
    <meta name = "csrf-token" content="{{ csrf_token() }}">
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'webBackend')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>
        Регистрация на нашем сайте
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;1,800&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</head>

<body> <!-- onload="document.registration.userid.focus(); -->
<div class="container">
    <h2>Регистрация</h2>

    <div class="forms">
        <form name='registration' action="{{route('registration_get')}}" method="POST"  >
            @csrf
            <ul>
                <li><input type="text" name="username" placeholder="ФИО" class="input"></li>

                <li><input type="tel" name="number" placeholder="Телефон" class="input"></li>

                <li><input type="email" name="email" placeholder="Email" class="input"></li>
                @error('email')
                <div class = "alert alert-danger">{{ $message }}</div>
                @enderror

                <li><input type="password" name="password" placeholder="Пароль" class="input"></li>
                @error('password')
                <div class = "alert alert-danger">{{ $message }}</div>
                @enderror

                <li><div class="btn"><input type="submit" name="submit" value="Зарегистрироваться" style="background-color: #FFD429; border: 0;" /></div></li>
            </ul>


        </form >
    </div >

</div >

<!-- <script src="js/registration_jspart.js"></script> -->

</body>
</html>
