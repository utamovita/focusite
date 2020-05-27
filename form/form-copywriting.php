<div class="container">
    <h2 class="form-section__title">Wycena <span><span class="purple-gradient">sklepu internetowego</span></h2>
    <form class="main-form" method="POST" action="https://<?php echo $_SERVER['HTTP_HOST'] . '/wp-content/themes/focusite/form/mail-copywriting.php' ?>">
        <!-- informacje podstawowe + kontakt -->
        <section class="contact-form">
            <h3 class="first"><span><span class="purple-gradient">Informacje podstawowe</span></span></h3>
            <div class="input-box">
                <div class="align-mid">
                    <div class="qty" value="8000">8000</div>
                    <h4>Ilość zzs</h4>
                </div>
                <span class="description">Podaj orientacyjną ilość znaków ze spacją jaką planujesz zamówić.</span>
                <div class="bar-container">
                    <div class="range-slider">
                        <span id="rs-bullet" class="rs-label">8000</span>
                        <input id="rs-range-line" class="rs-range" type="range" name="zzs-num" value="8000" min="8000" max="120000">
                    </div>
                    <div class="box-minmax">
                        <span>11000</span>
                        <span class="second">45000</span>
                        <span>80000</span>
                        <span>115000</span>
                    </div>
                </div>
            </div>
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
                <label>Branża, uwagi</label>
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
        rangeBullet.style.left = (bulletPosition * 678) + "px";
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