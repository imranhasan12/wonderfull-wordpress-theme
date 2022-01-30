<?php






function customized_extra_part($wp_customize){
	  //adding section tittle
    $wp_customize->add_section('copyright_extras_section', array(
        'title'          => 'Footer Extra part Daynamic '
    ));

    //adding setting 
    $wp_customize->add_setting('text_title', array(
        'default'        => 'Please Type Your Header Ttile ',
    ));
     
    $wp_customize->add_control('text_title', array(
        'label'   => 'title text',
        'section' => 'copyright_extras_section',
        'type'    => 'text',
    ));
	
	
	 //adding setting for copyright text
    $wp_customize->add_setting('text_area', array(
        'default'        => 'Please type Your description',
    ));

	
	
	 $wp_customize->add_control('text_area', array(
        'label'   => 'Description',
        'section' => 'copyright_extras_section',
        'type'    => 'textarea',
    ));
	
		//adding setting for copyright text
    $wp_customize->add_setting('image');

    $wp_customize->add_control (new wp_customize_cropped_image_control($wp_customize,'image', array(
        'label'   => 'image',
        'section' => 'copyright_extras_section'
		
       
    )));
	 
	
    //Header bractcumpe tittle
    $wp_customize->add_section('headeer_bradecumpe_section', array(
        'title'          => 'Header Bradecumpe Extra Part '
    ));

    //adding setting 
    $wp_customize->add_setting('text_title_1', array(
        'default'        => 'Please Type Your Header Ttile ',
    ));
     
    $wp_customize->add_control('text_title_1', array(
        'label'   => 'title text ',
        'section' => 'headeer_bradecumpe_section',
        'type'    => 'text',
    ));
	
	 //adding setting for copyright text
    $wp_customize->add_setting('text_area_1', array(
        'default'        => 'Please type Your description',
    ));
	
		
	 $wp_customize->add_control('text_area_1', array(
        'label'   => 'Description',
        'section' => 'headeer_bradecumpe_section',
        'type'    => 'textarea',
    ));
	
		//only use this code not crooped image
    $wp_customize->add_setting('image_1', array(
	
	        'default' => '',
            'transport' => 'refresh',
           'sanitize_callback' => 'absint',
		
		
		
	  ));

    $wp_customize->add_control (new wp_customize_cropped_image_control($wp_customize,'image_1', array(
        'label'   => 'image',
        'section' => 'headeer_bradecumpe_section',
		'width' => 2000 ,
        'height' => 300 ,
         'button_labels' => array( 
                'select' => __( 'Select Logo' ),
                'change' => __( 'Change Logo' ),
                'default' => __( 'Default' ),
                'remove' => __( 'Remove' ),
                'placeholder' => __( 'No logo selected' ),
                'frame_title' => __( 'Select Logo' ),
                'frame_button' => __( 'Choose Logo' ),
               )
    )));
	 
	//  =============================
    //  = Facebook                  =
    //  =============================
    $wp_customize->add_setting('mcs_fb_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mcs_fb', array(
        'label'      => __('Facebook Handle', 'mcs'),
        'section'    => 'headeer_bradecumpe_section',
        'settings'   => 'mcs_fb_op',
    ));

	
	
	
	
//adding setting for background
$wp_customize->add_setting('background_color', array(
 'default'        => '#ffffff',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
'label'   => 'Footer Color Setting',
'section' => 'copyright_extras_section',
'settings'   => 'background_color',

    )));
	
//adding setting for footer logo
$wp_customize->add_setting('footer_logo');
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
 'label'      => __('Footer Logo', 'mytheme'),
 'section'    => 'copyright_extras_section',
 'settings'   => 'footer_logo',
 )));
	
	//  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'themename_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'copyright_extras_section',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
	
	 //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('themename_page_test', array(
        'label'      => __('Page Test', 'themename'),
        'section'    => 'copyright_extras_section',
        'type'    => 'dropdown-pages',
        'settings'   => 'themename_theme_options[page_test]',
    ));
	
	// =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
  
    $wp_customize->add_setting('_s_f_slide_cat', array(
        'default'        => $default
    ));
    $wp_customize->add_control( 'cat_select_box', array(
        'settings' => '_s_f_slide_cat',
        'label'   => 'Select Category:',
        'section'  => 'copyright_extras_section',
        'type'    => 'select',
        'choices' => $cats,
    ));
	


	
}
add_action('customize_register','customized_extra_part');

function customized_extra_button($wp_customize){
		
	// =====================
    //  = Creat a Button Another function =
    //  =====================

	
	 $wp_customize->add_section( 'cd_button' , array(
      'title'      => 'The Button',
      'priority'   => 20,
  ) );

  $wp_customize->add_setting( 'cd_button_display' , array(
      'default'     => true,
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'cd_button_display', array(
  'label' => 'Button Display',
  'section' => 'cd_button',
  'settings' => 'cd_button_display',
  'type' => 'radio',
  'choices' => array(
    'show' => 'Show Button',
    'hide' => 'Hide Button',
  ),
) );
	
		
	
	
	

}
add_action('customize_register','customized_extra_button');