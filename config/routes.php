<?php

    return array(

        'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

        'category/view/([0-9]+)' => 'category/view/$1', //actionCategory in CategoryController
        'category' => 'category/index', //actionCategory in CategoryController

        'cart/delete/([0-9]+)' => 'cart/delete/$1',
        'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController

        'cart' => 'cart/index', // actionIndex в CartController

        '' => 'site/index', // actionIndex in SiteController


    );