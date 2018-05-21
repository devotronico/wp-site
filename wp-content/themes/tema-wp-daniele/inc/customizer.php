<?php



  function themeDan_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'themeDanootstrap'),
      'description' => sprintf(__('Options for showcase','themeDanbootstrap')),
      'priority'    => 130
    ));





    
    //IMMAGINE-----------------------------------------------------------
    $wp_customize->add_setting('showcase_image', array(
        'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'      => 'theme_mod'
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label'   => __('Showcase Image', 'themeDanbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority'  => 1
      )));





      //TITOLO-----------------------------------------------------------
      $wp_customize->add_setting('showcase_heading', array(
        'default'   => _x('Custom Bootstrap Wordpress Theme', 'themeDanbootstrap'),
        'type'      => 'theme_mod'
      ));
      $wp_customize->add_control('showcase_heading', array(
        'label'   => __('Heading', 'themeDanbootstrap'),
        'section' => 'showcase',
        'priority'  => 2
      ));



      //BACKGROUND COLOR TITOLO-----------------------------------------------------------
      $wp_customize->add_setting('showcase_heading_bg', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'themeDanbootstrap'),
      'type'      => 'theme_mod'
      ));
      $wp_customize->add_control('showcase_heading_bg', array(
        'label'   => __('Heading Bg', 'themeDanbootstrap'),
        'section' => 'showcase',
        'priority'  => 2
      ));






    //TESTO-DESCRIZIONE-----------------------------------------------------------
    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'themeDanbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'themeDanbootstrap'),
      'section' => 'showcase',
      'priority'  => 3
    ));






    //BOTTONE-LINK-----------------------------------------------------------
    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'themeDanbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'themeDanbootstrap'),
      'section' => 'showcase',
      'priority'  => 4
    ));
    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'themeDanbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'themeDanbootstrap'),
      'section' => 'showcase',
      'priority'  => 5
    ));
  }
  add_action('customize_register', 'themeDan_customize_register');