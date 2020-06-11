<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Boolean Laravel</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <a href="{{route('static-page.home')}}" class="header__nav__brand">Boolean Placeholder <img class="header__nav__brand__img" src="" alt=""></a>
            <ul class="header__nav__list">
                <li class="header__nav__list__item"><a href="{{route('static-page.home')}}">Home</a></li>
                <li class="header__nav__list__item"><a href="#">Corso</a></li>
                <li class="header__nav__list__item"><a href="{{route('students.index')}}">Dopo il corso</a></li>
                <li class="header__nav__list__item"><a href="#">Lezione gratuita</a></li>
                <li class="header__nav__list__item"><a href="#">Assumi i nostri studenti</a></li>
                <li class="header__nav__list__item"><a href="#">Candidati ora</a></li>
            </ul>
        </nav>
    </header>