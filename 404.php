<?php get_header(); ?>
<main>
    <img src="<?php bloginfo('template_url'); ?>/img/wave-top.png" class="wave-top" alt="Focusite - strony www, sklepy internetowe, pozycjonowanie">
    <section id="section1">
        <div class="container">
            <div class="lg-6 sm-12">
                <h1><span><span class="purple-gradient">404</span></span></h1>
            </div>
            <div class="lg-6 sm-12">
                <h3>Strony nie odnaleziono :(</h3>
                <h4>Strona, której szukasz nie istnieje.</h4>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">Strona główna</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>