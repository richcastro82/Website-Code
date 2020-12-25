<?php

add_action('init', 'techno_team_member_sections');

if(!function_exists('techno_team_member_sections')):

	function techno_team_member_sections(){

		if(function_exists('kc_add_map')):

		kc_add_map(

		    array(

		        'techno_team_member'  => array(
		            'name'        => esc_html__('TAG Team Members', 'techno'),
		            'description' => esc_html__('Display Blog Style', 'techno'),
		            'icon'        => 'kc-icon-blog-posts',
		            'category'    => 'TAG',
		            'params'      => array(


		         	'General' => array(
						array(
							'name'			=> 'items',
							'label'			=> __( 'Team Members', 'techno' ),
							'type'			=> 'number_slider',
							'value'			=> '3',
							'description'	=> __(' How many team members to display on the visible row', 'techno'),
							'options'		=> array(
								'min'			=> 0,
								'max'			=> 75,
								'unit'			=> '',
								'show_input'	=> false
							)
						),
						array(
							'type'		=> 'select',
							'label'		=> __( 'Order By', 'techno' ),
							'name'		=> 'order',
							'options'	=> array(
								'DESC'	=> __( 'Descending', 'techno' ),
								'ASC'	=> __( 'Ascending', 'techno' )
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
								'3'	=> EM40_EXTENSION_URI . 'asstes/images/blog/layout3.jpg',
							),
							'description'	=> __( 'Having some issues on the Style #2 when gutter and columns are set', 'techno' ),
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
								'3'	=> __( '4 Column', 'techno' )
							),
						),
						array(
							'name'			=> 'gutter',
							'label'			=> __( 'Select No Gutter', 'techno' ),
							'type'			=> 'toggle',
							'value'			=> 'no',
							'description'	=> __( 'Remove column Spacing', 'techno' ),
						),
						array(
							'name'	=> 'show_content',
							'label'	=> __( 'Display Pragraph', 'techno' ),
							'type'	=> 'toggle',
							'value'	=> 'yes',
						),
						array(
							'name'	=> 'show_button',
							'label'	=> __( 'Display Button', 'techno' ),
							'type'	=> 'toggle',
							'value'	=> 'yes',
						),
						array(
							'type'			=> 'text',
							'label'			=> __( 'Button Text', 'techno' ),
							'name'			=> 'btn_text',
							'value'			=> 'Read More',
							'description'	=> __( 'Enter Button Text', 'techno' ),

							'relation'	=> array(
								'parent'	=> 'show_button',
								'show_when'	=> 'yes',
							)
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
								'Title'	=> array(
									array('property' => 'color', 'label' => 'Color', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'color', 'label' => 'Hover Color', 'selector' => '.em-team-members-title  a:hover'),
									array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'margin', 'label' => 'Margin', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
									array('property' => 'padding', 'label' => 'Padding', 'selector' => '.em-team-members-title h2 a,.em-team-members-title  a'),
								),
								'Desc'	=> array(
									array('property' => 'color', 'label' => 'Color', 'selector' => '.team-members-content p'),
									array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.team-members-content p'),
									array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.team-members-content p'),
									array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.team-members-content p'),
									array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.team-members-content p'),
									array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.team-members-content p'),
									array('property' => 'padding', 'label' => 'Padding', 'selector' => '.team-members-content p'),
									array('property' => 'margin', 'label' => 'Margin', 'selector' => '.team-members-content p'),
								),
								'Category'	=> array(
									array('property' => 'color', 'label' => 'Color', 'selector' => '.case_category span'),
									array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.case_category span'),
									array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.case_category span'),
									array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.case_category span'),
									array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.case_category span'),
									array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.case_category span'),
									array('property' => 'padding', 'label' => 'Padding', 'selector' => '.case_category span'),
									array('property' => 'margin', 'label' => 'Margin', 'selector' => '.case_category span'),
								),
								'Button'	=> array(
									array('property' => 'color', 'label' => 'Text Color', 'selector' => '.em-team-member-button a'),
									array('property' => 'color', 'label' => 'Text Hover Color', 'selector' => '.em-team-member-button:hover'),
									array('property' => 'border', 'label' => 'Border', 'selector' => '.em-team-member-button a'),
									array('property' => 'border-color', 'label' => 'Hover Border', 'selector' => '.em-team-member-button a:hover'),
									array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.em-team-member-button a'),
									array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '.em-team-member-button a:hover'),
									array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.em-team-member-button a'),
									array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.em-team-member-button a'),
									array('property' => 'margin', 'label' => 'Margin', 'selector' => '.em-team-member-button a'),
									array('property' => 'padding', 'label' => 'Padding', 'selector' => '.em-team-member-button a'),
								),
								'Content'	=> array(
									array('property' => 'background', 'label' => 'BG Color', 'selector' => '.em-team-members-content '),
									array('property' => 'color', 'label' => 'Color', 'selector' => '.em-team-members-content '),
									array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.em-team-members-content '),
									array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.em-team-members-content'),
									array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.em-team-members-content '),
									array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.em-team-members-content'),
									array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.em-team-members-content '),
									array('property' => 'padding', 'label' => 'Padding', 'selector' => '.em-team-members-content '),
									array('property' => 'margin', 'label' => 'Margin', 'selector' => '.em-team-members-content '),
								),
								'Box'	=> array(
									array('property' => 'background'),
									array('property' => 'background-color', 'label' => 'BG Color', 'selector' => '+ .techno-single-team-members'),
									array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '+:hover'),
									array('property' => 'text-align', 'label' => 'Box Text Align'),
									array('property' => 'border', 'label' => 'Border'),
									array('property' => 'border-color', 'label' => 'Border Color Hover'),
									array('property' => 'display', 'label' => 'Display'),
									array('property' => 'border-radius', 'label' => 'Border Radius'),
									array('property' => 'box-shadow', 'label' => 'Box Shadow', 'selector' => '+.techno-single-team-members',),
									array('property' => 'box-shadow', 'label' => 'Box Shadow Hover', 'selector' => '+.techno-single-team-members:hover'),
									array('property' => 'margin', 'label' => 'Margin'),
									array('property' => 'padding', 'label' => 'Padding'),
									array('property' => 'margin', 'label' => 'Position Hover', 'selector' => '+.techno-single-team-members:hover')
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
if(!function_exists('techno_team_member_area')){
	function techno_team_member_area( $atts , $content = null ){

	ob_start();
	 // Attributes
			$em_blog_box = shortcode_atts(array(
				'layout' 			=> '1',
				'set_column' 		=> '3',
				'show_pagination' 	=> '',
				'items' 			=> '3',
				'order' 			=> '',
				'gutter'			=> '',
				'show_content' 	   	=> '',
				'show_button' 	   	=> '',
				'btn_text' 	   		=> '',
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
		'post_type' => 'em_team_member',
		'posts_per_page' => intval( $items ),
		'order' 			=> $order ,
		'paged'     => $paged,
		'page'      => $paged
	);
	$the_query = new WP_Query($args);







	if( $the_query->have_posts() ) {


	switch ( $layout ) {
		case '3':
		?>
			<div class=" blog_style_adn_2">
				<div class="blog_wrap team_member_carousel owl-carousel team-member-style3 curosel-style">

					<?php while ($the_query->have_posts()) : $the_query->the_post();

					$terms = get_the_terms(get_the_ID(), 'em_team_member_cat');

					?>
						<!-- single blog -->
						<div class=" <?php if( $gutter == 'yes' ){echo 'blog_nospace_adn';}?>  col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_team_member <?php echo esc_attr( $extra_class ); ?>">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-team-members ">

										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="team-member-thumb ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?>
												</a>
											</div>
										<?php } ?>

										<div class="em-team-members-content ">

											<div class="case_category">
                								<?php if( $terms ){
        											foreach( $terms as $single_slugs ){?>
        												<span class="category-item">
        												   <?php echo $single_slugs->name ;?>
        												</span>
        											<?php }}?>
                								</div>
											<!-- CASE TITLE -->
											<div class="em-team-members-title ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

											</div>


											<!-- Blog Description -->
											<?php if($show_content=='yes'){?>

													<!-- BLOG TITLE AND CONTENT -->
													<div class="em-team-members-inner ">
														<div class="team-members-content ">
															<p><?php echo wp_trim_words( get_the_content(), 19, ' ' ); ?></p>
														</div>
													</div>

											<?php } ?>


											<!-- Blog Read More Button -->
											<?php if($show_button=='yes'){?>

												<div class="em-team-member-button">
													<?php if($btn_text){?>
															<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $btn_text;?></a>
													<?php } ?>
												</div>

											<?php } ?>
										</div>
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

		case '2':
		?>
			<div class=" blog_style_adn_2">
				<div class="blog_wrap team_member_carousel owl-carousel curosel-style">

					<?php while ($the_query->have_posts()) : $the_query->the_post();

					?>
						<!-- single blog -->
						<div class=" <?php if( $gutter == 'yes' ){echo 'blog_nospace_adn';}?>  col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_team_member <?php echo esc_attr( $extra_class ); ?>">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-team-members ">

										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="team-member-thumb ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?>
												</a>
											</div>
										<?php } ?>

										<div class="em-team-members-content ">

											<!-- BLOG TITLE -->
											<div class="em-team-members-title ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

											</div>
											<div class="case_category">
												<span>Marketing /</span>
												<span>Design</span>
											</div>

											<!-- Blog Description -->
											<?php if($show_content=='yes'){?>

													<!-- BLOG TITLE AND CONTENT -->
													<div class="em-team-members-inner ">
														<div class="team-members-content ">
															<p><?php echo wp_trim_words( get_the_content(), 19, ' ' ); ?></p>
														</div>
													</div>

											<?php } ?>


											<!-- Blog Read More Button -->
											<?php if($show_button=='yes'){?>

												<div class="em-team-member-button">
													<?php if($btn_text){?>
															<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $btn_text;?></a>
															<i class="fa fa-long-arrow-right btn_icon"></i>
													<?php } ?>
												</div>

											<?php } ?>
										</div>
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

			<div class=" em_load_adn bgimgload case_default">
				<div class="blog_wrap blog-messonary">
					<?php while ($the_query->have_posts()) : $the_query->the_post();

					?>
						<!-- single blog -->
						<div class=" <?php if( $gutter == 'yes' ){echo 'blog_nospace_adn';}?>  col-md-<?php if( !empty( $set_column ) ){echo $set_column;}?> grid-item col-xs-12 col-sm-6" >
							<div class="single_team_member <?php echo esc_attr( $extra_class ); ?>">


								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="techno-single-team-members ">

										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="team-member-thumb ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?>
												</a>
											</div>
										<?php } ?>

										<div class="em-team-members-content ">

											<!-- BLOG TITLE -->
											<div class="em-team-members-title ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											</div>
											<div class="case_category">
												<span>Marketing /</span>
												<span>Design</span>
											</div>

											<!-- Blog Description -->
											<?php if($show_content=='yes'){?>

													<!-- BLOG TITLE AND CONTENT -->
													<div class="em-team-members-inner ">
														<div class="team-members-content ">
															<p><?php echo wp_trim_words( get_the_content(), 16, ' ' ); ?></p>
														</div>
													</div>

											<?php } ?>
											<!-- Blog Read More Button -->
											<?php if($show_button=='yes'){?>
												<div class="em-team-member-button">
													<?php if($btn_text){?>
															<a href="<?php the_permalink(); ?>" class="study_btn"><?php echo $btn_text;?></a>
													<?php } ?>
												</div>
											<?php } ?>
										</div>

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
	}


	} //end have

	return ob_get_clean();
	}
}
add_shortcode ('techno_team_member', 'techno_team_member_area' );
