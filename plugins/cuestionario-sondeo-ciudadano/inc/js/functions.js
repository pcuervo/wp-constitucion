$ = jQuery.noConflict();

(function() {

    var formWrap = document.getElementById( 'fs-form-wrap' );
    [].slice.call( document.querySelectorAll( '#js-donde-vives select.cs-select' ) ).forEach( function(el) {
        new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function( lugar ){
                $('#js-delegaciones-estados-paises').empty();
                switch( lugar ){
                    case 'cdmx':
                        showDelegaciones( lugar, '' );
                        break;
                    case 'zmvm':
                        showMunicipios( '' );
                        break;
                    case 'resto-republica':
                        showEstados( '' );
                        break;
                    case 'fuera-mexico':
                        showPaises( '' );
                        break;
                }
            }
        });
    } );

    [].slice.call( document.querySelectorAll( '#js-donde-trabajas select.cs-select' ) ).forEach( function(el) {
        new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function( lugar ){
                $('#js-trabajas-delegaciones-estados-paises').empty();
                switch( lugar ){
                    case 'cdmx':
                        showDelegaciones( lugar, 'trabajas' );
                        break;
                    case 'zmvm':
                        showMunicipios( 'trabajas' );
                        break;
                    case 'resto-republica':
                        showEstados( 'trabajas' );
                        break;
                    case 'fuera-mexico':
                        showPaises( 'trabajas' );
                        break;
                }
            }
        });
    } );

    [].slice.call( document.querySelectorAll( '#js-donde-estudias select.cs-select' ) ).forEach( function(el) {
        new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function( lugar ){
                $('#js-estudias-delegaciones-estados-paises').empty();
                switch( lugar ){
                    case 'cdmx':
                        showDelegaciones( lugar, 'estudias' );
                        break;
                    case 'zmvm':
                        showMunicipios( 'estudias' );
                        break;
                    case 'resto-republica':
                        showEstados( 'estudias' );
                        break;
                    case 'fuera-mexico':
                        showPaises( 'estudias' );
                        break;
                }
            }
        });
    } );

    new FForm( formWrap, {
        onReview : function() {
            //classie.add( document.body, 'overview' ); // for demo purposes only
            getSurveyData();
        }
    } );

    $('#js-grandes-retos a').click(function(e){
        e.preventDefault();
        var $grandesRetos = $('#js-grandes-retos input').val();

        if( $(this).hasClass('active') ){
            $(this).removeClass('active');
            if( $grandesRetos.indexOf( $(this).text() + ',' ) > -1 ){
                $grandesRetos = $grandesRetos.replace( $(this).text() + ',', '' );
                $('#js-grandes-retos input').val( $grandesRetos );
            }
            if( $grandesRetos.indexOf( $(this).text() ) > -1 ){
                $grandesRetos = $grandesRetos.replace( $(this).text() + ',', '' );
                $('#js-grandes-retos input').val( $grandesRetos );
            }
            return;
        }

        $(this).addClass('active');
        if( '' == $grandesRetos ){
            $('#js-grandes-retos input').val( $(this).text() );
        } else {
            $('#js-grandes-retos input').val( $grandesRetos + ', ' + $(this).text() );
        }
        $grandesRetos = $('#js-grandes-retos input').val();
        if( hasFourChallenges( $grandesRetos ) ){
            if( $grandesRetos.indexOf('Otro') > -1 ){
                showOtrosRetos();
            }
            $('#js-grandes-retos a').hide();
            $('.fs-continue')[0].click();
        }
    });
})();

function hasFourChallenges( challenges ){
    var challengeArr = challenges.split(',');
    if( 4 == challengeArr.length ){
        return 1;
    }
    return 0;
}

function showOtrosRetos(){
    FForm.prototype._addField( $('#fs-form-wrap')[0], 'js-otros-retos', 'js-grandes-retos' );
    $('#js-otros-retos').attr( 'data-question', 27 );
    $('#js-otros-retos').append( getHTMLOtrosRetos() );
}

function showDelegaciones( ciudad, section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
        $(el).attr( 'data-question', 2 );
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
        if( 'trabajas' == section ){
            $(el).attr( 'data-question', 12 );
        } else {
            $(el).attr( 'data-question', 19 );
        }
    }

    $(el).append( getHTMLDelegacionesCDMX( section ) );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( delegacion ){
            showColonias( delegacion, section );
        }
    });
    return;
}

function showColonias( delegacion, section ){
    if( '' == section ){
        $('#js-colonias').remove();
        FForm.prototype._addField( $('#fs-form-wrap')[0], 'js-colonias', 'js-delegaciones-estados-paises' );
        var el = '#js-colonias';
        $(el).attr( 'data-question', 3 );
    } else{
        $('#js-' + section + '-colonias').remove();
        FForm.prototype._addField( $('#fs-form-wrap')[0], 'js-' + section + '-colonias', 'js-' + section + '-delegaciones-estados-paises' );
        var el = '#js-' + section + '-colonias';
        if( 'trabajas' == section ){
            $(el).attr( 'data-question', 13 );
        } else {
            $(el).attr( 'data-question', 20 );
        }
    }
    console.log('el');
    console.log( $(el) );

    $(el).append( getHTMLColoniasCDMX( delegacion, section ) );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( colonia ){}
    });
    return;
}

function showMunicipios( section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
        $(el).attr( 'data-question', 4 );
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
        if( 'trabajas' == section ){
            $(el).attr( 'data-question', 14 );
        } else {
            $(el).attr( 'data-question', 21 );
        }
    }

    $(el).append( getHTMLMunicipios( section ) );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( delegacion ){
        }
    });
    return;
}

function showEstados( section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
        $(el).attr( 'data-question', 5 );
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
        if( 'trabajas' == section ){
            $(el).attr( 'data-question', 15 );
        } else {
            $(el).attr( 'data-question', 22 );
        }
    }
    $(el).append( getHTMLEstados( section ) );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( estados ){}
    });
    return;
}

function showPaises( section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
        $(el).attr( 'data-question', 5 );
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
        if( 'trabajas' == section ){
            $(el).attr( 'data-question', 16 );
        } else {
            $(el).attr( 'data-question', 23 );
        }
    }

    $(el).append( getHTMLPaises( section ) );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( pais ){}
    });
    return;
}



function getHTMLDelegacionesCDMX( section ){
    switch( section ){
        case 'trabajas':
            var pregunta = '¿En qué delegación trabajas?';
            break;
        case 'estudias':
            var pregunta = '¿En qué delegación estudias?';
            break;
        default:
            var pregunta = '¿En qué delegación vives?';
    }
    var delegaciones = '<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">' + pregunta + '</label><select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required"><option value="" disabled selected>Selecciona tu delegación</option>';
    $.each( allDelegaciones, function(i, val){
        delegaciones += '<option value="' + val.delegacion + '">' + val.delegacion + '</option>';
    });
    return delegaciones + '</select>';
}

function removeAccent( letter ){
    switch( letter ){
        case 'Á':
            letter = 'A';
            break;
        case 'É':
            letter = 'E';
            break;
        case 'Í':
            letter = 'I';
            break;
        case 'Ó':
            letter = 'O';
            break;
        case 'Ú':
            letter = 'U';
            break;
    }
    return letter;
}


function getHTMLMunicipios( section ){
    switch( section ){
        case 'trabajas':
            var pregunta = '¿En qué municipio trabajas?';
            break;
        case 'estudias':
            var pregunta = '¿En qué municipio estudias?';
            break;
        default:
            var pregunta = '¿En qué municipio vives?';
    }
    var municipios = '<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">' + pregunta + '</label><select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required"><option value="" disabled selected>Selecciona tu municipio</option>';
    var currentTitle = '';
    $.each( allMunicipios, function(i, val){
        if( currentTitle != val.municipio.charAt(0) ){
            currentTitle = removeAccent( val.municipio.charAt(0) );
            municipios += '<option class="title" value="' + currentTitle + '">' + currentTitle + '</option>';
        }
        municipios += '<option value="' + val.municipio + '">' + val.municipio + '</option>';
    });
    return municipios + '</select>';
}

function getHTMLEstados( section ){
    switch( section ){
        case 'trabajas':
            var pregunta = '¿En qué estado trabajas?';
            break;
        case 'estudias':
            var pregunta = '¿En qué estado estudias?';
            break;
        default:
            var pregunta = '¿En qué estado vives?';
    }
    var estados =  '<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">' + pregunta + '</label><select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" name="state" id="state" ><option value="" disabled selected>Selecciona el estado</option>';
    $.each( allEstados, function(i, val){
        estados += '<option value="' + val.estado + '">' + val.estado + '</option>';
    });
    return estados + '</select>';
}

function getHTMLPaises( section ){
    switch( section ){
        case 'trabajas':
            var pregunta = '¿En qué país trabajas?';
            break;
        case 'estudias':
            var pregunta = '¿En qué país estudias?';
            break;
        default:
            var pregunta = '¿En qué país vives?';
    }
    var paises =  '<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">' + pregunta + '</label><select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ] select-paises" name="pais" id="pais" ><option value="" disabled selected>Selecciona el país</option>';
    var currentTitle = '';
    $.each( allPaises, function(i, val){
        if( currentTitle != val.pais.charAt(0) ){
            currentTitle = removeAccent( val.pais.charAt(0) );
            paises += '<option class="title" value="' + currentTitle + '">' + currentTitle + '</option>';
        }
        paises += '<option value="' + val.pais + '">' + val.pais + '</option>';
    });
    return paises + '</select>';
}

function getHTMLColoniasCDMX( delegacion, section ){
    switch( section ){
        case 'trabajas':
            var pregunta = '¿En qué colonia trabajas?';
            break;
        case 'estudias':
            var pregunta = '¿En qué colonia estudias?';
            break;
        default:
            var pregunta = '¿En qué colonia vives?';
    }
    var colonias = '<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">' + pregunta + '</label><select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required"><option value="" disabled selected>Selecciona tu colonia</option>';

    var currentTitle = '';
    $.each( allColonias, function( del, col ){
        if( delegacion != del  ) return 1;

        $.each( col, function( i, colonia ){
            if( currentTitle != colonia.charAt(0) ){
                currentTitle = removeAccent( colonia.charAt(0) );
                colonias += '<option class="title" value="' + currentTitle + '">' + currentTitle + '</option>';
            }
            colonias += '<option value="' + colonia + '">' + colonia + '</option>';
        });
    });
    return colonias + '</select>';
}

function getHTMLOtrosRetos(){
    return '<label class="[ fs-field-label fs-anim-upper ][ color-gray ]">¿Qué otro reto tienes en mente?</label><textarea class="fs-anim-lower" id="q27" name="q27" placeholder="" required></textarea>';
}

function getSurveyData(){
    $answers = {};

    $lugarResidenciaQ = $('#js-donde-vives').data('question');
    $lugarResidencia = $('#js-donde-vives select option:selected').val();
    $answers[$lugarResidenciaQ] = getLugarResidencia( $lugarResidencia );

    $delegacionEstadoPaisMunicipioQ = $('#js-delegaciones-estados-paises').data('question');
    $delegacionEstadoPaisMunicipio = $('#js-delegaciones-estados-paises select option:selected').val()
    $answers[$delegacionEstadoPaisMunicipioQ] = $delegacionEstadoPaisMunicipio;

    $colonia = $('#js-colonias select');
    if( 0 < $colonia.length ){
        $coloniaQ = $('#js-colonias').data( 'question' );
        $colonia = $('#js-colonias select option:selected').val();
        $answers[$coloniaQ] = $colonia;
    }

    $generoQ = $('#js-genero').data('question');
    $genero = $('#js-genero input:checked').val()
    $answers[$generoQ] = $genero;

    $generoQ = $('#js-genero').data('question');
    $genero = $('#js-genero input:checked').val()
    $answers[$generoQ] = $genero;

    $edadQ = $('#js-edad').data('question');
    $edad = $('#js-edad input').val()
    $answers[$edadQ] = $edad;

    $dedicasQ = $('#js-dedicas').data('question');
    $dedicas = $('#js-dedicas textarea').val()
    $answers[$dedicasQ] = $dedicas;

    $trabajasQ = $('#js-trabajas').data('question');
    $trabajas = $('#js-trabajas input:checked').val()
    $answers[$trabajasQ] = $trabajas;

    $lugarTrabajoQ = $('#js-donde-trabajas').data('question');
    $lugarTrabajo = $('#js-donde-trabajas select option:selected').val();
    $answers[$lugarTrabajoQ] = getLugarResidencia( $lugarTrabajo );

    $delegacionEstadoPaisMunicipioTrabajasQ = $('#js-trabajas-delegaciones-estados-paises').data('question');
    $delegacionEstadoPaisMunicipioTrabajas = $('#js-trabajas-delegaciones-estados-paises select option:selected').val()
    $answers[$delegacionEstadoPaisMunicipioTrabajasQ] = $delegacionEstadoPaisMunicipioTrabajas;

    $coloniaTrabajo = $('#js-trabajas-colonias select');
    if( 0 < $coloniaTrabajo.length ){
        $coloniaTrabajoQ = $('#js-trabajas-colonias').data( 'question' );
        $coloniaTrabajo = $('#js-trabajas-colonias select option:selected').val();
        $answers[$coloniaTrabajoQ] = $coloniaTrabajo;
    }

    $estudiasQ = $('#js-estudias').data('question');
    $estudias = $('#js-estudias input:checked').val()
    $answers[$estudiasQ] = $estudias;

    $lugarEstudioQ = $('#js-donde-trabajas').data('question');
    $lugarEstudio = $('#js-donde-trabajas select option:selected').val();
    $answers[$lugarEstudioQ] = getLugarResidencia( $lugarEstudio );

    $delegacionEstadoPaisMunicipioEstudiasQ = $('#js-trabajas-delegaciones-estados-paises').data('question');
    $delegacionEstadoPaisMunicipioEstudias = $('#js-trabajas-delegaciones-estados-paises select option:selected').val()
    $answers[$delegacionEstadoPaisMunicipioEstudiasQ] = $delegacionEstadoPaisMunicipioEstudias;

    $coloniaEstudio = $('#js-trabajas-colonias select');
    if( 0 < $coloniaEstudio.length ){
        $coloniaEstudioQ = $('#js-trabajas-colonias').data( 'question' );
        $coloniaEstudio = $('#js-trabajas-colonias select option:selected').val();
        $answers[$coloniaEstudioQ] = $coloniaEstudio;
    }

    $nacisteCDMXQ = $('#js-naciste-cdmx').data('question');
    $nacisteCDMX = $('#js-naciste-cdmx input:checked').val()
    $answers[$nacisteCDMXQ] = $nacisteCDMX;

    $piensasCDMXQ = $('#js-piensas-cdmx').data('question');
    $piensasCDMX = $('#js-piensas-cdmx input').val();
    $answers[$piensasCDMXQ] = $piensasCDMX;

    $grandesRetosQ = $('#js-grandes-retos').data('question');
    $grandesRetos = $('#js-grandes-retos input').val();
    $answers[$grandesRetosQ] = $grandesRetos;

    $otroRetos = $('#js-otros-retos input');
    if( 0 < $otroRetos.length ){
        $otroRetosQ = $('#js-otros-retos').data('question');
        $otroRetos = $('#js-otros-retos input').val();
        $answers[$otroRetosQ] = $otroRetos;
    }

    $comoImaginasQ = $('#js-como-imaginas').data('question');
    $comoImaginas = $('#js-como-imaginas textarea').val()
    $answers[$comoImaginasQ] = $comoImaginas;

    $obstaculosPrincipalesQ = $('#js-obstaculos-principales').data('question');
    $obstaculosPrincipales = $('#js-obstaculos-principales input').val();
    $answers[$obstaculosPrincipalesQ] = $obstaculosPrincipales;

    $visionRealidadQ = $('#js-vision-realidad').data('question');
    $visionRealidad = $('#js-vision-realidad textarea').val()
    $answers[$visionRealidadQ] = $visionRealidad;

    $tuvisteHacerQ = $('#js-tuviste-hacer').data('question');
    $tuvisteHacer = $('#js-tuviste-hacer textarea').val()
    $answers[$tuvisteHacerQ] = $tuvisteHacer;

    $cosasValiosasQ = $('#js-cosas-valiosas').data('question');
    $cosasValiosas = $('#js-cosas-valiosas input').val();
    $answers[$cosasValiosasQ] = $cosasValiosas;

    saveSurvey( $answers );
}

function saveSurvey( answersObj ){
    $.post(
        ajax_url,
        {
            answers:    answersObj,
            action:     'save_user_answers'
        },
        function( codigo ){
            window.location = siteUrl+"obtener-certificado/?referencia="+codigo;
        }
    );
}

function surveyExists( refCode ){
    console.log( refCode );
    $.post(
        ajax_url,
        {
            reference_code:     refCode,
            action:             'survey_exists'
        },
        function( response ){
            if( '0' == response ){
                alert( 'No existe ninguna encuesta con folio: ' + refCode );
                return;
            }
            $('.js-codigo-referencia span').text( response );
            $('#modal-agradecimiento').modal('toggle');
            $('input[name="referencia"]').val( response )
        }
    );
}

function getLugarResidencia( slug ){
    var lugar;
    switch( slug ){
        case 'cdmx':
            lugar = 'CDMX';
            break;
        case 'zmvm':
            lugar = 'Zona Metropolitana';
            break;
        case 'resto-republica':
            lugar = 'Zona Metropolitana';
            break;
        default:
            lugar = 'Fuera de México';
    }
    return lugar;
}

function countChar(val, maxlength, el) {
    var len = val.value.length;
    if (len >= maxlength) {
      val.value = val.value.substring(0, maxlength);
    } else {
      $( el ).text(maxlength - len);
    }
  };

