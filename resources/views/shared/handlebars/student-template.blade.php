<script id="student-template" type="text/x-handlebars-template">
    <a href="{{url('students/show')}}/@{{slug}}" class="ex-students__cards__item">
        <header class="ex-students__cards__item__header">
            <img src="@{{img}}" alt="@{{nome}}" class="ex-students__cards__item__header__face">
            <div class="ex-students__cards__item__header__info">
                <h3 class="ex-students__cards__item__header__info__name">
                    @{{nome}} (@{{eta}} anni)
                </h3>
                <h4 class="ex-students__cards__item__header__info__company">
                    @{{assunzione}} da @{{azienda}} come @{{ruolo}}
                </h4>
            </div>
        </header>
        <p class="ex-students__cards__item__description">
            @{{descrizione}}
        </p>
    </a>
</script>