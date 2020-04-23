<div class="container">
    <form id="positioning-form" method="POST" action="https://focusite.pl/wp-content/themes/focusite/mail-pozycjonowanie.php">
        <section class="contact-form">
            <h3 class="first"><span><span class="purple-gradient">Pozycjonowanie</span></span></h3>
            <div class="form-section">
                <div class="align-mid">
                    <div class="company-switch">
                        <p class="btn-switch">					
                            <input type="radio" value="yes" id="company-yes" name="company" class="btn-switch__radio btn-switch__radio_yes" />
                            <input type="radio" value="no" id="company-no" name="company" class="btn-switch__radio btn-switch__radio_no" checked/>	
                            <label for="company-yes" class="btn-switch__label btn-switch__label_yes">
                                <span class="btn-switch__txt">Tak</span>
                            </label>
                            <label for="company-no" class="btn-switch__label btn-switch__label_no">
                                <span class="btn-switch__txt">Nie</span>
                            </label>							
                        </p>
                    </div>
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
                <label>Adres strony</label>
                <input type="text" class="inputClass" name="website-url">
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
    jQuery("footer").removeClass('hide');

    jQuery([document.documentElement, document.body]).animate({
        scrollTop: jQuery("#section2").offset().top-50
    }, 1000);
    
    jQuery('.company-switch label').click(function(){
        jQuery('.company-box').toggleClass('hidden');
    });
    
    jQuery(function() {
        // Get the form.
        var form = jQuery('#positioning-form');

        // Get the messages div.
        var formMessages = jQuery('#form-messages');
        form.submit(false);
        // Set up an event listener for the contact form.
        jQuery(form).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();

            // Serialize the form data.
            var formData = jQuery(form).serialize();
            
            if(!(jQuery('input[type=checkbox]').is(':checked'))){
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
                //Error
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