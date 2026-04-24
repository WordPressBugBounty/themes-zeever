<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Archive Hero Title', 'zeever' ),
	'categories' => array( 'zeever-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/achievement-agreement-arms-bump-business-cheer-up-1433619-pxhere.com_.webp","id":139,"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":"0.50","y":0.57},"minHeight":460,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"140px"}}}} -->
<div class="wp-block-cover" style="padding-bottom:140px;min-height:460px"><img class="wp-block-cover__image-background wp-image-139" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/achievement-agreement-arms-bump-business-cheer-up-1433619-pxhere.com_.webp" style="object-position:50% 57%" data-object-fit="cover" data-object-position="50% 57%"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"160px"},"blockGap":"10px"}},"layout":{"wideSize":"1170px","contentSize":"1170px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:160px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|gv-color-dark-text-primary"}}}},"textColor":"gv-color-dark-text-primary","fontSize":"heading-2"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"zeever-hero-separator","style":{"layout":{"selfStretch":"fixed","flexSize":"100px"}},"backgroundColor":"gv-color-dark-primary"} -->
<hr class="wp-block-separator has-text-color has-gv-color-dark-primary-color has-alpha-channel-opacity has-gv-color-dark-primary-background-color has-background zeever-hero-separator"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
