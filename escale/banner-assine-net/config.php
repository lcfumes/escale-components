<?php

return array(

  'slug'      => 'banner-assine-net', // Must be unique and singular
  'groups'    => array('escale'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'image', 'type' => 'image', 'value'=> 'https://s3-sa-east-1.amazonaws.com/assets.combomultinet.com/portfolio-net-2018/internet/mobile/internet_01_net-virtua-combo.jpg'),
    // array('name'=>'link', 'type' => 'link'),
  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
    array(
      'name' => 'verify_disponibility',
      'label' => 'Verificar disponibilidade',
      'type' => 'select',
      'value' => 1,
      'options' => array(
        1 => 'Enabled',
        0 => 'Disabled'
      )
    ),
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
  ),

  'assets' => function( $path ){
    Onepager::addStyle('banner-assine-net', $path . '/style.css');
  }
);
