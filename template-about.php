<?php 
/**Template name: About me Template*/  
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(page-id-52); ?>>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center w-100 h-100 m-0 p-0 box">
            <div class='bulb-wire'>
                <div class='fa fa-lightbulb-o'></div>
                <div class='bulb-glow'></div>
            </div>
            <div class="col-6 d-flex order-1 justify-content-start align-items-center w-100 item-home-aboutme">
                <a href="http://technoacorn.com/">
                    <div class="bounce"><span class="letter">H</span><span class="letter letter-3o">O</span><span class="letter">M</span><span class="letter">E</span>
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end order-2 align-items-center w-100 item-folio-aboutme">
                <a href="http://technoacorn.com/folio/">
                    <div class="bounce"><span class="letter">F</span><span class="letter letter-o">O</span><span class="letter">L</span><span class="letter">I</span><span class="letter letter-2o">O</span>
                    </div>
                </a>
            </div>
            <div class="col-12 d-flex d-sm-none justify-content-center align-items-center w-100 h-100 pyramid-md">
                <div class="cube-wrap">
                    <div class="cube">
                        <div class="front"></div>
                        <div class="back"></div>
                        <div class="top"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                </div>
                <br />
                <div class="pyramid">
                    <div class="pyramid-x-y">
                        <div class="pyramid-ston front"></div>
                        <div class="pyramid-ston back"></div>
                        <div class="pyramid-ston left"></div>
                        <div class="pyramid-ston right"></div>
                        <div class="bottom"></div>
                        <div class="shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 d-flex order-lg-4 order-sm-4 order-xl-3 justify-content-center align-items-center w-100 container-about-text m-0 p-0">
                <div class="about-me">
                    <h1 class="about-title">About me</h1>
                    <p class="about-text">Hi! My name is Anna. I work in the web studio Techno Acorn.</p>
                    <p class="about-text">I create digital products with knowledge and passion (turnkey sites, online stores, blogs, personal and corporate sites). Cross-platform development for all modern browsers, as well as responsive layout for mobile devices and tablets. </p>
                    <p class="about-text">I use the following tools in work: HTML5, CSS, jQuery, Bootstrap, Node.js, PHP7 (5.4; 5.6.7.1), JavaScript, Sublime Text, Wordpress, MySQL, Adobe Photoshop, Adobe Illustrator.</p>
                    <p class="contact-text">email: alexanet855@gmail.com<br>tel: +80980235485</p>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 d-none d-sm-flex order-sm-3 order-xl-4 justify-content-center align-items-center w-100 pyramid-lg m-0 p-0">
                <section id='pyramid'>
                    <figure></figure>
                    <figure></figure>
                    <figure></figure>
                    <figure></figure>
                </section>
            </div>
            <div class="col d-flex justify-content-center align-items-center order-5 w-100 height-footer-about m-0 p-0">
                <?php if (! empty ($acorn_options['opt-social-network']['Facebook'])): ?>
                <a href="<?php echo $acorn_options ['opt-social-network']['Facebook'] ?>" target="_blank">
                    <i class="fa fa-facebook aria-hidden="></i>
                </a>
                <?php endif; ?>
                <?php if (! empty ($acorn_options['opt-social-network']['Instagram'])): ?>
                <a href="<?php echo $acorn_options ['opt-social-network']['Instagram'] ?>" target="_blank">
                    <i class="fa fa-instagram aria-hidden= pr-3 pl-3"></i>
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
</body>

</html>