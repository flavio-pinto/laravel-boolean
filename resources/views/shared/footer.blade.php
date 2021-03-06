<footer class="footer">
    <div class="wrapper">
        <nav class="footer__nav">
            <div class="footer__nav__brand">
                <a class="footer__nav__brand__link" href=""><img class="footer__nav__brand__link__logo" src="{{asset('img/logo-footer.png')}}" alt=""></a>
                <ul class="footer__nav__brand__infos">
                    <li class="footer__nav__brand__info__item">Sede Operativa</li>
                    <li class="footer__nav__brand__info__item">Via Carducci, 12 - 21123 - Milano</li>
                    <li class="footer__nav__brand__info__item">Tel: 02-40031288</li>
                </ul>
            </div>
            <ul class="footer__nav__list">
                <li class="footer__nav__list__item"><a href="{{route('static-page.home')}}">Home</a></li>
                <li class="footer__nav__list__item"><a href="{{route('static-page.faq')}}">Domande frequenti</a></li>
                <li class="footer__nav__list__item"><a href="{{route('static-page.privacy')}}">Privacy policy</a></li>
                <li class="footer__nav__list__item"><a href="#">Lavora con noi</a></li>
            </ul>
        </nav>
        <div class="footer__bottom">
            <div class="footer__bottom__social">
                <a class="footer__bottom__social__link" href="https://www.instagram.com/boolean.careers/"><i class="fab fa-instagram"></i></a>
                <a class="footer__bottom__social__link" href="https://www.facebook.com/boolean.careers"><i class="fab fa-facebook-f"></i></a>
                <a class="footer__bottom__social__link" href="https://www.linkedin.com/school/boolean-careers/"><i class="fab fa-linkedin-in"></i></a>
                <a class="footer__bottom__social__link" href="https://www.youtube.com/channel/UCN0mktfmWySUg3OmvHKrdcQ"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer__bottom__address">
                <span>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</span>
            </div>
        </div>
    </div>
</footer>
{{-- JAVASCRIPT --}}
{{-- <script src="{{asset('js/app.js')}}"></script> --}}
@yield('scripts')
</body>
</html>