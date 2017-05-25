<?php

$config=[

  'add_article_rules'=>[
    [
      'field'=>'title',
      'label'=>'title',
      'rules'=>'required|alpha'
    ],
    [
      'field'=>'body',
      'label'=>'body',
      'rules'=>'required|alpha'
    ]
    ]  ,

    'admin_logn_rules'=>[
      [
        'field'=>'username',
        'label'=>'username',
        'rules'=>'required'
      ],
      [
        'field'=>'password',
        'label'=>'password',
        'rules'=>'required'
      ]

]



];
    ?>
