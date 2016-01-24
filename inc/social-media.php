<div class="socialIcons">
    <?php if (get_theme_mod('phone')): ?>
        <a class="phoneNumber" href="tel:<?php echo get_theme_mod('phone'); ?>"><i class="fa fa-phone"></i><?php echo get_theme_mod('phone'); ?></a>
    <?php endif; ?>
    <?php if (get_theme_mod('facebook')): ?>
        <a href="<?php echo get_theme_mod('facebook'); ?>"><i class="fa fa-facebook"></i></a>
    <?php else: endif; ?>
    <?php if (get_theme_mod('twitter')): ?>
        <a href="<?php echo get_theme_mod('twitter'); ?>"><i class="fa fa-twitter"></i></a>
    <?php endif; ?>
    <?php if (get_theme_mod('linkedin')): ?>
        <a href="<?php echo get_theme_mod('linkedin'); ?>"><i class="fa fa-linkedin"></i></a>
    <?php endif; ?>
    <?php if (get_theme_mod('google')): ?>
        <a href="<?php echo get_theme_mod('google'); ?>"><i class="fa fa-google"></i></a>
    <?php endif; ?>
    <?php if (get_theme_mod('pinterest')): ?>
        <a href="<?php echo get_theme_mod('pinterest'); ?>"><i class="fa fa-pinterest"></i></a>
    <?php endif; ?>
    <?php if (get_theme_mod('instagram')): ?>
        <a href="<?php echo get_theme_mod('instagram'); ?>"><i class="fa fa-instagram"></i></a>
    <?php endif; ?>
</div>