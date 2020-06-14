require('./bootstrap');

$(document).ready(function () {
    //Setup
    var studentsContainer = $('.ex-students__cards');
    var filter = $('#filter');
    var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';

    //Init Handlebars
    var source = $('#student-template').html();
    var template = Handlebars.compile(source);
    
    filter.on('change', function() {
        var gender = $(this).val();
        
        //Chiamata Ajax
        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: gender
            }
        })
        .done(function(res) {
            if(res.response.length > 0) {
                studentsContainer.html(''); //svuoto contenitore
                for(var i = 0; i < res.response.length; i++) {
                    var student = res.response[i];
                    var context = {
                        slug: student.slug,
                        img: student.img,
                        nome: student.nome,
                        eta: student.eta,
                        assunzione: (student.genere == 'm') ? 'Assunto' : 'Assunta',
                        azienda: student.azienda,
                        ruolo: student.ruolo,
                        descrizione: student.descrizione
                    }
                    var output = template(context);
                    studentsContainer.append(output);
                }
            } else {
                console.log(res.error);
            }
        })
        .fail(function() {
            console.log('Errore Api');
        });
    });
    
}); //<--- end jQuery doc ready