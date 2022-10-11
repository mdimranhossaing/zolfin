<?php 

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages.home.home');
});

Route::get('/about', function(){
    return view('pages.about.about',[
        'page_name'=>'About Us',
        'home'=>'home'
    ]);
});

Route::get('/404', function(){
    return view('pages.404.404',[
        'page_name'=>'404',
        'home'=>'home'
    ]);
});

Route::get('/contact', function(){
    return view('pages.contact.contact',[
        'page_name'=>'Contact Us',
        'home'=>'home'
    ]);
});

Route::get('/blog', function(){
    return view('pages.blog.blog',[
        'page_name'=>'Blog & News',
        'home'=>'home'
    ]);
});

Route::get('/blog-details', function(){
    return view('pages.blog.blog-details',[
        'page_name'=>'Blog Details',
        'home'=>'home'
    ]);
});

Route::get('/faq', function(){
    return view('pages.faq.faq',[
        'page_name'=>'FAQ',
        'home'=>'home'
    ]);
});

Route::get('/portfolio-details', function(){
    return view('pages.portfolio.portfolio-details',[
        'page_name'=>'Protfolio Details',
        'home'=>'home'
    ]);
});

Route::get('/portfolio', function(){
    return view('pages.portfolio.portfolio',[
        'page_name'=>'Protfolio',
        'home'=>'home'
    ]);
});

Route::get('/price', function(){
    return view('pages.price.price',[
        'page_name'=>'Pricing Plan',
        'home'=>'home'
    ]);
});

Route::get('/process', function(){
    return view('pages.process.process',[
        'page_name'=>'Our Process',
        'home'=>'home'
    ]);
});

Route::get('/service-details', function(){
    return view('pages.service.service-details',[
        'page_name'=>'Service Details',
        'home'=>'home'
    ]);
});

Route::get('/team', function(){
    return view('pages.team.team',[
        'page_name'=>'Team Member',
        'home'=>'home'
    ]);
});