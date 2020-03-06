<?php
/**The template for displaying the footer */
global $acorn_options;
?>
<div class="row-2 d-flex justify-content-center align-items-end fix-footer m-0 p-0">
    <div class="col d-flex justify-content-center align-items-center m-0 p-0">
        <?php if (! empty ($acorn_options['opt-social-network']['Telegram'])): ?>
        <a href="<?php echo $acorn_options ['opt-social-network']['Telegram'] ?>" target="_blank">
            <i class="fa fa-telegram aria-hidden="></i>
        </a>
        <?php endif; ?>
    </div>
    <div class="col d-flex justify-content-center align-items-center margin-facebook ml-4 mr-4 p-0">
        <?php if (! empty ($acorn_options['opt-social-network']['Facebook'])): ?>
        <a href="<?php echo $acorn_options ['opt-social-network']['Facebook'] ?>" target="_blank">
            <i class="fa fa-facebook aria-hidden="></i>
        </a>
        <?php endif; ?>
    </div>
    <div class="col d-flex justify-content-center align-items-center m-0 p-0">
        <?php if (! empty ($acorn_options['opt-social-network']['Instagram'])): ?>
        <a href="<?php echo $acorn_options ['opt-social-network']['Instagram'] ?>" target="_blank">
            <i class="fa fa-instagram aria-hidden="></i>
        </a>
        <?php endif; ?>
    </div>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>