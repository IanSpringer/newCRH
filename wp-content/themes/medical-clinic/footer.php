<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.6
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = medical_clinic_get_global_options();
?>


		</div>
	</div>
</div>
<!-- _________________________ Finish Middle _________________________ -->
<?php 

get_sidebar('bottom');

?>
<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer">
	<?php 
	get_template_part('theme-framework/template/footer');
	?>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

<?php do_action('cmsmasters_after_page', $cmsmasters_option); ?>
</div>
<span class="cmsmasters_responsive_width"></span>
<!-- _________________________ Finish Page _________________________ -->

<?php do_action('cmsmasters_after_body', $cmsmasters_option); ?>
<?php wp_footer(); ?>
</body>
</html>
