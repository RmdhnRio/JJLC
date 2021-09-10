<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?> - Sehari Mengajar, Selamanya Menginspirasi"/>
<meta property="og:image" content="http://kelasinspirasisumedang.org/wp-content/uploads/2017/03/slide1.jpg"/>
<meta property="og:site_name" content="Kelas Inspirasi Sumedang"/>
<meta property="og:description" content="Kelas Inspirasi merupakan solusi bagi para profesional Indonesia yang ingin berkontribusi dengan mengajar di lingkungannya. Hal ini membuka pintu interaksi positif antara kaum profesional dengan sekolah tempat dia berpartisipasi. Partisipasi para profesional tersebut untuk mengambil cuti sehari dan berbagi pengalamannya bersama anak-anak SD, merupakan partisipasi berbasiskan individu, bukan institusi. Ini menunjukkan bahwa kepedulian dan kesadaran pribadi terhadap pendidikan masih tinggi."/>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap -->
    <link href="<?php  get_template_directory_uri(); ?>/wp-content/themes/kisumedang/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="<?php  get_template_directory_uri(); ?>/wp-content/themes/kisumedang/css/style.css?v=1" rel="stylesheet">    
    <link href="<?php  get_template_directory_uri(); ?>/wp-content/themes/kisumedang/css/book.css" rel="stylesheet">    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php 
$settings = pods('landing');
$logo = $settings->display( 'logo_web' );
    ?>  
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img alt="Brand" src="<?php echo $logo; ?>">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="main-navigation">
        
        	<?php 

 $menu_args = array(

  'menu'    => 'Menu',

  'theme_location' => 'Primary Menu',

  'depth'    => 4,

  'container'   => false,

  'menu_class'   => 'nav navbar-nav navbar-right',

  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

  'walker'    => new wp_bootstrap_navwalker()

 );

 wp_nav_menu($menu_args);

?>

        	
            
        </div>

    </div>
</nav>

