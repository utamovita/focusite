<div class="container">
    <form id="website-form" method="POST" action="https://focusite.pl/wp-content/themes/focusite/mail-strona.php">
        <!-- informacje podstawowe -->
        <section>
            <h3 class="first"><span><span class="purple-gradient">Informacje podstawowe</span></span></h3>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="cms-yes" name="cms" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="cms-no" name="cms" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="cms-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="cms-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>System zarządzania treścią (CMS)</h4>
                </div>
                <span class="description">Otrzymasz panel administracyjny pozwalający na samodzielne dodawanie i zmienianie treści oraz zdjęć bez znajomości programowania. Jeśli na Twojej stronie będzie np. blog lub aktualności jest to opcja zdecydowanie dla Ciebie.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="project-yes" name="project" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="project-no" name="project" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="project-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="project-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Indywidualny projekt graficzny</h4>
                </div>
                <span class="description">Nasz grafik przygotuje dla Ciebie unikatową i spersonalizowaną grafikę Twojej strony.  Jeśli nie zdecydujesz się na takie rozwiązanie - nie szkodzi, otrzymasz od nas do wyboru szablon graficzny, który dopasujemy do Twoich potrzeb.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <div id="page-ammount">1</div>
                    <h4>Ilość podstron</h4>
                </div>

                <span class="description">Podaj orientacyjną ilość podstron jaką planujesz posiadać na swojej stronie (np. home, o nas, oferta, kontakt).</span>
                <div class="bar-container">
                    <div class="range-slider">
                        <span id="rs-bullet" class="rs-label">1</span>
                        <input id="rs-range-line" class="rs-range" type="range" value="1" min="1" max="15" name="page-num">
                    </div>
                    <div class="box-minmax">
                        <span>1</span>
                        <span class="half">8</span>
                        <span>15</span>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="logo-yes" name="logo" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="logo-no" name="logo" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="logo-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="logo-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Logo</h4>
                </div>
                <span class="description">Jeśli nie posiadasz w swojej firmie loga lub chcesz je odświeżyć - jest to opcja dla Ciebie. Zaprojektujemy dla Ciebie identyfikujący Twoją firmę logotyp i sygnet.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="seo-yes" name="seo" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="seo-no" name="seo" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="seo-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="seo-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Pozycjonowanie (SEO)</h4>
                </div>
                <span class="description">Oprócz standardowego pozycjonowania strony na etapie produkcji, wprowadzimy dodatkowe zmiany w kodzie źródłowym oraz przygotujemy teksty tak, aby Twoja strona była jeszcze bardziej czytelna i osiągała jak najwyższą pozycję w wynikach wyszukiwarek (np. Google).</span>
            </div>
        </section>
        
        <!-- funkcjonalności -->
        <section>
            <h3><span><span class="purple-gradient">Widgety i funkcjonalności</span></span></h3>

            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="gmap-yes" name="gmap" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="gmap-no" name="gmap" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="gmap-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="gmap-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Mapa Google</h4>
                </div>
                <span class="description">Podłączymy dla Ciebie Google maps aby potencjalny klient mógł łatwo zlokalizować Twoją firmę.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="contactForm-yes" name="contactForm" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="contactForm-no" name="contactForm" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="contactForm-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="contactForm-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Formularz kontaktowy</h4>
                </div>
                <span class="description">Kilka prostych pól do wypełnienia(np. imię, temat, zapytanie). Po wypełnieniu go przez użytkownika, wiadomość otrzymasz na wskazany przez Ciebie e-mail.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="gallery-yes" name="gallery" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="gallery-no" name="gallery" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="gallery-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="gallery-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Galeria</h4>
                </div>
                <span class="description">Wiele grafik lub zdjęć umieszczonych obok siebie w przejrzysty sposób wraz z możliwością ich przybliżania.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="slider-yes" name="slider" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="slider-no" name="slider" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="slider-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="slider-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Slider</h4>
                </div>
                <span class="description">Karuzela przewijająca automatycznie (lub ręcznie) slajdy ze zdjęciami co kilka sekund.</span>
            </div>
            <div class="form-section">
                <div class="align-mid">
                    <p class="btn-switch">					
                        <input type="radio" value="yes" id="lang-yes" name="lang" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="lang-no" name="lang" class="btn-switch__radio btn-switch__radio_no" checked />		
                        <label for="lang-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="lang-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Wersje językowe</h4>
                </div>
                <span class="description">Jeśli masz lub planujesz posiadać zagranicznych kontrahentów to jest to opcja dla Ciebie.</span>
            </div>
        </section>
        
        <!-- dane kontaktowe -->
        <section class="contact-form">
            <h3><span><span class="purple-gradient">Dane kontaktowe</span></span></h3>
            <div class="form-section ">
                <div class="align-mid">
                    <p class="btn-switch company-switch">					
                        <input type="radio" value="yes" id="company-yes" name="company" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="company-no" name="company" class="btn-switch__radio btn-switch__radio_no" checked/>	
                        <label for="company-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="company-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>							
                    </p>
                    <h4>Mam firmę</h4>
                </div>
            </div>
            <div class="form-section input-box company-box hidden">
                <label>Nazwa firmy</label>
                <input type="text" class="inputClass" name="company-name">
            </div>
            <div class="form-section input-box company-box hidden">
                <label>NIP</label>
                <input type="number" class="inputClass" name="company-nip">
            </div>
            <div class="form-section input-box">
                <label>Imię i nazwisko</label>
                <input type="text" class="inputClass" name="name">
            </div>
            <div class="form-section input-box">
                <label>Adres e-mail</label>
                <input type="email" class="inputClass" name="email">
            </div>
            <div class="form-section input-box">
                <label>Numer telefonu</label>
                <input type="number" class="inputClass" name="phone">
            </div>
            <div class="form-section input-box">
                <label>Uwagi</label>
                <textarea name="message" id="messageArea"></textarea>
            </div>
            <label class="checkbox-container">
                 Wyrażam zgodę na przetwarzanie przez „focusite” moich danych osobowych, zawartych w formularzu kontaktowym, w celu udzielenia odpowiedzi na przesłane przeze mnie zapytanie. <a class="privacy" href="polityka-prywatnosci">Polityka prywatności.</a>
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </section>
        <div class="btn-box">
             <button type="submit" class="btn">Wyślij zgłoszenie</button>
        </div>
    </form>
</div>

<script>
    var rangeSlider = document.getElementById("rs-range-line");
    var rangeBullet = document.getElementById("rs-bullet");
    var pageAmmount = document.getElementById("page-ammount");

    function showSliderValue() {
      rangeBullet.innerHTML = rangeSlider.value;
      pageAmmount.innerHTML = rangeSlider.value;
      var bulletPosition = (rangeSlider.value /rangeSlider.max);
      rangeBullet.style.left = (bulletPosition * 578) + "px";

    } 
    jQuery("footer").removeClass('hide');
    rangeSlider.addEventListener("input", showSliderValue, false);


    jQuery([document.documentElement, document.body]).animate({
        scrollTop: jQuery("#section2").offset().top-50
    }, 1000);
    jQuery('.company-switch label').click(function(){
        jQuery('.company-box').toggleClass('hidden');
    });
    jQuery(function() {
        // Get the form.
        var form = jQuery('#website-form');

        // Get the messages div.
        var formMessages = jQuery('#form-messages');
        form.submit(false);
        // Set up an event listener for the contact form.
        jQuery(form).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();

            // Serialize the form data.
            var formData = jQuery(form).serialize();
            
            if(!(jQuery('input[type=checkbox]').attr('checked'))){
                jQuery('.darkness, .light-box').addClass('on');
                jQuery(formMessages).html('<h3><span><span class="purple-gradient">Ups!</span></span></h3><p>Musisz wyrazić zgodę, aby wysłać zapytanie.</p><p>Zaznacz odpowiednie pole i spróbuj ponownie.</p>');
                return;
            };
             
            jQuery.ajax({
                type: 'POST',
                url: jQuery(form).attr('action'),
                data: formData
            }).done(function(response) {
                // Success
                
                jQuery('.darkness, .light-box').addClass('on');
                // Set the message text.
                jQuery(formMessages).html(response);

                // Clear the form.
                jQuery('.inputClass').val('');
                jQuery('#messageArea').val('');
                jQuery('.btn-switch__radio_no').prop('checked', true);
                jQuery('.checkbox-container input[type="checkbox"]').prop('checked', false);
            }).fail(function(data) {
                // Error
                
                jQuery('.darkness, .light-box').addClass('on');
                // Set the message text.
                if (data.responseText !== '') {
                    jQuery(formMessages).html(data.responseText);
                } else {
                    jQuery(formMessages).html('<h3><span><span class="purple-gradient">Ups!</span></span></h3> <p>Wystąpił błąd i Twoja wiadomość nie mogła zostać wysłana.</p><p>Spróbuj jeszcze raz.</p>');
                }
            });
        });
    });
</script>