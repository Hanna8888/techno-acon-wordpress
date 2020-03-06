<?php
/** The header for our theme */
// global $acorn_options;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-around h-100 w-100 m-0 p-0">
            <div class="col-12 d-flex justify-content-center align-items-center h-100 w-100">
                <div class="row d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="col-xl-5 col-md-4 col-xs-3 d-flex justify-content-end align-items-center w-100 mt-5 about-item-header">
                        <a class="menu-item-header" href="http://technoacorn.com/">
                            <div class="bounce about-menu"><span class="letter">h</span><span class="letter">o</span><span class="letter">M</span><span class="letter">e</span>
                            </div>
                        </a>
                        <a class="menu-item-header" href="http://technoacorn.com/about/">
                            <span class="txt-rotate" data-period="2000" data-rotate='[ "ABOUT", "ABOUT"]'>
                            </span>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-xs-6 d-flex justify-content-center align-items-center mt-3 logotip-home">
                        <a href="http://technoacorn.com/"><img class="logo-home rot" src="<?php echo get_template_directory_uri()?>/assets/img/img/Logo.png" alt="img"></a>
                    </div>
                    <div class="col-xl-5 col-md-4 col-xs-3 d-flex justify-content-start align-items-center mt-5 folio-item-header">
                        <a class="menu-item-header" href="http://technoacorn.com/folio/">
                            <div class="bounce about-menu"><span class="letter">f</span><span class="letter">o</span><span class="letter">L</span><span class="letter">i</span><span class="letter">o</span>
                            </div>
                            <span class="txt-rotate" data-period="2000" data-rotate='["FOLIO", "FOLIO"]'>
                            </span>
                        </a>
                    </div>
                </div>