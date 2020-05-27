<?php

function optymalizacja($f){
    $Page_uri = $_SERVER['REQUEST_URI'];
    $Page_domain = 'https://focusite.pl';
    $Page_name = 'Focusite';
    $Page_schema_add = TRUE;
    $Page_schema_info = array(
        '@context' => 'http://schema.org',
        '@type' => 'LocalBusiness',
        'address' => array(
            '@type' => 'PostalAddress',
            'addressLocality' => 'Buk',
            'streetAddress' => 'Dworcowa 1',
            'postalCode' => '64-320',
            'addressRegion' => 'Wielkopolskie'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '52.3568263',
            'longitude' => '16.5167691'
        ),
        'name' => 'Focusite',
        'telephone' => '+48 732 009 546',
        'email' => 'office@focusite.pl',
        'url' => 'https://focusite.pl/',
        'image' => 'https://focusite.pl/wp-content/themes/focusite/img/computers.png',
        'openingHours' => 'Mo-Sa 09:00-17:00',
        'currenciesAccepted' => 'PLN',
        'description' => 'Firma Focusite zajmuje się profesjonalnym tworzeniem stron internetowych, sklepów oraz pozycjonowaniem portali w wyszukiwarce Google.'
    );

    # Zarządzanie znacznikami meta
    switch( $Page_uri ) {
        case '/': {
            $Page_title = 'Focusite: Strony internetowe, sklepy online oraz dedykowane aplikacje dla firm';
            $Page_description = 'W ofercie firmy Focusite z Buku mogą Państwo znaleźć profesjonalne tworzenie stron internetowych, sklepów, aplikacji oraz pozycjonowanie portali. Całodobowe wsparcie, nieszablonowe działanie i wieloletnie doświadczenie, wejdź i dokonaj indywidualnej wyceny.';
        } break;

        case '/oferta/': {
            $Page_title = 'Oferta Focusite: Zapoznaj się z szerokim wachlarzem naszych usług';
            $Page_description = 'Firma Focusite specjalizuje się w tworzeniu stron internetowych, sklepów e-commerce i aplikacji webowych. Ponadto oferujemy wiele innych usług promujących twoją firmę w internecie takich jak pozycjonowanie, copywriting lub optymalizacja stron.';
        } break;

        case '/oferta/strony-internetowe/': {
            $Page_title = 'Strony internetowe: Zrób dobre pierwsze wrażenie i zdobądź przewagę nad konkurecją';
            $Page_description = 'Tworzymy i projektujemy profesjonalne strony internetowe, które osiągają wysokie rankingi w wyszukiwarkach. Unikalny design, szybkość działania oraz łatwy i intuicyjny system administracji. Rozpocznij nowy projekt z nami już teraz.';
        } break;

        case '/oferta/sklepy-internetowe/': {
            $Page_title = 'Sklepy internetowe: Tworzenie oraz projektowanie e-commerce';
            $Page_description = 'Zaprojektujemy i stworzymy dla Ciebie prosty w obsłudze sklep online, który ułatwi Twoim klientom zakupy w internecie. Specjalizujemy się w tworzeniu sklepów opartych o system WooCommerce. Rozwiązanie idealne dla małych i średnich sklepów internetowych';
        } break;

        case '/oferta/aplikacje-webowe/': {
            $Page_title = 'Aplikacje webowe: Dedykowane rozwiązania dla małych firm';
            $Page_description = 'Napiszemy dla Ciebie aplikacje mobilną, która pomoże Ci w automatyzacji wybranych procesów Twojej firmy. Napisz nam jaki masz pomysł na swoją aplikację a my ją dla ciebie stworzymy.';
        } break;

        case '/oferta/pozycjonowanie/': {
            $Page_title = 'Pozycjonowanie SEO: Zwiększ swoją pozycję w wyszukiwarce Google';
            $Page_description = 'Firma Focusite zajmuje się szeroko rozumianym pozycjonowaniem SEO. Poprawiamy widoczność stron internetowych aby osiągały jak najwyższe pozycję w wynikach Google.';
        } break;

        case '/oferta/copywriting/': {
            $Page_title = 'Copywriting: Treści do strony internetowej, bloga lub sklepu e-commerce';
            $Page_description = 'Unikalne i wartościowe Teksty SEO do twojej witryny w rozsądnej cenie. Oryginalne teksty, regularne dodawanie treści do artykułów, postów na facebooku i nie tylko.';
        } break;

        case '/oferta/optymalizacja/': {
            $Page_title = 'Optymalizacja: Przyśpiesz swoją stronę lub sklep internetowy';
            $Page_description = 'Prędkość strony internetowej nie tylko ułatwia dostęp użytkownikowi ale również jest czynnikiem SEO, który bezpośrednio wpływa na pozycję w wyszukiwarce. Wykonamy dla Ciebie pełną optymalizację strony, w która znacząco przyśpieszy twój serwis i polepszy jego użytkowanie.';
        } break;

        case '/faq/': {
            $Page_title = 'Focusite FAQ - sekcja najczęściej zadawanych pytań i odpowiedzi';
            $Page_description = 'Odpowiedzi na najczęściej zadawane pytania. Jesteśmy transparentni i odpowiadamy na każde pytania bez żadnych tajemnic. Ile kosztuje strona? Co to jest pozycjonowanie, system CMS lub responsywność? Na te i wiele innych pytań znajdziesz u nas odpowiedź. Sprawdź co dla Ciebie przygotowaliśmy.';
        } break;

        case '/kontakt/': {
            $Page_title = 'Kontakt z Focusite - zapraszamy do skontaktowania się z nami';
            $Page_description = 'Zapraszamy do skontaktowania się z firmą Focusite. Masz pytania, chcesz skorzystać z naszych usług lub potrzebujesz porady? Daj nam znać, na pewno pomożemy.';
        } break;

        case '/wycena/': {
            $Page_title = 'Darmowa wycena - sprawdź ile kosztują nasze usługi. Nie kupuj kota w worku.';
            $Page_description = 'Dowiedz się ile kosztuje realizacja twojego pomysłu dzięki indywidualnej wycenie. Wypełnij krótki brief a my odezwiemy się w ciągu doby z orientacyjnym kosztorysem.';
        } break;

        default: {
            preg_match('#<title>(.*)<\/title>#Usmi',$f,$Base_title);
            $Page_title = trim(str_replace('&raquo;','',trim($Base_title[1])));
            $Page_description = '';
        } break;
    }



    # Schema FAQ dla podstrony https://focusite.pl/oferta/
    if( strstr($Page_uri,'/oferta/') && strstr($f,'<section id="section3">') ){
        preg_match('#<section id="section3">(.*)<\/section>#Usmi',$f,$Section_3_content);
        # Uzupełnienie znaczników przy odpowiednich sekcjach
        $Oferta_section_faq = preg_replace('#<section id="section3">(.*)about-us">(.*)<h2>(.*)<\/h2>(.*)<\/ul>(.*)<\/section>#Usmi','<section id="section3" itemscope itemtype="https://schema.org/FAQPage">$1about-us" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">$2<h2 itemprop="name">$3</h2><div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">$4</ul></div></div>$5</section>',$Section_3_content[0]);
        # Podmiana
        $f = str_replace($Section_3_content[0],$Oferta_section_faq,$f);
    }

    # Schema FAQ dla podstrony https://focusite.pl/faq/
    if( strstr($Page_uri,'/faq/') && strstr($f,'id="faq"') ){
        preg_match('#<section class="section2(.*)" id="faq">(.*)<\/section>#Usmi',$f,$Section_FAQ_content);
        $FAQ_section = str_replace('id="faq">','id="faq" itemscope itemtype="https://schema.org/FAQPage">',$Section_FAQ_content[0]);
        $FAQ_section = str_replace('wrapper">','wrapper" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">',$FAQ_section);
        $FAQ_section = str_replace('<h4>','<h4 itemprop="name">',$FAQ_section);
        $FAQ_section = str_replace('answer">','answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">',$FAQ_section);
        $FAQ_section = preg_replace('#<\/div>(.*)<\/li>#Usmi','</div>$1 </div></li>',$FAQ_section);
        $f = str_replace($Section_FAQ_content[0],$FAQ_section,$f); 
    }

    # No index for specific pages(404 page, polityka prywatnosci)
    if( strstr($f,'class="error404') || $Page_uri == '/polityka-prywatnosci/'){
        if( strstr($f,'robots') && !strstr($f,'noindex') ){
            $f = preg_replace('#<meta[ \t]+name=(\'|")robots(\'|")[ \t]+content=(\'|")(.*)(\'|")[ \t]*[\/]?>#Usmi','<meta name="robots" content="noindex,follow" />',$f);
        } else {
            $f = str_replace('<head>','<head>'."\n".'<meta name="robots" content="noindex,follow" />',$f);
        }
    }


    /* === FUNKCJE === */

    # Aktualizacja description stron
    if( isset($Page_description) ){
        # OG description
        if( !strstr($f,'og:description') ){
            $f = str_replace('</title>','</title>'."\n".'<meta property="og:description" content="'.trim($Page_description).'" />',$f);
        } else {
            $f = preg_replace('#<meta[ \t]+property=(\'|")og:description(\'|")[ \t]+content=(\'|")(.*)(\'|")[ \t]*[\/]?>#Usmi','<meta property="og:description" content="'.trim($Page_description).'" />',$f);
        }
        # Base description
        if( !stristr($f,'name="description"') && !stristr($f,'name=\'description\'') ){
            $f = str_replace('</title>','</title>'."\n".'<meta name="description" content="'.trim($Page_description).'" />',$f);
        } else {
            $f = preg_replace('#<meta[ \t]+name=(\'|")description(\'|")[ \t]+content=(\'|")(.*)(\'|")[ \t]*[\/]?>#Usmi','',$f);
        }
    }

    # Aktualizacja tytułów stron
    if( isset($Page_title) && !empty($Page_name) ){
        #Base title
        $f = preg_replace('#<title>(.*)<\/title>#Usmi','<title>'.trim($Page_title).' - '.$Page_name.'</title>',$f);
        # OG Title
        if( !strstr($f,'og:title') ){
            $f = str_replace('</title>','</title>'."\n".'<meta property="og:title" content="'.trim($Page_title).' - '.$Page_name.'" />',$f);
        } else {
            $f = preg_replace('#<meta[ \t]+property=(\'|")og:title(\'|")[ \t]+content=(\'|")(.*)(\'|")[ \t]*[\/]?>#Usmi','<meta property="og:title" content="'.trim($Page_title).' - '.$Page_name.'" />',$f);
        }
    }

    # Schema
    if( $Page_schema_add==TRUE ){
        $f = str_replace('</head>','<script type="application/ld+json">'.json_encode($Page_schema_info).'</script>'."\n".'</head>',$f);
    }

    return $f;
}

ob_start('optymalizacja');
