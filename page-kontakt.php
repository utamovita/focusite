<?php get_header(); ?>

<main>
    <section id="section1">
        <img src="<?php bloginfo('template_url'); ?>/img/wave-top.png" class="wave-top" alt="top wave background">
        
        <div class="container">
            <div class="row">
                <div class="lg-4 sm-12 contact-us">
                    <h1>Skontaktuj się <span><span class="purple-gradient">z nami</span></span></h1>
                    <ul>
                        <li class="email"><a href="mailto:support@focusite.pl">office@focusite.pl</a></li><li class="phone"><a href="tel:+48732009546">+48 732 009 546</a></li><li class="address">Dworcowa 1<br>Buk, 64-320</li><li class="hours">poniedziałek-sobota<br>9:00 - 17:00</li>
                    </ul>
                </div>
                <div class="lg-8 sm-12">
                    <form class="contact-form" method="POST" action="<?php bloginfo('template_url');?>/mail.php">
                        <table>
                            <tr>
                                <td><label>Imię i nazwisko:</label></td>
                                <td><input type="text" name="name" id="name"></td>
                            </tr>
                            <tr>
                                <td><label>Adres e-mail:</label></td>
                                <td><input type="email" name="email" id="email"></td>
                            </tr>
                            <tr>
                                <td><label>Telefon:</label></td>
                                <td><input type="number" name="phone" id="phone"></td>
                            </tr>
                            <tr>
                                <td class="align-top"><label>Treść wiadomości:</label></td>
                                <td><textarea name="message" id="message"></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> 
                                    <label class="checkbox-container">
                                        Wyrażam zgodę na przetwarzanie przez „focusite” moich danych osobowych, zawartych w formularzu kontaktowym, w celu udzielenia odpowiedzi na przesłane przeze mnie zapytanie. <a class="privacy" href="polityka-prywatnosci">Polityka prywatności.</a>
                                        <input type="checkbox" id="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn">Wyślij wiadomość</button>
                                </td>
                            </tr> 
                        </table>               
                    </form>
                    <div class="light-box">
                        <button class="close-btn"></button>
                        <div id="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

<script>
    jQuery(function() {
        // Get the form.
        var form = jQuery('.contact-form');

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
                // Make sure that the formMessages div has the 'success' class.
                jQuery(formMessages).removeClass('error');
                jQuery(formMessages).addClass('success');
                jQuery('.darkness, .light-box').addClass('on');
                // Set the message text.
                jQuery(formMessages).html(response);

                // Clear the form.
                jQuery('#name').val('');
                jQuery('#message').val('');
                jQuery('#phone').val('');
                jQuery('#email').val('');
            }).fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                jQuery(formMessages).removeClass('success');
                jQuery(formMessages).addClass('error');
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
