@extends('layouts.main')

@section('main-content')
    <div class="faq-top">
        <h1 class="faq-top__title">Domande frequenti</h1>
        <p class="faq-top__parag">Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>

    <div class="faq">
        <div class="faq__before">
            <h2 class="faq__before__title">Prima del corso</h2>
            <ul class="faq__before__list">
                <li class="faq__before__list__item">Chi può fare il corso Boolean?</li>
                <li class="faq__before__list__item">Che competenze devo avere per iniziare il corso?</li>
                <li class="faq__before__list__item">In cosa consiste il processo di selezione?</li>
                <li class="faq__before__list__item">Posso seguire il corso mentre lavoro o studio?</li>
                <li class="faq__before__list__item">Di cosa ho bisogno per seguire il corso?</li>
                <li class="faq__before__list__item">Questo corso è una valida alternativa alla laurea?</li>
                <li class="faq__before__list__item">Quanto costa il corso?</li>
            </ul>
        </div>
        <div class="faq__after">
            <h2 class="faq__after__title">Dopo del corso</h2>
            <ul class="faq__after__list">
                <li class="faq__after__list__item">Ho la certezza di essere assunto?</li>
                <li class="faq__after__list__item">Terminato il corso, sono supportato nella ricerca del lavoro?</li>
                <li class="faq__after__list__item">Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?</li>
                <li class="faq__after__list__item">Posso fare lo sviluppatore freelance al termine del corso?</li>
                <li class="faq__after__list__item">Troverò un lavoro nella mia città?</li>
                <li class="faq__after__list__item">Che tipo di attestato rilasciate?</li>
            </ul>
        </div>
    </div>
@endsection