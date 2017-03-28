<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.6
 * 
 * WooCommerce Template Functions
 * Created by CMSMasters
 * 
 */


/* Dynamic Cart */
function medical_clinic_woocommerce_cart_dropdown($cmsmasters_option) {
	global $woocommerce;
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	
	if ($cmsmasters_option['medical-clinic' . '_header_styles'] != 'c_nav') {
		echo '<div class="cmsmasters_dynamic_cart_wrap">' . 
			'<div class="cmsmasters_dynamic_cart' . ($cart_count > 0 ? ' cmsmasters_active' : '') . '">' .  
				'<a href="' . esc_url($woocommerce->cart->get_cart_url()) . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"></a>' . 
				'<div class="widget_shopping_cart_content"></div>' . 
			'</div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_logo', 'medical_clinic_woocommerce_cart_dropdown');


/* Add to Cart Button */
function medical_clinic_woocommerce_add_to_cart_button() {
	global $woocommerce, 
		$product;
	
	
	if ( 
		$product->is_purchasable() && 
		$product->product_type == 'simple' && 
		$product->is_in_stock() 
	) {
		echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->id) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button cmsmasters-icon-bag-1 add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="' . esc_attr__('Add to Cart', 'medical-clinic') . '">' . 
		'</a>' . 
		'<a href="' . esc_url($woocommerce->cart->get_cart_url()) . '" class="button cmsmasters-icon-check-1 added_to_cart wc-forward" title="' . esc_attr__('View Cart', 'medical-clinic') . '">' . 
		'</a>';
	}
	
	
	echo '<a href="' . esc_url(get_permalink($product->id)) . '" data-product_id="' . esc_attr($product->id) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button cmsmasters-icon-link-3 cmsmasters_details_button">' . 
	'</a>';
}


/* Woocommerce Rating */
function medical_clinic_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'medical-clinic'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'medical-clinic') . "</span>
</div>
";
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}


/* Price Format */
function medical_clinic_woocommerce_price_format($format, $currency_pos) {
	$format = '%2$s<span>%1$s</span>';

	switch ( $currency_pos ) {
		case 'left' :
			$format = '<span>%1$s</span>%2$s';
		break;
		case 'right' :
			$format = '%2$s<span>%1$s</span>';
		break;
		case 'left_space' :
			$format = '<span>%1$s&nbsp;</span>%2$s';
		break;
		case 'right_space' :
			$format = '%2$s<span>&nbsp;%1$s</span>';
		break;
	}
	
	return $format;
}
 
add_action('woocommerce_price_format', 'medical_clinic_woocommerce_price_format', 1, 2);

