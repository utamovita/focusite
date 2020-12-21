<div class="container">
    <h2 class="form-section__title">Wycena <span><span class="purple-gradient">sklepu internetowego</span></h2>
    <form class="main-form" method="POST" action="https://<?php echo $_SERVER['HTTP_HOST'] . '/wp-content/themes/focusite/form/mail-sklep.php'?>">
        <!-- informacje podstawowe -->
        <section>
            <h3 class="first"><span><span class="purple-gradient">Informacje podstawowe</span></span></h3>
            <div class="input-box">
                <div class="align-mid">
                    <p class="btn-switch">
                        <input type="radio" value="yes" id="payment-yes" name="payments" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" value="no" id="payment-no" name="payments" class="btn-switch__radio btn-switch__radio_no" checked />
                        <label for="payment-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="payment-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>
                    </p>
                    <h4>Płatności internetowe</h4>
                </div>
                <span class="description">Otrzymasz wybrane przez ciebie wtyczki do obsługi płatności internetowych takie jak: Dotpay, paypal itd.</span>
            </div>
            <div class="input-box">
                <div class="align-mid">
                    <p class="btn-switch">
                        <input type="radio" id="blog-yes" name="blog" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" checked id="blog-no" name="blog" class="btn-switch__radio btn-switch__radio_no" />
                        <label for="blog-yes" class="btn-switch__label btn-switch__label_yes">
                            <span class="btn-switch__txt">Tak</span>
                        </label>
                        <label for="blog-no" class="btn-switch__label btn-switch__label_no">
                            <span class="btn-switch__txt">Nie</span>
                        </label>
                    </p>
                    <h4>Blog</h4>
                </div>
                <span class="description">Wprowadzimy system blogowy - osobną sekcję lub podstronę z np. nowościami czy aktualnościami wraz z możliwością samodzielnego dodawania i edycji treści.</span>
            </div>
            <div class="input-box">
                <div class="align-mid">
                    <div class="qty" value="10">10</div>
                    <h4>Ilość produktów</h4>
                </div>

                <span class="description">Podaj orientacyjną ilość produktów jaką planujesz posiadać w swoim sklepie internetowym.</span>
                <div class="bar-container">
                    <div class="range-slider">
                        <span id="rs-bullet" class="rs-label">10</span>
                        <input id="rs-range-line" class="rs-range" type="range" name="products-num" value="10" min="10" max="200">
                    </div>
                    <div class="box-minmax">
                        <span>10</span>
                        <span class="second">70</span>
                        <span>135</span>
                        <span>200</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- dane kontaktowe -->
        <section class="contact-form">
            <h3><span><span class="purple-gradient">Dane kontaktowe</span></span></h3>
            <div class="input-box">
                <div class="align-mid">
                    <p class="btn-switch company-switch">
                        <input type="radio" id="company-yes" name="company" class="btn-switch__radio btn-switch__radio_yes" />
                        <input type="radio" checked id="company-no" name="company" class="btn-switch__radio btn-switch__radio_no" />
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
            <div class="input-box company-box hidden">
                <label>Nazwa firmy</label>
                <input type="text" class="inputClass" name="company-name">
            </div>
            <div class="input-box company-box hidden">
                <label>NIP</label>
                <input type="number" class="inputClass" name="company-nip">
            </div>
            <div class="input-box">
                <label>Imię i nazwisko</label>
                <input type="text" class="inputClass" name="name">
            </div>
            <div class="input-box">
                <label>Adres e-mail</label>
                <input type="email" class="inputClass" name="email">
            </div>
            <div class="input-box">
                <label>Numer telefonu</label>
                <input type="number" class="inputClass" name="phone">
            </div>
            <div class="input-box">
                <label>Uwagi</label>
                <textarea id="messageArea" name="message"></textarea>
            </div>
            <label class="checkbox-container">
                Wyrażam zgodę na przetwarzanie przez „focusite” moich danych osobowych, zawartych w formularzu
                kontaktowym, w celu udzielenia odpowiedzi na przesłane przeze mnie zapytanie. <a class="privacy" href="polityka-prywatnosci">Polityka prywatności.</a>
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </section>

        <!-- submit -->
        <div class="btn-box">
            <button type="submit" class="btn btn__submit">Wyślij zgłoszenie</button>
        </div>
    </form>
</div>

<script>
    var rangeSlider = document.querySelector("#rs-range-line");
    var rangeBullet = document.querySelector("#rs-bullet");
    var qty = document.querySelector(".qty");

    function showSliderValue() {
        rangeBullet.innerHTML = rangeSlider.value;
        qty.innerHTML = rangeSlider.value;
        var bulletPosition = (rangeSlider.value / rangeSlider.max);
        rangeBullet.style.left = (bulletPosition * 578) + "px";
    }

    rangeSlider.addEventListener("input", showSliderValue, false);

    jQuery("footer").removeClass('hide');

    jQuery([document.documentElement, document.body]).animate({
        scrollTop: jQuery(".form-section").offset().top - 50
    }, 1000);

    jQuery('.company-switch label').click(function() {
        jQuery('.company-box').toggleClass('hidden');
    });

    jQuery(function() {
        // Get the form.
        var form = jQuery('.main-form');

        // Get the messages div.
        var formMessages = jQuery('#form-messages');
        form.submit(false);
        // Set up an event listener for the contact form.
        jQuery(form).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();

            // Serialize the form data.
            var formData = jQuery(form).serialize();

            if (!(jQuery('input[type=checkbox]').is(':checked'))) {
                jQuery('.darkness, .light-box').addClass('on');
                jQuery(formMessages).html(
                    '<h3><span><span class="purple-gradient">Ups!</span></span></h3><p>Musisz wyrazić zgodę, aby wysłać zapytanie.</p><p>Zaznacz odpowiednie pole i spróbuj ponownie.</p>'
                );
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
                    jQuery(formMessages).html(
                        '<h3><span><span class="purple-gradient">Ups!</span></span></h3> <p>Wystąpił błąd i Twoja wiadomość nie mogła zostać wysłana.</p><p>Spróbuj jeszcze raz.</p>'
                    );
                }
            });
        });
    });
</script>