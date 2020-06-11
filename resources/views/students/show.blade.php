@extends('layouts.main')

@section('main-content')
    <section class="ex-students">
        <h2 class="ex-students__title">I nostri ex studenti su LinkedIn</h2>
        <div class="ex-students__cards">
            <div class="ex-students__cards__item">
                <header class="ex-students__cards__item__header">
                    <img src="{{$student['img']}}" alt="{{$student['nome']}}" class="ex-students__cards__item__header__face">
                    <div class="ex-students__cards__item__header__info">
                        <h3 class="ex-students__cards__item__header__info__name">
                            {{$student['nome']}} ({{$student['eta']}} anni)
                        </h3>
                        <h4 class="ex-students__cards__item__header__info__company">
                            Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}}
                            da {{$student['azienda']}} come {{$student['ruolo']}}
                        </h4>
                    </div>
                </header>
                <p class="ex-students__cards__item__description">
                    {{$student['descrizione']}}
                </p>
            </div>
        </div>
    </section>
@endsection