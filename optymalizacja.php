<?php

function optymalizacja($f){

    $Page_uri = $_SERVER['REQUEST_URI'];

    $Page_domain = 'https://focusite.pl';

    $Page_name = 'Focusite';

    $Page_schema_add = TRUE;

    $Page_schema_info = array(

        '@context' => 'http://schema.org',

        '@type' => 'LocalBusiness',

        address => array(

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

            $Page_title = 'Focusite - Tworzenie stron internetowych';

            $Page_description = 'W ofercie firmy Focusite z Buku mogą Państwo znaleźć profesjonalne tworzenie stron internetowych, sklepów oraz pozycjonowanie portali. Całodobowe wsparcie, nieszablonowe działanie i wieloletnie doświadczenie. Wejdź i dokonaj indywidualnej wyceny!';

        } break;

        case 'oferta': {

            $Page_title = 'Oferta - Poznaj naszą ofertę';

            $Page_description = 'Firma Focusite specjalizuje się w tworzeniu stron internetowych. Oferujemy wiele innych usług promujących twoją firmę w internecie takich jak sklepy internetowe czy pozycjonowanie serwisów.';

        } break;
        
        case '/faq': {

            $Page_title = 'FAQ - Sekcja pytań i odpowiedzi';

            $Page_description = 'Odpowiedzi na najczęściej zadawane pytania. Nie wiesz ile kosztuje strona? Co to pozycjonowanie, system CMS lub responsywność? Na te i wiele innych pytań znajdziesz u nas odpowiedź. Sprawdź co dla Ciebie przygotowaliśmy.';

        } break;

        case '/kontakt': {

            $Page_title = 'Kontakt - Skontaktuj się z nami';

            $Page_description = 'Zapraszamy do skontaktowania się z firmą Focusite. Masz pytania, chcesz skorzystać z naszych usług lub potrzebujesz porady? Daj nam znać, na pewno pomożemy.';

        } break;

        case '/wycena': {

            $Page_title = 'Focusite - darmowa wycena';

            $Page_description = 'Darmowa wycena. Sprawdź ile kosztuje realizacja twojego pomysłu. Wypełnij krótki brief a my odezwiemy się w ciągu doby z orientacyjnym kosztorysem. Nie kupuj kota w worku!';

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

?>