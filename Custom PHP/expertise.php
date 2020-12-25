<?php

add_action('init', 'techno_expertise_sections');

if(!function_exists('techno_expertise_sections')):

	function techno_expertise_sections(){

		if(function_exists('kc_add_map')):

		kc_add_map(

		    array(

		        'techno_expertise'  => array(
		            'name'        => esc_html__('TAG Affiliates', 'techno'),
		            'description' => esc_html__('Display our affiliates', 'techno'),
		            'icon'        => 'kc-icon-blog-posts',
		            'category'    => 'TAG',
		            'params'      => array(


		         	'General' => array(
						array(
							'name'			=> 'items',
							'label'			=> __( 'Affiliate Limit', 'techno' ),
							'type'			=> 'number_slider',
							'value'			=> '3',
							'description'	=> __('Pick how many affiliates should be displayed at a time.', 'techno'),
							'options'		=> array(
								'min'			=> 0,
								'max'			=> 75,
								'unit'			=> '',
								'show_input'	=> false
							)
						),
						array(
							'type'			=> 'radio_image',
							'label'			=> __( 'Select blog Style', 'techno' ),
							'name'			=> 'layout',
							'admin_label'	=> true,
							'options'		=> array(
								'1'	=> EM40_EXTENSION_URI . 'asstes/images/blog/layout1.jpg',
								'2'	=> EM40_EXTENSION_URI . 'asstes/images/blog/layout2.jpg',
							),
							'description'	=> __( 'When select style 2 that time, set column and set gutter not work', 'techno' ),
							'value'			=> '1'
						),
						array(
							'type'			=> 'select',
							'label'			=> __( 'Set Column', 'techno' ),
							'name'			=> 'set_column',
							'description'	=> __( 'Enter number item per row', 'techno' ),
							'value'			=> '4',
							'options'		=> array(
								'12'	=> __( '1 Column', 'techno' ),
								'6'	=> __( '2 Column', 'techno' ),
								'4'	=> __( '3 Column', 'techno' ),
								'3'	=> __( '4 Column', 'techno' ),
								'2'	=> __( '6 Column', 'techno' )
							),
						),

						array(
							'type'			=> 'text',
							'label'			=> __( 'Custom class', 'techno' ),
							'name'			=> 'custom_class',
							'description'	=> __( 'Enter extra custom class', 'techno' )
						)

		         	),
				'styling'	=> array(
					array(
						'name'		=> 'css_custom',
						'type'		=> 'css',
						'options'	=> array(
							array(
								"screens" => "any,1024,999,767,479",

								'Box'	=> array(
									array('property' => 'background'),
									array('property' => 'background-color', 'label' => 'BG Color', 'selector' => '+ .techno-single-blog_adn'),
									array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '+:hover'),
									array('property' => 'text-align', 'label' => 'Box Text Align'),
									array('property' => 'border', 'label' => 'Border'),
									array('property' => 'border-color', 'label' => 'Border Color Hover'),
									array('property' => 'display', 'label' => 'Display'),
									array('property' => 'border-radius', 'label' => 'Border Radius'),
									array('property' => 'box-shadow', 'label' => 'Box Shadow', 'selector' => '+.techno-single-blog_adn',),
									array('property' => 'box-shadow', 'label' => 'Box Shadow Hover', 'selector' => '+.techno-single-blog_adn:hover'),
									array('property' => 'margin', 'label' => 'Margin'),
									array('property' => 'padding', 'label' => 'Padding'),
									array('property' => 'margin', 'label' => 'Position Hover', 'selector' => '+.techno-single-blog_adn:hover')
								)

							)
						)
					)
				),
				'animate' => array(
					array(
						'name'    => 'animate',
						'type'    => 'animate'
					)
				),



		            )// Params

		        )// end shortcode key

		    )// first array

		); // End add map

		endif;

	}

endif;











// ========== blog Area
if(!function_exists('techno_expertise_area')){
	function techno_expertise_area( $atts , $content = null ){

	ob_start();
	 // Attributes
			$em_blog_box = shortcode_atts(array(
				'layout' 			=> '1',
				'set_column' 		=> '3',
				'items' 			=> '3',
				'custom_css' 	   	=> '',
				'custom_class' 		=> '',
			),$atts);
			extract( $em_blog_box );



		//custom class
		$wrap_class  = apply_filters( 'kc-el-class', $atts );
		if( !empty( $custom_class ) ):
			$wrap_class[] = $custom_class;
		endif;
		$extra_class =  implode( ' ', $wrap_class );



$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );


	$args = array(
		'post_type' => 'em_expertise',
		'posts_per_page' => intval( $items ),
		'order' 			=> $order ,
		'paged'     => $paged,
		'page'      => $paged
	);
	$the_query = new WP_Query($args);







	if( $the_query->have_posts() ) {


	switch ( $layout ) {
		case '2':
		?>
			<div class=" blog_style_adn_2">
				<div class="blog_wrap expertise_carousel owl-carousel curosel-style">

					<?php while ($the_query->have_posts()) : $the_query->the_post();

					?>
						<!-- single blog -->
						<div class=" <?php if( $gutter == 'yes' ){echo 'blog_nospace_adn';}?>  col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_expertise <?php echo esc_attr( $extra_class ); ?>">


								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-expertise ">

										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="expertise-thumb ">
												<?php the_post_thumbnail();?>
											</div>
										<?php } ?>

									</div>
								</div> <!--  END SINGLE BLOG -->


							</div>

						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>


				</div>
			</div>

		<?php
		break;
		default:
		?>

			<div class=" em_load_adn bgimgload blog_style_adn_1">
				<div class="blog_wrap blog-messonary">
					<?php while ($the_query->have_posts()) : $the_query->the_post();

					?>
						<!-- single expertise -->
						<div class=" <?php if( $gutter == 'yes' ){echo 'blog_nospace_adn';}?>  col-md-<?php if( !empty( $set_column ) ){echo $set_column;}?> grid-item col-xs-12 col-sm-6" >
							<div class="single_expertise <?php echo esc_attr( $extra_class ); ?>">


								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-expertise ">

										<!-- expertise THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="expertise-thumb ">
												<?php the_post_thumbnail();?>
											</div>
										<?php } ?>

									</div>
								</div> <!--  END SINGLE expertise -->


							</div>

						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>

		<?php
		break;
	}


	} //end have

	return ob_get_clean();
	}
}
add_shortcode ('techno_expertise', 'techno_expertise_area' );
