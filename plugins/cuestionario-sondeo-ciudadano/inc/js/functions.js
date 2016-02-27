(function() {
    // Hide options for survey

    var formWrap = document.getElementById( 'fs-form-wrap' );
    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
        new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function( lugar ){
                $('#js-delegaciones-estados-paises').empty();
                switch( lugar ){
                    case 'cdmx':
                    case 'zmvm':
                        showDelegaciones( lugar, '');
                        break;
                    case 'resto-republica':
                        showEstados();
                        break;
                    case 'fuera-mexico':
                        showPaises();
                        break;
                }
            }
        });
    } );

    new FForm( formWrap, {
        onReview : function() {
            classie.add( document.body, 'overview' ); // for demo purposes only
        }
    } );

    $('#js-trabajas input').click(function(){
        if( 'si' == this.value ){
            showDondeTrabajas();
        }
    })

    // FForm.prototype._removeField( formWrap, 'js-colonias-municipios' );
    // FForm.prototype._addField( formWrap, 'js-icipios', 'js-delegaciones-estados-paises' );

})();

function showDelegaciones( ciudad, section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
    }

    if( 'cdmx' == ciudad ){
        $(el).append( getHTMLDelegacionesCDMX() );
        new SelectFx( $(el + ' .cs-select')[0], {
            stickyPlaceholder: false,
            onChange: function( delegacion ){
                showColonias( delegacion );
            }
        });
        return;
    }
    $('#js-' + section + '-delegaciones-estados-paises').append( getHTMLDelegacionesCDMX() );
    new SelectFx( $('#js-' + section + '-delegaciones-estados-paises .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( delegacion ){
            showColonias( delegacion );
        }
    });
    return;
}

function showEstados( section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
    }
    FForm.prototype._removeField( $('#fs-form-wrap')[0], 'js-colonias-municipios' );
    $(el).append( getHTMLEstados() );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( estados ){
            console.log( estados );
        }
    });
    return;
}

function showPaises( section ){
    if( '' == section ){
        var el = '#js-delegaciones-estados-paises';
    } else{
        var el = '#js-' + section + '-delegaciones-estados-paises';
    }
    $(el).append( getHTMLPaises() );
    new SelectFx( $(el + ' .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( pais ){
            console.log( pais );
        }
    });
    return;
}

function showColonias( delegacion ){
    $('#js-colonias-municipios').append( getHTMLColoniasCDMX( delegacion ) );
    new SelectFx( $('#js-colonias-municipios .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( colonia ){
            console.log( colonia );
        }
    });
    return;
}

function showDondeTrabajas(){
    FForm.prototype._addField( $('#fs-form-wrap')[0], 'js-donde-trabajas', 'js-trabajas' );
    FForm.prototype._addField( $('#fs-form-wrap')[0], 'js-trabajas-delegaciones-estados-paises', 'js-donde-trabajas' );
    $('#js-donde-trabajas').append( getHTMLDondeTrabajas() );
    new SelectFx( $('#js-donde-trabajas .cs-select')[0], {
        stickyPlaceholder: false,
        onChange: function( lugar ){
            $('#js-trabajas-delegaciones-estados-paises').empty();
            switch( lugar ){
                case 'cdmx':
                case 'zmvm':
                    showDelegaciones( lugar, 'trabajas' );
                    break;
                case 'resto-republica':
                    showEstados('trabajas');
                    break;
                case 'fuera-mexico':
                    showPaises('trabajas');
                    break;
            }
        }
    });
}

function getHTMLDondeTrabajas(){
    return `
        <label class="fs-field-label fs-anim-upper  [ color-gray ]">¿En dónde trabajas?</label>
        <select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="cdmx">CDMX</option>
            <option value="zmvm">ZMVM</option>
            <option value="resto-republica">Resto de la república</option>
            <option value="fuera-mexico">Fuera de México</option>
        </select>
    `;
}

function getHTMLDelegacionesCDMX(){
    return `
        <label class="[ fs-field-label fs-anim-upper ][ color-gray ]">¿En qué delegación vives?</label>
        <select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required">
            <option value="" disabled selected>Selecciona tu delgación</option>
            <option value="Álvaro Obregón">Álvaro Obregón</option>
            <option value="Azcaptozalco">Azcaptozalco</option>
            <option value="Benito Juárez">Benito Juárez</option>
            <option value="Coyoacán">Coyoacán</option>
            <option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
            <option value="Cuauhtémoc">Cuauhtémoc</option>
            <option value="Gustavo A. Madero">Gustavo A. Madero</option>
            <option value="Iztacalco">Iztacalco</option>
            <option value="Iztapalapa">Iztapalapa</option>
            <option value="Magdalena Contreras">Magdalena Contreras</option>
            <option value="Miguel Hidalgo">Miguel Hidalgo</option>
            <option value="Milpa Alta" >Milpa Alta</option>
            <option value="Tláhuac" >Tláhuac</option>
            <option value="Tlalpan" >Tlalpan</option>
            <option value="Venustiano Carranza" >Venustiano Carranza</option>
            <option value="Xochimilco" >Xochimilco</option>
        </select>
    `;
}

function getHTMLEstados(){
    return `
        <label class="[ fs-field-label fs-anim-upper ][ color-gray ]">¿En qué estado vives?</label>
        <select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" name="state" id="state" >
            <option value="" disabled selected>Selecciona el estado</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
    `;
}

function getHTMLPaises(){
    return `
        <label class="[ fs-field-label fs-anim-upper ][ color-gray ]">¿En qué país vives?</label>
        <select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ] select-paises" name="pais" id="pais" >
            <option value="" disabled selected>Selecciona el país</option>
            <option value="Afganistán">Afganistán</option>
            <option value="Albania">Albania</option>
            <option value="Alemania">Alemania</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antártida">Antártida</option>
            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
            <option value="Antillas Holandesas">Antillas Holandesas</option>
            <option value="Arabia Saudí">Arabia Saudí</option>
            <option value="Argelia">Argelia</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaiyán">Azerbaiyán</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrein">Bahrein</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Bélgica">Bélgica</option>
            <option value="Belice">Belice</option>
            <option value="Benin">Benin</option>
            <option value="Bermudas">Bermudas</option>
            <option value="Bielorrusia">Bielorrusia</option>
            <option value="Birmania">Birmania</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Brasil">Brasil</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Bután">Bután</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Camboya">Camboya</option>
            <option value="Camerún">Camerún</option>
            <option value="Canadá">Canadá</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Chipre">Chipre</option>
            <option value="Ciudad del Vaticano (Santa Sede)">Ciudad del Vaticano (Santa Sede)</option>
            <option value="Colombia">Colombia</option>
            <option value="Comores">Comores</option>
            <option value="Congo">Congo</option>
            <option value="Congo, República Democrática del">Congo, República Democrática del</option>
            <option value="Corea">Corea</option>
            <option value="Corea del Norte">Corea del Norte</option>
            <option value="Costa de Marfíl">Costa de Marfíl</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
            <option value="Cuba">Cuba</option>
            <option value="Dinamarca">Dinamarca</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egipto">Egipto</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Eslovenia">Eslovenia</option>
            <option value="España">España</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Estonia">Estonia</option>
            <option value="Etiopía">Etiopía</option>
            <option value="Fiji">Fiji</option>
            <option value="Filipinas">Filipinas</option>
            <option value="Finlandia">Finlandia</option>
            <option value="Francia">Francia</option>
            <option value="Gabón">Gabón</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Granada">Granada</option>
            <option value="Grecia">Grecia</option>
            <option value="Groenlandia">Groenlandia</option>
            <option value="Guadalupe">Guadalupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guayana">Guayana</option>
            <option value="Guayana Francesa">Guayana Francesa</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Haití">Haití</option>
            <option value="Honduras">Honduras</option>
            <option value="Hungría">Hungría</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Irak">Irak</option>
            <option value="Irán">Irán</option>
            <option value="Irlanda">Irlanda</option>
            <option value="Isla Bouvet">Isla Bouvet</option>
            <option value="Isla de Christmas">Isla de Christmas</option>
            <option value="Islandia">Islandia</option>
            <option value="Islas Caimán">Islas Caimán</option>
            <option value="Islas Cook">Islas Cook</option>
            <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
            <option value="Islas Faroe">Islas Faroe</option>
            <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
            <option value="Islas Malvinas">Islas Malvinas</option>
            <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
            <option value="Islas Marshall">Islas Marshall</option>
            <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
            <option value="Islas Palau">Islas Palau</option>
            <option value="Islas Salomón">Islas Salomón</option>
            <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
            <option value="Islas Tokelau">Islas Tokelau</option>
            <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
            <option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
            <option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
            <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
            <option value="Israel">Israel</option>
            <option value="Italia">Italia</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japón">Japón</option>
            <option value="Jordania">Jordania</option>
            <option value="Kazajistán">Kazajistán</option>
            <option value="Kenia">Kenia</option>
            <option value="Kirguizistán">Kirguizistán</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Laos">Laos</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Letonia">Letonia</option>
            <option value="Líbano">Líbano</option>
            <option value="Liberia">Liberia</option>
            <option value="Libia">Libia</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lituania">Lituania</option>
            <option value="Luxemburgo">Luxemburgo</option>
            <option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malasia">Malasia</option>
            <option value="Malawi">Malawi</option>
            <option value="Maldivas">Maldivas</option>
            <option value="Malí">Malí</option>
            <option value="Malta">Malta</option>
            <option value="Marruecos">Marruecos</option>
            <option value="Martinica">Martinica</option>
            <option value="Mauricio">Mauricio</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mayotte">Mayotte</option>
            <option value="México">México</option>
            <option value="Micronesia">Micronesia</option>
            <option value="Moldavia">Moldavia</option>
            <option value="Mónaco">Mónaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Níger">Níger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk">Norfolk</option>
            <option value="Noruega">Noruega</option>
            <option value="Nueva Caledonia">Nueva Caledonia</option>
            <option value="Nueva Zelanda">Nueva Zelanda</option>
            <option value="Omán">Omán</option>
            <option value="Países Bajos">Países Bajos</option>
            <option value="Panamá">Panamá</option>
            <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
            <option value="Paquistán">Paquistán</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Perú">Perú</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Polinesia Francesa">Polinesia Francesa</option>
            <option value="Polonia">Polonia</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reino Unido">Reino Unido</option>
            <option value="República Centroafricana">República Centroafricana</option>
            <option value="República Checa">República Checa</option>
            <option value="República de Sudáfrica">República de Sudáfrica</option>
            <option value="República Dominicana">República Dominicana</option>
            <option value="República Eslovaca">República Eslovaca</option>
            <option value="Reunión">Reunión</option>
            <option value="Ruanda">Ruanda</option>
            <option value="Rumania">Rumania</option>
            <option value="Rusia">Rusia</option>
            <option value="Sahara Occidental">Sahara Occidental</option>
            <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
            <option value="Samoa">Samoa</option>
            <option value="Samoa Americana">Samoa Americana</option>
            <option value="San Marino">San Marino</option>
            <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
            <option value="Santa Helena">Santa Helena</option>
            <option value="Santa Lucía">Santa Lucía</option>
            <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
            <option value="Senegal">Senegal</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leona">Sierra Leona</option>
            <option value="Singapur">Singapur</option>
            <option value="Siria">Siria</option>
            <option value="Somalia">Somalia</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
            <option value="Suazilandia">Suazilandia</option>
            <option value="Sudán">Sudán</option>
            <option value="Suecia">Suecia</option>
            <option value="Suiza">Suiza</option>
            <option value="Surinam">Surinam</option>
            <option value="Tailandia">Tailandia</option>
            <option value="Taiwán">Taiwán</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Tayikistán">Tayikistán</option>
            <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
            <option value="Timor Oriental">Timor Oriental</option>
            <option value="Togo">Togo</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad y Tobago">Trinidad y Tobago</option>
            <option value="Túnez">Túnez</option>
            <option value="Turkmenistán">Turkmenistán</option>
            <option value="Turquía">Turquía</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Ucrania">Ucrania</option>
            <option value="Uganda">Uganda</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistán">Uzbekistán</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Yemen">Yemen</option>
            <option value="Yugoslavia">Yugoslavia</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabue">Zimbabue</option>
            </select>
    `;
}

function getHTMLColoniasCDMX( delegacion ){
    return `
        <label class="[ fs-field-label fs-anim-upper ][ color-gray ]">¿En qué colonia vives?</label>
        <select class="[ cs-select cs-skin-boxes ][ fs-anim-lower ]" required="required">
            <option value="" disabled selected>Selecciona tu colonia</option>
            <option value="Roma">Roma</option>
            <option value="Polanco">Polanco</option>
        </select>
    `;
}