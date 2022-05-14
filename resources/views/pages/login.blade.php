<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- added Crf token -->
    <meta name = "csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'webBackend')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>
        Регистрация на нашем сайте
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;1,800&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">

    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>

</head>

<body>
<section>
    <div class = "container">
        <h2 >Вход в учетную запись</h2>
            <div name = "login" class="forms" action = '{{ route('user.login') }}' method = "POST" >
            @csrf
            <form action="#"><input type="email" name= "name" placeholder="Email" class="input" required></form>
            @error('email')
            <div class = "alert alert-danger">{{ $message }}</div>
            @enderror

            <form action="#"><input type="password" name= "login" placeholder="Пароль" class="input" required></form>
            @error('password')
            <div class = "alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="btn"> Войти</button>
            <a href = "registration">Вы еще не зарегистрировались?</a>
        </div>

    </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
