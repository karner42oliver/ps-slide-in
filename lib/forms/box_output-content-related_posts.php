<?php
$post_id = is_singular() ? get_the_ID() : false;
$posts = wdsi_get_related_posts($post_id, $related_taxonomy, $related_posts_count);
$show = apply_filters('wdsi-services-related_posts', !empty($posts), $post_id);
if ($show) {
	$out = '';
	foreach ($posts as $related) {
		$image = $related_has_thumbnails
			? wdsi_get_related_post_thumbnail($related->ID)
			: false
		;
		$title = isset($related->post_title) ? $related->post_title : '';
		$permalink = get_permalink($related->ID);
		$out .= '<div class="wdsi-slide-col ' . ($related_has_thumbnails ? 'wdsi-slide-col-thumb' : '') . '">' .
			($related_has_thumbnails && $image ? '<img class="wdsi-slide-thumb" src="' . esc_url($image) . '" />' : '') .
			'<h2><a href="' . esc_url($permalink) . '">' . esc_html($title) . '</a></h2>' .
			'<p>' . wp_kses_post(wdsi_get_related_post_excerpt($related)) . '</p>' .
		'</div>';
	}
	echo '<div class="wdsi-slide-columns">' . $out . '</div>';
}