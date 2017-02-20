<?php
return array(

    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

    'catalog' => 'catalog/index', // actionIndex in CatalogController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index', // actionIndex in CabinetController

    'contacts' => 'site/contact',


    'cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
    'cart/delete/([0-9]+)' => 'cart/delete', // actionDelete в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAdd в CartController
    'cart' => 'cart/index',



    '' => 'site/index', // actionIndex в SiteController

	);
