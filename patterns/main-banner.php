<?php
 /**
  * Title: Main Banner
  * Slug: starter-fse/main-banner
  * Categories: starter-fse
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"0","bottom":"0"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-secondary-background-color has-background" style="padding-top:0;padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"55px","right":"0px","bottom":"55px","left":"0px"}}},"layout":{"inherit":false,"wideSize":"1500px"}} -->
<div class="wp-block-group alignwide" style="padding-top:55px;padding-right:0px;padding-bottom:55px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground"} -->
<h3 class="wp-block-heading has-text-align-left has-foreground-color has-text-color" style="line-height:1.5"><?php echo esc_html__( 'We Make a Difference', 'starter-fse' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|50"}}},"textColor":"foreground","fontSize":"extra-large"} -->
<h2 class="wp-block-heading has-text-align-left has-foreground-color has-text-color has-extra-large-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;line-height:1.3"><?php echo esc_html__( 'We Make WordPress Block Themes', 'starter-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"foreground","className":" animated animated-fadeInUp","fontSize":"normal"} -->
<p class="has-text-align-left animated animated-fadeInUp has-foreground-color has-text-color has-normal-font-size"><?php echo esc_html__( 'We design an elegant set of WordPress Themes &amp; Plugins', 'starter-fse' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","textColor":"foreground","className":" animated animated-fadeInUp","fontSize":"normal"} -->
<p class="has-text-align-left animated animated-fadeInUp has-foreground-color has-text-color has-normal-font-size"><?php echo esc_html__( 'that help you create the website you always wanted!', 'starter-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px","bottom":"0px"},"blockGap":"20px"}}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"textAlign":"left","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-left wp-element-button" href="#"><?php echo esc_html__( 'Get Started', 'starter-fse' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textAlign":"center","textColor":"secondary","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-color has-text-color has-text-align-center wp-element-button" href="#"><?php echo esc_html__( 'About Us', 'starter-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"align":"center","id":136,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.png" alt="" class="wp-image-136" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->