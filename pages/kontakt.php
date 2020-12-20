<?php /* Template Name: Kontakt*/ ?>
<?php get_header(); ?>

<main>
    <section id="section1">
        <img src="<?php bloginfo('template_url'); ?>/img/wave-top.png" class="wave-top" alt="top wave background">

        <div class="container">
            <div class="row">
                <div class="lg-4 sm-12 contact-us">
                    <h1>Skontaktuj się <span><span class="purple-gradient">z nami</span></span></h1>
                    <ul>
                        <li class="email"><a href="mailto:support@focusite.pl">office@focusite.pl</a></li>
                        <li class="phone"><a href="tel:+48732009546">+48 732 009 546</a></li>
                        <li class="address">Dworcowa 1<br>Buk, 64-320</li>
                        <li class="hours">poniedziałek-sobota<br>9:00 - 17:00</li>
                    </ul>
                </div>
                <div class="lg-8 sm-12">
                    <form class="contact-form" method="POST" action="<?php bloginfo('template_url'); ?>/mail.php">
                        <table>
                            <tr>
                                <td><label for="name">Imię i nazwisko:</label></td>
                                <td><input type="text" name="name" id="name"></td>
                            </tr>
                            <tr>
                                <td><label for="email">Adres e-mail:</label></td>
                                <td><input type="email" name="email" id="email"></td>
                            </tr>
                            <tr>
                                <td><label for="phone">Telefon:</label></td>
                                <td><input type="number" name="phone" id="phone"></td>
                            </tr>
                            <tr>
                                <td class="align-top"><label for="message">Treść wiadomości:</label></td>
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

<footer>
    <div class="container">
        <div class="lg-6">
            <div class="spacer-top"></div>
            <div class="info">
                <ul>
                    <li class="email"><a href="mailto:office@focusite.pl">office@focusite.pl</a></li>
                    <li class="phone"><a href="tel:+48732009546">+48 732 009 546</a></li>
                    <li class="address">Dworcowa 1, 64-320 Buk</li>
                </ul>
            </div>
        </div>
        <div class="lg-6 copyright">© focusite <br>All rights reserved</div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/img/wave-bottom.png" class="bottom-wave" alt="purple background bottom wave">
</footer>

<?php wp_footer(); ?>

<script>
    jQuery(function() {
        var form = jQuery(".contact-form"),
            dialog = jQuery("#form-messages");

        var contentNoTerms = `
                <h3><span><span class="purple-gradient">Ups!</span></span></h3>
                <p>Musisz wyrazić zgodę, aby wysłać zapytanie.</p>
                <p>Zaznacz odpowiednie pole i spróbuj ponownie.</p>
            `,
            contentError = `
                <h3><span><span class="purple-gradient">Ups!</span></span></h3>
                <p>Wystąpił błąd i Twoja wiadomość nie mogła zostać wysłana.</p>
                <p>Spróbuj jeszcze raz.</p>
            `;
            
        form.submit(!1), jQuery(form).submit(function(s) {
            s.preventDefault();
            var formData = jQuery(form).serialize();
            if (!jQuery("input[type=checkbox]").is(":checked")) return jQuery(".darkness, .light-box").addClass("on"), 
            void jQuery(dialog).html(contentNoTerms);
            
            jQuery.ajax({
                type: "POST",
                url: jQuery(form).attr("action"),
                data: formData
            }).done(function(e) {
                jQuery(dialog).removeClass("error").addClass("success").html(e), 
                jQuery(".darkness, .light-box").addClass("on"), 
                jQuery("#name, #message, #phone, #email").val("")
            }).fail(function(e) {
                jQuery(dialog).removeClass("success").addClass("error"),
                jQuery(".darkness, .light-box").addClass("on"), 
                e.responseText !== "" ? jQuery(dialog).html(e.responseText) : jQuery(dialog).html(contentError)
            })
        })
    });
</script>

</body>
</html>