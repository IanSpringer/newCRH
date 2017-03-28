<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.0
 *
 * Website Header Template
 * Created by CMSMasters
 *
 */


$cmsmasters_option = medical_clinic_get_global_options();


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="cmsmasters_html">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<link href="<?php bloginfo('custom.css'); ?>" rel = "stylesheet">
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script src="https://use.fontawesome.com/14e08f241b.js"></script>
</head>
<body <?php body_class(); ?>>
<?php do_action('cmsmasters_before_body', $cmsmasters_option); ?>

<?php medical_clinic_get_header_search_form($cmsmasters_option); ?>

<!-- _________________________ Start Page _________________________ -->
<div id="page" class="<?php medical_clinic_get_page_classes($cmsmasters_option); ?>hfeed site">
<?php do_action('cmsmasters_before_page', $cmsmasters_option); ?>

<!-- _________________________ Start Main _________________________ -->
<div id="main">

<!-- _________________________ Start Header _________________________ -->
<header id="header">
	<?php
	get_template_part('theme-framework/template/header-top');

	get_template_part('theme-framework/template/header-mid');

	get_template_part('theme-framework/template/header-bot');
	?>
</header>
<!-- _________________________ Finish Header _________________________ -->


<!-- _________________________ Start Middle _________________________ -->
<div id="middle"<?php echo (is_404()) ? ' class="error_page"' : ''; ?>>
<?php
if (!is_404() && !is_home()) {
	medical_clinic_page_heading();
} else {
	echo "<div class=\"headline\">
		<div class=\"headline_outer cmsmasters_headline_disabled\"></div>
	</div>";
}


list($cmsmasters_layout, $cmsmasters_page_scheme) = medical_clinic_theme_page_layout_scheme();


echo '<div class="middle_inner' . (($cmsmasters_page_scheme != 'default') ? ' cmsmasters_color_scheme_' . $cmsmasters_page_scheme : '') . '">' . "\n" .
	'<div class="content_wrap ' . $cmsmasters_layout .
	((is_singular('project')) ? ' project_page' : '') .
	((is_singular('profile')) ? ' profile_page' : '') .
	'">' . "\n\n";

