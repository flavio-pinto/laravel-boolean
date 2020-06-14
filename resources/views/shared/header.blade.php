<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Boolean Laravel</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <a href="{{route('static-page.home')}}" class="header__nav__brand"><img class="header__nav__brand__img" src="{{asset('img/boolean-logo.png')}}" alt="boolean logo"></a>
            <ul class="header__nav__list">
                <li class="header__nav__list__item @if(Request::route()->getName() == 'static-page.home') active @endif"><a class="header__nav__list__item__link" href="{{route('static-page.home')}}">Home</a></li>
                <li class="header__nav__list__item"><a class="header__nav__list__item__link" href="#">Corso</a></li>
                <li class="header__nav__list__item @if(Request::route()->getName() == 'students.index') active @endif"><a class="header__nav__list__item__link" href="{{route('students.index')}}">Dopo il corso</a></li>
                <li class="header__nav__list__item"><a class="header__nav__list__item__link" href="#">Lezione gratuita</a></li>
                <li class="header__nav__list__item"><a class="header__nav__list__item__link" href="#">Assumi i nostri studenti</a></li>
                <li class="header__nav__list__item"><a class="header__nav__list__item__link" href="#">Candidati ora</a></li>
            </ul>
        </nav>
    </header>