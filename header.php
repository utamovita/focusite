<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136824612-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136824612-1');
    </script>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LchaOQZAAAAAJfHF0dVYc1Nk54B-KEtRiWghDnv"></script>
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="darkness"></div>
        <nav>
            <div class="container">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" title="logo link">
                    Logo
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 451 109">
                        <linearGradient id="svg-logo" gradientUnits="userSpaceOnUse" x1="7.7168" y1="52.701" x2="445.6709" y2="52.701">
                            <stop offset="0" stop-color="#7374b6" />
                            <stop offset="1" stop-color="#333592" />
                        </linearGradient>
                        <path d="M16.1 40.7h-5.3c-2.1 0-3.2-1.1-3.2-3.2v-1.1c0-2.1 1.1-3.3 3.2-3.3h5.3v-3c0-20.9 15.7-24.5 22.2-24.5h1.4C41.9 5.7 43 6.9 43 9v1.6c0 2.2-1.2 3-3.6 3.2-5.7.3-14.3 1.8-14.3 16.6v2.9h56.5c2.1 0-6.3 3.2-6.3 5.3 0 2.1-8.5 2.2-10.6 2.2H25.1v54.9c0 2.1-1.2 3.3-3.3 3.3h-2.5c-2.1 0-3.2-1.2-3.2-3.3v-55zm63.7-7.5c18.6 0 33.6 13.9 33.6 32.8 0 19.2-15.1 33.7-33.5 33.7-18.6 0-33.7-14.4-33.7-33.7 0-18.8 15.1-32.8 33.6-32.8zm0 58.8c13.5 0 24.7-11.1 24.7-25.9 0-14.4-11.1-25.3-24.7-25.3C66.2 40.7 55 51.6 55 66c0 14.8 11.2 26 24.8 26zm77.7-59c10.9 0 18 4.7 21.1 7.2 1.5 1.1 1.6 2.7.4 4.3l-.9 1.4c-1.1 1.8-2.5 1.8-4.3.6-2.8-2.2-8.4-5.8-16.1-5.8-13.9 0-24.8 10.5-24.8 25.7 0 15.1 10.9 25.6 24.9 25.6 8.9 0 14.9-4.2 18-6.7 1.6-1.3 3-1 4.2.8l.9 1.3c1 1.6.6 3-.8 4.3-3.3 2.7-10.9 8.1-22.7 8.1-19 0-33.4-13.5-33.4-33.3.1-19.7 14.7-33.5 33.5-33.5zm37.5 4.7c0-2 1-3.2 3-3.2h2.4c2 0 3.2 1.1 3.2 3.2v35.1c0 10 1.5 18.9 13.8 18.9 14.6 0 23.5-12.8 23.5-26.6V37.7c0-2 1.1-3.2 3.2-3.2h2.4c2 0 3 1.1 3 3.2V95c0 2-1 3.2-3 3.2h-2.3c-2 0-3-1.1-3-3.2v-7.3c0-2.5.4-4.6.4-4.6h-.3c-2.4 6.2-11 16.6-25.1 16.6-15.1 0-21.3-8.1-21.3-24.7V37.7zM265.2 88l1-1.3c1.1-1.5 2.5-1.6 4.3-.5 2.8 2.2 8.6 5.8 16.8 5.8 7.1 0 12.9-3.5 12.9-10.2 0-14.3-34-10-34-31 0-11.8 10-17.8 21.6-17.8 9.1 0 14.8 3.3 17.5 5.2 1.6 1 1.9 2.5.9 4.2l-.9 1.4c-1 1.8-2.5 1.9-4.3.9-2.4-1.6-7-4-13.7-4-6.7 0-12.5 2.9-12.5 9.9 0 14.7 33.9 10 33.9 31.3 0 10.5-8.9 18-21.5 18-11.1 0-18.3-4.7-21.5-7.3-1.5-1.4-1.6-2.9-.5-4.6zm58.2-71.1v-4.6c0-2 1-3.2 3-3.2h3.2c2 0 3 1.1 3 3.2v4.6c0 2-1 3-3 3h-3.2c-2 .1-3-.9-3-3zm.3 20.8c0-2 1.1-3.2 3.2-3.2h2.4c2 0 3 1.1 3 3.2V95c0 2-1 3.2-3 3.2h-2.4c-2 0-3.2-1.1-3.2-3.2V37.7zm31 2.9h-5.5c-2.1 0-3.1-1-3.1-3.1v-1c0-2.1 1-3.3 3.1-3.3h5.6V17.8c0-2.1 1.2-3.3 3.3-3.3h2.3c2.1 0 3.1 1.2 3.1 3.3v15.4l55.6-.2c2.1 0-7.3 1.7-7.3 3.8l-1.9 1.6c0 2.1-1.6 2.2-3.7 2.2h-42.6v32.8c0 15.1 9.2 16.9 14.3 17.2 2.6.3 3.5 1 3.5 3.3v1.7c0 2.1-1 3.1-3.6 3.1-14.3 0-23-8.7-23-24.1v-34zm64.4-7.6c17 0 26.6 12.3 26.6 30.4 0 1.8-1.4 3.2-3.3 3.2h-45.8C397 82.7 408.1 92 421.2 92c8 0 13.8-3.5 16.7-5.8 1.8-1.1 3.2-.9 4.2.8l1 1.5c.9 1.5.6 3-.9 4.2-3.4 2.5-11 7.1-21.3 7.1-19 0-33.3-13.7-33.3-33.3.1-21 14.3-33.5 31.5-33.5zm17.8 27.1c-.5-13.4-8.6-20-18.1-20-10.6 0-19.9 7.1-21.9 20h40z" fill="url(#svg-logo)" />
                    </svg>
                </a>
                <div class="hamburger__box">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>
        </nav>
    </header>