<?php get_header(); ?>

<main>
    <section class="home-banner">
        <img src="<?php bloginfo('template_url'); ?>/img/home-wave-top.png" class="wave-top" alt="background waves top">
        <div class="container">
            <div class="row">
                <div class="text-box lg-8 sm-12">
                    <h1>Potrzebujesz <span><span class="purple-gradient">strony internetowej?</span></span></h1>
                    <h4>Tworzenie stron internetowych, e-commerce i marketing to dla nas pestka. Potencjalny klient ma pierwszą styczność z Twoją firmą właśnie tutaj - w sieci.<br> Daj się poznać od dobrej strony i zrób dobre pierwsze wrażenie.</h4>
                    <button class="btn scroll-down" title="oferta">Dowiedz się więcej</button>
                </div>
                <div class="lg-4 sm-12 img-box">
                    <img src="<?php bloginfo('template_url'); ?>/img/computers.png" alt="computer devices and people around it">
                </div>
            </div>
        </div>  
    </section>
    <section id="section1" class="scroll-to">
        <div class="container">
            <div class="row">
                <div class="lg-6 sm-12 img-box">
                    <img src="<?php bloginfo('template_url'); ?>/img/laptop.png" alt="text on laptop with background">
                </div>
                <div class="lg-6 sm-12">
                    <h2>Działamy <span><span class="orange-gradient">nieszablonowo</span></span></h2>
                    <ul>
                        <li>Twoja idea - opowiedz nam, jaki masz pomysł na witrynę, a my ją dla Ciebie zrealizujemy.</li>
                        <li>Wdrożenie to dopiero początek - dołożymy wszelkich starań by Twój biznes pracował na codzienny sukces. </li>
                        <li>Stały kontakt - zapewniamy całodobowe wsparcie z zakresu obsługi oraz pomocy technicznej.</li>
                    </ul>
                </div>
            </div>
        </div> 
    </section>
    <section id="section2">
        <div class="bg"></div>
        <div class="container">
            <h2>Wykonamy <span><span class="purple-gradient">dla Ciebie</span></span></h2>
            <div class="lg-4 sm-12">
                <a href="oferta/strony-internetowe" class="ball"  title="oferta - strony internetowe">
                    <img src="<?php bloginfo('template_url'); ?>/img/strony-internetowe.png" alt="Focusite - Strony WWW / Sklepy internetowe / Pozycjonowanie">
                </a>
                <h3><a href="oferta/strony-internetowe" title="strony www">Strony internetowe</a></h3>
            </div> 
            <div class="lg-4 sm-12">
                <a href="sklepy-internetowe" class="ball"  title="oferta - sklepy internetowe">
                    <img src="<?php bloginfo('template_url'); ?>/img/sklepy-internetowe.png" alt="Focusite - Strony WWW / Sklepy internetowe / Pozycjonowanie">
                </a>
                <h3><a href="oferta/sklepy-internetowe" title="sklepy internetowe">Sklepy <br>internetowe</a></h3>
            </div>
            <div class="lg-4 sm-12">
                <a href="oferta/pozycjonowanie" class="ball"  title="oferta - pozycjonowanie">
                    <img src="<?php bloginfo('template_url'); ?>/img/pozycjonowanie.png" alt="Focusite - Strony WWW / Sklepy internetowe / Pozycjonowanie">
                </a>
                <h3><a href="oferta/aplikacje-webowe"  title="pozycjonowanie">Aplikacje webowe</a></h3>
            </div>
            <div class="description">
                <p>To coś więcej niż serwisy www. To nasza pasja, którą stale rozwijamy, dzięki czemu spełniamy wymagania naszych klientów i dostarczamy im najlepsze rozwiązania na rynku. U nas nie ma drogi na skróty, a strony "byle jakie" to nie my. Strona www, sklep internetowy a może aplikacja? - zrobimy to za Ciebie. <strong>Jesteśmy gotowi. <span class="purple-gradient">A Ty?</span></strong></p>
            </div>
            <div class="btn-box">
                <a href="oferta" class="btn" title="oferta">Zobacz ofertę</a>
            </div> 
        </div>
    </section>
    <section id="section3">
        <div class="container">
            <div class="row">
                <div class="lg-6 sm-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/copywriter.png" alt="copywriter holding a big pencil">
                </div>
                <div class="lg-6 sm-12 pricing-box">
                    <h2>Chcesz otrzymać indywidualną <span><span class="purple-gradient">wycenę strony?</span></span></h2>
                    <h5>Wypełnij krótki brief. Odpowiedź otrzymasz w ciągu 24h.<br> Możesz też się z nami spotkać na kawie :)</h5>
                    <a href="wycena" class="btn orange" title="brief">Wypełnij brief</a><span class="or">lub</span><a href="kontakt" title="kontakt" class="btn orange">Skontaktuj się</a>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <img src="<?php bloginfo('template_url'); ?>/img/home-wave-bottom.png" class="bottom-wave" alt="background waves bottom">
    <div class="container">
        <img src="<?php bloginfo('template_url'); ?>/img/copywriter.png" alt="copywriter holding a big pencil">
        <div class="lg-6 sm-6 xs-12 copyright">
            © focusite <br>All rights reserved.
        </div>
        <div class="lg-6 sm-6 xs-12 right">
            <div class="spacer-top"></div>
            <div class="info">
                <ul>
                    <li class="email"><a href="mailto:office@focusite.pl">office@focusite.pl</a></li><li class="phone"><a href="tel:+48732009546">+48 732 009 546</a></li><li class="address">Dworcowa 1, 64-320 Buk</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>