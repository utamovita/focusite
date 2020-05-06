<?php get_header(); ?>
<main>
    <img src="<?php bloginfo('template_url'); ?>/img/wave-top.png" class="wave-top" alt="purple top wave">
    <section id="section1">
        <div class="container">
            <div class="centered choosePricing">
                <h1><span><span class="purple-gradient">Darmowa wycena</span></span></h1>
                <h2>Wybierz interesującą Cię ofertę i wypełnij krótki formularz.<br>Orientacyjną wycenę otrzymasz w ciągu 24h.</h2>
                <h3><span><span class="orange-gradient">Projektowanie www</span></span></h3>
                <button id="strona" class="btn orange empty">
                    <span>Strona www</span>
                </button>
                <button id="sklep" class="btn orange empty">
                    <span>E-Commerce</span>
                </button>
                <button id="aplikacja" class="btn orange empty">
                    <span>Aplikacja</span>
                </button>
                <h3><span><span class="purple-gradient">Usługi dodatkowe</span></span></h3>
                <button id="pozycjonowanie" class="btn purple empty">
                    <span>Pozycjonowanie</span>
                </button>
                <button id="copywriting" class="btn purple empty">
                    <span>Copywriting</span>
                </button> <button id="optymalizacja" class="btn purple empty">
                    <span>Optymalizacja</span>
                </button>
            </div>
            <div class="light-box">
                <div class="close-btn"></div>
                <div id="form-messages"></div>
            </div>
        </div>
    </section>
    <div id="section2">
    </div>
</main>

<?php get_footer(); ?>