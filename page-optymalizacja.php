<?php get_header(); ?>

<main class="offer-subpage">
    <img src="<?php bloginfo('template_url'); ?>/img/wave-top.png" class="wave-top" alt="purple background top wave">
    <section class="banner container">
        <div class="banner__box">
            <h1 class="banner__title">Co to jest <span><span class="purple-gradient banner__title__fragment">optymalizacja?</span></span></h1>
            <p class="banner__paragraph">Optymalizacja strony to zestaw działań mających na celu poprawę pozycji w wyszukiwarce, zwiększenia szybkości ładowania i działania stron, poprawa współczynnika CTR oraz ogólnego user experience. Szybko działająca strona lub sklep sprawia, że użytkownicy są bardziej chętni aby na nim pozostać, dokonać zakupu lub skontaktować się.</p>
            <ul class="banner__list">
                <li class="banner__list__element simple">Przyśpieszenie strony</li>
                <li class="banner__list__element optimized">Wyższa pozycja w Google</li>
                <li class="banner__list__element responsive">Większy współczynnik CTR</li>
                <li class="banner__list__element speed">Bez utraty jakości</li>
            </ul>
            <button class="banner__button btn scroll-down">
                Czytaj więcej
            </button>
        </div>
        <div class="banner__box">
            <img src="<?php bloginfo('template_url'); ?>/img/strony-internetowe.png" class="banner__image" alt="wireless computer">
        </div>
    </section>
    <section class="benefits scroll-to">
        <div class="bg"></div>
        <div class="container">
            <h2 class="benefits__title">Jakie korzyści daje nasza<span><span class="purple-gradient">optymalizacja?</span></span></h2>
            <div class="benefits__box">
                <div class="benefits__type">
                    <h3 class="benefits__type__title"><span>Prędkość wczytywania</span></h3>
                    <p class="benefits__type__description">.</p>
                </div>
                <div class="benefits__type">
                    <h3 class="benefits__type__title"><span>Wysoki wynik SEO</span></h3>
                    <p>Bacon ipsum dolor amet tongue buffalo doner, pork strip steak chislic jowl boudin kevin venison meatloaf tri-tip corned beef burgdoggen kielbasa. Pork belly frankfurter pork loin brisket leberkas cupim flank. Burgdoggen landjaeger pig chicken pork chop filet mignon. Turducken ground round meatloaf, strip steak hamburger rump drumstick jowl capicola.</p>
                </div>

                <div class="benefits__type">
                    <h3 class="benefits__type__title"><span>Brak utraty jakości</span></h3>
                    <p class="benefits__type__description">Zmniejszenie rozmiaru zdjęć i grafik, kompresja danych oraz inne działania mające na celu poprawę prędkości strony bynajmniej nie muszą oznaczać straty na ich jakości. Różnica jakości zdjęć nie będzie zauważalna gołym okiem a twój serwis będzie wyglądać tak samo jak przed zmianami, natomiast użytkowanie go będzie o wiele wygodniejsze i przyjaźniejsze.</p>
                </div>
            </div>
            <h3 class="benefits__sub-title">Wejdź na szczyt <span class="purple-gradient">wyników Google</span></h3>
            <a href="wycena" class="benefits__button btn">Wycena pozycjonowania</a>
        </div>
    </section>
    <section class="container faq">
        <h2>Najczęściej zadawane <span><span class="purple-gradient">pytania</span></span></h2>
        <ol class="collapsible">
            <li class="collapsible__question__wrapper">
                <div class="collapsible__question">
                    <h4>Ile kosztuje optymalizcja?</h4>
                    <div class="collapsible__question__answer">
                        <p>Kwota ostateczna zależy od wielkości oraz aktualnego stanu serwisu. W przypadku prostych stron internetowych kwota graniczy w przedziałach <strong>200-400zł</strong>. Jeśli interesuje Cię ile kosztowałaby optymalizacja twojej witryny, wypełnij <a href="wycena">krótki brief</a> lub po prostu <a href="kontakt">napisz do nas</a>.</p>
                    </div>
                </div>
            </li>
            <li class="collapsible__question__wrapper">
                <div class="collapsible__question">
                    <h4>Ile czasu zajmuje optymalizacja strony?</h4>
                    <div class="collapsible__question__answer">
                        <p>Przeważnie zajmuje od jednego <strong>do kilku dni</strong> roboczych. Prace kończymy w momencie, gdy wszystkie z czterech audytów (szybkość strony, dostępność, najlepsze praktyki oraz SEO) osiągają <strong>wynik minimum 90</strong>. Jest to bardzo dobry wynik, który zadowala naszych klientów i w zupełności wystarczy. Poniżej przykładowy wynik naszych działań - strona na której aktualnie się znajdujesz.
                        </p>
                        <img src="<?php bloginfo('template_url'); ?>/img/lighthouse-score.png" alt="focusite lighthouse score">
                        <p>Wynik lighthouse dla strony focusite.pl</p>
                    </div>
                </div>
            </li>
            <li class="collapsible__question__wrapper">
                <div class="collapsible__question">
                    <h4>Jak mogę sprawdzić prędkość mojej strony?</h4>
                    <div class="collapsible__question__answer">
                        <p>Najprostszą metodą jest wpisanie adresu swojej strony w gotowe narzędzie online takie jak <a href="https://gtmetrix.com">GTmetrix</a> lub <a href="https://developers.google.com/speed/pagespeed/insights/?hl=pl">Google PageSpeed</a>. Jednakże, aby uzyskać dokładny wynik z podziałem na urządzenie dekstopowe i mobilne, korzystamy z rozszerzenia <strong>lighthouse</strong>.</p>
                    </div>
                </div>
            </li>
        </ol>
    </section>
    <section class="ending-section">
        <div class="info-box">
            <h2>Masz <span><span class="purple-gradient">pytania?</span></span></h2>
            <h5>Zobacz dział najczęsciej zadawanych pytań. <br>Lub po prostu odezwij się do nas ;)</h5>
            <a href="faq" title="faq" class="btn orange">FAQ</a><span class="or">lub</span><a href="kontakt" class="btn orange" title="kontakt">Skontaktuj się</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>