<?php get_header(); ?>

<main>
    <img src="<?php bloginfo('template_url'); ?>/img/wave-top.png" class="wave-top" alt="purple background top wave">
    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="lg-6 sm-12 offer">
                    <h1>Nasza <span class="purple-gradient">oferta</span></h1>
                    <p>Zapoznaj się z szerokim wachlarzem naszych usług. Działamy od wielu lat tworząc strony internetowe, sklepy internetowe i aplikacje. Kreatywni graficy, zdolni copywriterzy i najlepsi programiści zadbają o to by Twoja firma zaistniała w internecie.</p>
                    <ul>
                        <li class="simple">Szerokie doświadczenie</li><li class="optimized">Konkurencyjne ceny</li><li class="speed">Wsparcie 24/7</li>
                    </ul>
                    <button class="btn scroll-down">Dowiedz się więcej</button>
                </div>
                <div class="lg-6 sm-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/offer-laptop.png" class="laptop-img" alt="wireless computer">
                    <img src="<?php bloginfo('template_url'); ?>/img/wordpress-logo.png" class="wp-img" alt="wordpress logo">
                </div>
            </div>
        </div>      
    </section>
    <section id="section2" class="scroll-to">
        <div class="bg"></div>
        <div class="container">
            <h2>Co potrafimy zrobić <span><span class="purple-gradient">dla Ciebie?</span></span></h2>
            <div class="type">
                <h3><span>Strony internetowe</span></h3>
                <ul>
                    <li>Hosting, domena oraz firmowa poczta</li>
                    <li>Samodzielna edycja strony przez panel administracyjny</li>
                    <li>Pozycjonowanie strony na etapie produkcji</li>
                    <li>Indywidualny projekt graficzny lub szablon</li>
                    <li>i wiele więcej!</li>
                </ul>
            </div>
            <div class="type second">
                <h3><span>Sklepy internetowe</span></h3>
                <ul>
                    <li>Wtyczki do płatności elektronicznych</li>
                    <li>Spersonalizowany design graficzny</li>
                    <li>Prosty w obsłudze panel zarządzania sklepem</li>
                    <li>System mailingowy wraz z newsletterem</li>
                    <li>i wiele więcej!</li>
                </ul>
            </div>   
            <div class="type">
                <h3><span>Pozycjonowanie</span></h3>
                <ul>
                    <li>Analiza elementów wymagających poprawy</li>
                    <li>Optymalizacja kodu źródłowego strony</li>
                    <li>Copywriting oraz slogany reklamowe</li>
                    <li>Konfiguracja i zarządzanie usługami Google </li>
                    <li>i wiele więcej!</li>
                </ul>
            </div>
            <div class="btn-box">
                <a href="wycena" class="btn" title="wycena">Uzyskaj darmową wycenę</a>
            </div>
        </div>
    </section>
    <section id="section3">
        <div class="container">
            <div class="row">
                <div class="lg-6 sm-12 about-us">
                    <h2>Dlaczego <span><span class="purple-gradient">focusite?</span></span></h2>
                    <p>Nasz zespół stanowi grupa ekspertów i pasjonatów w swojej dziedzinie. Jesteśmy dobrzy w tym co robimy, ponieważ większość nowych klientów pochodzi z polecenia naszych dotychczasowych kontrahentów.</p>
                    <ul>
                        <li class="team">mamy młody zespół</li><li class="deadline second">dotrzymujemy terminów</li><li class="passion">pracujemy z pasją</li>
                    </ul>
                </div>
                <div class="lg-6 sm-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/team.png"  alt="team sitting around the round table">
                </div>
                <div class="btn-box">
                    <a href="kontakt" class="btn" title="kontakt">Skontaktuj się</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>