<div id="wdsi-slide_in" style="display:none;" class="wdsi-slide <?php echo esc_attr($full_width); ?> wdsi-slide-<?php echo esc_attr($position); ?> wdsi-slide-<?php echo esc_attr($theme); ?> wdsi-slide-<?php echo esc_attr($theme); ?>-<?php echo esc_attr($variation); ?> wdsi-slide-<?php echo esc_attr($theme); ?>-<?php echo esc_attr($scheme); ?>" data-slidein-start="<?php echo esc_attr($selector ? $selector : $percentage); ?>"  data-slidein-end="100%" data-slidein-after="<?php echo esc_attr($timeout); ?>" data-slidein-timeout="<?php echo esc_attr($expire_timeout); ?>" data-slidein-id="<?php echo (int)$message->ID; ?>" >

	<div class="wdsi-slide-wrap" <?php echo $width; ?> >
		<?php if ("rounded" != $theme) include dirname(__FILE__) . '/box_output-services.php'; ?>
		<div class="wdsi-slide-content">
			<h1 class="wdsi-slide-title wdsi-slide-bold wdsi-slide-italic"><?php echo esc_html(apply_filters('wdsi_title', $message->post_title));?></h1>
			<?php 
			if ('related' == $content_type) {
				include dirname(__FILE__) . '/box_output-content-related_posts.php';
			} else if ('mailchimp' == $content_type) {
				include dirname(__FILE__) . '/box_output-content-mailchimp.php';
			} else if ('widgets' == $content_type) {
				include dirname(__FILE__) . '/box_output-content-widgets.php';
			} else {
				echo wp_kses_post(apply_filters('wdsi_content', $message->post_content));
			}
		?>
		</div>
		<?php if ("rounded" == $theme) include dirname(__FILE__) . '/box_output-services.php'; ?>
	</div>
</div>
