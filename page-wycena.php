<?php get_header(); ?>
<main>
    <img src="<?php bloginfo('template_url'); ?>/img/contact-top-wave.png" class="wave-top" alt="purple top wave">
    <div class="darkness"></div>
    <section id="section1">
        <div class="container">
            <div class="centered choosePricing">
                <h1><span><span class="purple-gradient">Darmowa wycena</span></span></h1>
                <h2>Wybierz interesującą Cię ofertę i wypełnij krótki formularz.<br>Orientacyjną wycenę otrzymasz w ciągu 24h.</h2>
                <button id="strona" class="btn orange empty">Strona www</button>
                <button id="sklep" class="btn orange empty long-name">Sklep internetowy</button>
                <button id="pozycjonowanie" class="btn orange empty">Pozycjonowanie</button>
            </div>
            <div class="info">
                <h3>Nie wiesz co wybrać? <br>
                    Skontaktuj się z nami - na pewno doradzimy :)</h3>
                <ul>
                    <li class="email"><a href="mailto:support@focusite.pl">office@focusite.pl</a></li><li class="phone"><a href="tel:+48732009546">+48 732 009 546</a></li>
                </ul>
            </div>
            <div class="light-box">
                <div class="close-btn"></div>
                <div id="form-messages"></div>
            </div>
        </div>
    </section>
    <div id="section2">
    </div>
    <footer class="hide">
        <div class="container">
            <div class="lg-6">
                <div class="spacer-top"></div>
                <div class="info">
                    <ul>
                        <li class="email"><a href="mailto:office@focusite.pl" title="mail">office@focusite.pl</a></li><li class="phone"><a href="tel:+48732009546" title="phone">+48 732 009 546</a></li><li class="address">Dworcowa 1, 64-320 Buk</li>
                    </ul>
                </div>
            </div>
            <div class="lg-6 copyright">© focusite <br>All rights reserved</div>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/img/offer-bottom-wave.png" class="bottom-wave" alt="purple background bottom wave">
    </footer>
</main>
<?php get_footer(); ?>