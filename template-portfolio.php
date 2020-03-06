<?php 
/*
Template name: Portfolio Template
Template Post Type: post, page, product, работы
*/ 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(page-id-152); ?>>
    <div class="container-fluid">
        <div class="owl-container d-flex justify-content-center align-items-center">
            <div class="owl-carousel d-flex justify-content-center align-items-center m-0 p-0 w-100 h-100">
                <div class="d-flex justify-content-center align-items-center w-100 h-100 m-0 p-0 img-fone-folio">
                    <div class="row d-flex justify-content-center align-items-center w-100">
                        <div class="col-5 col-md-2 d-flex justify-content-end margin-menu go-item">
                            <a class="menu-item" href="http://diamant-dentlab.com//">
                                <span class="txt-rotate" data-period="2000" data-rotate='["GO TO SITE", "VIEW SITE"]'>
                                </span>
                            </a>
                        </div>
                        <div class="col-2 d-md-flex d-sm-none d-none justify-content-center align-items-center margin-menu home-item">
                            <a class="menu-item" href="http://technoacorn.com//">HOME</a>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center mt-3 logotip">
                            <a href="http://technoacorn.com/"><img class="logo-folio" src="<?php echo get_template_directory_uri()?>/assets/img/img/giflogo.gif" alt="img"></a>
                        </div>
                        <div class="col-2 d-md-flex d-sm-none d-none justify-content-center align-items-center margin-menu about-item">
                            <a class="menu-item" href="http://technoacorn.com/about/">ABOUT</a>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-start align-items-center margin-menu git-item">
                            <a class="menu-item" href="#">
                                <span class="txt-rotate" data-period="2000" data-rotate='[ "GITHUB", "VIEW GITHUB"]'></span>
                            </a>
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center margin-one-work">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/fligen.png" alt="img">
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center mt-3">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/contacts.png" alt="img">
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center mt-3">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/gallery.png" alt="img">
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center mt-3">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/cart.png" alt="img">
                        </div>
                        <div class="col-5 d-flex justify-content-center align-items-center mt-3 mb-5">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/dent-mob.png" alt="img">
                        </div>
                        <div class="col-5 d-flex justify-content-center align-items-center mt-3 mb-5">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/dent-menu-mob.png" alt="img">
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center w-100 mb-5 p-0 social-icon">
                            <?php if (! empty ($acorn_options['opt-social-network']['Facebook'])): ?>
                            <a href="<?php echo $acorn_options ['opt-social-network']['Facebook'] ?>" target="_blank">
                                <i class="fa fa-facebook aria-hidden="></i>
                            </a>
                            <?php endif; ?>
                            <?php if (! empty ($acorn_options['opt-social-network']['Instagram'])): ?>
                            <a href="<?php echo $acorn_options ['opt-social-network']['Instagram'] ?>" target="_blank">
                                <i class="fa fa-instagram aria-hidden= pr-5 pl-5"></i>
                            </a>
                            <?php endif; ?>
                            <?php if (! empty ($acorn_options['opt-social-network']['Telegram'])): ?>
                            <a href="<?php echo $acorn_options ['opt-social-network']['Telegram'] ?>" target="_blank">
                                <i class="fa fa-telegram aria-hidden="></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center w-100 h-100 m-0 p-0 img-fone-folio">
                    <div class="row d-flex justify-content-center align-items-center w-100 ">
                        <div class="col-5 col-md-2 d-flex justify-content-end margin-menu go-item">
                            <a class="menu-item" href="http://www.olivas.webtm.ru/">
                                <span class="txt-rotate" data-period="2000" data-rotate='["GO TO SITE", "VIEW SITE"]'>
                                </span>
                            </a>
                        </div>
                        <div class="col-2 d-md-flex d-sm-none d-none justify-content-center align-items-center margin-menu home-item">
                            <a class="menu-item" href="http://technoacorn.com//">HOME</a>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center mt-3 logotip">
                            <a href="http://technoacorn.com/"><img class="logo-folio" src="<?php echo get_template_directory_uri()?>/assets/img/img/giflogo.gif" alt="img"></a>
                        </div>
                        <div class="col-2 d-md-flex d-sm-none d-none justify-content-center align-items-center margin-menu about-item">
                            <a class="menu-item" href="http://technoacorn.com/about/">ABOUT</a>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-start align-items-center margin-menu git-item">
                            <a class="menu-item" href="#">
                                <span class="txt-rotate" data-period="2000" data-rotate='[ "GITHUB", "VIEW GITHUB"]'></span>
                            </a>
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center margin-one-work">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/rest-home.png" alt="img">
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center mt-3">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/rest-about.png" alt="img">
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center mt-3">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/rest-contact.png" alt="img">
                        </div>
                        <div class="col-10 d-flex justify-content-center align-items-center mt-3 mb-5">
                            <img class="img-work img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/img/rest-blog.png" alt="img">
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center w-100 mb-5 p-0 social-icon">
                            <?php if (! empty ($acorn_options['opt-social-network']['Facebook'])): ?>
                            <a href="<?php echo $acorn_options ['opt-social-network']['Facebook'] ?>" target="_blank">
                                <i class="fa fa-facebook aria-hidden="></i>
                            </a>
                            <?php endif; ?>
                            <?php if (! empty ($acorn_options['opt-social-network']['Instagram'])): ?>
                            <a href="<?php echo $acorn_options ['opt-social-network']['Instagram'] ?>" target="_blank">
                                <i class="fa fa-instagram aria-hidden= pr-5 pl-5"></i>
                            </a>
                            <?php endif; ?>
                            <?php if (! empty ($acorn_options['opt-social-network']['Telegram'])): ?>
                            <a href="<?php echo $acorn_options ['opt-social-network']['Telegram'] ?>" target="_blank">
                                <i class="fa fa-telegram aria-hidden="></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>