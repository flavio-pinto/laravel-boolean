@extends('layouts.main')

@section('main-content')
    <section class="main__jumbotron">
        <div class="main__jumbotron__left">
            <h1 class="main__jumbotron__left__title">
                Diventa<strong>Sviluppatore Web</strong>
            </h1>
            <p class="main__jumbotron__left__objective">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
            <ul class="main__jumbotron__left__offer">
                <li class="main__jumbotron__left__offer__item"><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                <li class="main__jumbotron__left__offer__item"><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                <li class="main__jumbotron__left__offer__item">Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
            </ul>
        </div>
        <div class="main__jumbotron__right">
            <img src="{{asset('img/notebook.gif')}}" alt="notebook gif" class="main__jumbotron__right__img">
        </div>
    </section>

    <section class="stats">
        <div class="wrapper">
            <div class="stats__box">
                <h3 class="stats__box__title">98%</h3>
                <span class="stats__box__parag">La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</span>
            </div>
            <div class="stats__box">
                <h3 class="stats__box__title">€ 23.000</h3>
                <span class="stats__box__parag">Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</span>
            </div>
            <div class="stats__box">
                <h3 class="stats__box__title">#1</h3>
                <span class="stats__box__parag">Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</span>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="wrapper">
            <h4 class="partners__title">I nostri studenti sono stati assunti da:</h4>
            <div class="partners__top">
                <div class="partners__top__logo">
                    <img src="{{asset('img/facileit.png')}}" alt="facile">
                </div>
                <div class="partners__top__logo">
                    <img src="{{asset('img/oneday.png')}}" alt="oneday">
                </div>
                <div class="partners__top__logo">
                    <img src="{{asset('img/prima.png')}}" alt="prima">
                </div>
            </div>
            <div class="partners__bottom">
                <div class="partners__bottom__logo">
                    <img src="{{asset('img/fabbrica-digitale-big.png')}}" alt="facile punto it">
                </div>
                <div class="partners__bottom__logo">
                    <img src="{{asset('img/nephila.png')}}" alt="facile punto it">
                </div>
                <div class="partners__bottom__logo">
                    <img src="{{asset('img/rds.png')}}" alt="facile punto it">
                </div>
            </div>
        </div>
    </section>
@endsection