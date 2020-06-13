@extends('layouts.main')

@section('main-content')
    <section class="ex-students">
        <div class="ex-students__filter">
            <select name="filter" id="filter">
                @foreach ($genders as $gender)
                <option value="{{$gender}}">
                    @if($gender == 'm') Uomo
                    @elseif($gender == 'f') Donna
                    @else All
                    @endif
                </option>
                @endforeach
            </select>
        </div>
        <h2 class="ex-students__title">I nostri ex studenti su LinkedIn</h2>
        <div class="ex-students__cards">
            @foreach($students as $student)
                <a href="{{route('students.show', ['slug' => $student['slug']])}}" class="ex-students__cards__item">
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
                </a>
            @endforeach
        </div>
    </section>
@endsection