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
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/registration.css">
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
        <div class="forms">
            <form name="login" action="{{route('login-user')}}" method="post" >
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <ul class="login">
                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    <li><input type="email" name="email" placeholder="Email" class="input" value = "{{old('email')}}"></li>
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    <li><input type="password" name="password" placeholder="Пароль" class="input"></li>
                    <li><div class="btn"><input type="submit" name="submit" value="Войти" style="background-color: #FFD429; border: 0;" /></div></li>
                    <li><a href = "registration">Вы еще не зарегистрировались?</a></li>
                </ul>
            </form>
        </div>

    </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
