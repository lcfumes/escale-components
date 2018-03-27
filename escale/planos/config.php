<?php

return array(

  'slug'    => 'planos', // Must be unique and singular
  'groups'    => array('escale'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => '5 MEGA'),
          array('name'=>'download', ' type'=> 'text', 'value'=>'5 MB'),
          array('name'=>'upload', 'type'=> 'text', 'value'=>'500 Kbps'),
          array('name'=>'wifi', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'antivirus', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'price', 'type'=> 'text', 'value'=>'R$ 59,99'),
        ),
        array(
          array('name'=>'title', 'value' => '35 MEGA'),
          array('name'=>'download', 'type'=> 'text', 'value'=>'35 MB'),
          array('name'=>'upload', 'type'=> 'text', 'value'=>'2 MB'),
          array('name'=>'wifi', 'type'=> 'text', 'value'=>'Sim'),
          array('name'=>'antivirus', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'price', 'type'=> 'text', 'value'=>'R$ 59,99'),
        ),
        array(
          array('name'=>'title', 'value' => '60 MEGA'),
          array('name'=>'download', 'type'=> 'text', 'value'=>'60 MB'),
          array('name'=>'upload', 'type'=> 'text', 'value'=>'6 MB'),
          array('name'=>'wifi', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'antivirus', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'price', 'type'=> 'text', 'value'=>'R$ 59,99'),
        ),
        array(
          array('name'=>'title', 'value' => '120 MEGA'),
          array('name'=>'download', 'type'=> 'text', 'value'=>'120 MB'),
          array('name'=>'upload', 'type'=> 'text', 'value'=>'6 MB'),
          array('name'=>'wifi', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'antivirus', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'price', 'type'=> 'text', 'value'=>'R$ 59,99'),
        ),
        array(
          array('name'=>'title', 'value' => '240 MEGA'),
          array('name'=>'download', 'type'=> 'text', 'value'=>'240 MB'),
          array('name'=>'upload', 'type'=> 'text', 'value'=>'20 MB'),
          array('name'=>'wifi', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'antivirus', 'type'=> 'text', 'value'=>'Não'),
          array('name'=>'price', 'type'=> 'text', 'value'=>'R$ 59,99'),
        ),
      )

    )
  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(

  ),

  'assets' => function( $path ){
    Onepager::addStyle('planos', $path . '/style.css');
  }
);
