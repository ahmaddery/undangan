<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('index', 'Home::utama');
$routes->get('about', 'Home::about');
$routes->get('service', 'Home::service');
$routes->get('contact', 'Home::contact');
$routes->get('guide/index', 'Home::guide');
// function send email 
$routes->match(['get', 'post'], 'admin/email', 'SendEmail::index');
$routes->post('admin/email', 'SendEmail::index');
//function read & delete email 
$routes->get('admin/view_emails', 'SendEmail::viewEmails'); // Menampilkan daftar email
$routes->get('admin/delete_email/(:num)', 'SendEmail::deleteEmail/$1'); // Menghapus email berdasarkan ID
//form validation login & register 
$routes->get('register_form', 'Auth::register');
$routes->get('auth/register', 'Auth::registerForm');
$routes->post('auth/register', 'Auth::register');
$routes->get('auth/verify', 'Auth::verify');
$routes->post('auth/verify', 'Auth::verify');
$routes->get('login_form', 'Auth::login');
$routes->get('auth/login', 'Auth::loginForm');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login', 'Auth::login');
//form reset password user
$routes->get('auth/forgot_password_form', 'Auth::forgotPasswordForm');
$routes->get('auth/forgot-password', 'Auth::forgotPasswordForm');
$routes->post('auth/forgot-password', 'Auth::forgotPassword');
$routes->get('auth/reset-password', 'Auth::resetPasswordForm');
$routes->post('auth/reset-password', 'Auth::resetPassword');
$routes->add('auth/logout', 'Auth::logout');
//admin user manage
$routes->get('admin/read', 'UserController::read');
$routes->get('user/delete/(:num)', 'UserController::delete/$1');

$routes->get('acara', 'AcaraController::index');
$routes->get('acara/create', 'AcaraController::create');
$routes->post('acara/create', 'AcaraController::create');
$routes->get('acara/edit/(:num)', 'AcaraController::edit/$1');
$routes->post('acara/edit/(:num)', 'AcaraController::edit/$1');
$routes->get('acara/delete/(:num)', 'AcaraController::delete/$1');
$routes->get('acara/fetch_events', 'AcaraController::fetchEvents'); 

$routes->get('events', 'EventController::index');
$routes->get('events/create', 'EventController::create');
$routes->post('events/store', 'EventController::store');
$routes->get('events/edit/(:num)', 'EventController::edit/$1');
$routes->post('events/update/(:num)', 'EventController::update/$1');
$routes->get('events/delete/(:num)', 'EventController::delete/$1');


$routes->get('/mempelai_pria', 'MempelaiPria::index');
$routes->get('/mempelai_pria/create', 'MempelaiPria::create');
$routes->post('/mempelai_pria/store', 'MempelaiPria::store');
$routes->get('/mempelai_pria/edit/(:num)', 'MempelaiPria::edit/$1');
$routes->post('/mempelai_pria/update/(:num)', 'MempelaiPria::update/$1');
$routes->get('/mempelai_pria/delete/(:num)', 'MempelaiPria::delete/$1');



$routes->get('/mempelai_wanita', 'MempelaiWanita::index');
$routes->get('/mempelai_wanita/create', 'MempelaiWanita::create');
$routes->post('/mempelai_wanita/store', 'MempelaiWanita::store');
$routes->get('/mempelai_wanita/edit/(:num)', 'MempelaiWanita::edit/$1');
$routes->post('/mempelai_wanita/update/(:num)', 'MempelaiWanita::update/$1');
$routes->get('/mempelai_wanita/delete/(:num)', 'MempelaiWanita::delete/$1');


$routes->get('undangan/(:segment)', 'UndanganController::index/$1');


$routes->get('/akad_nikah', 'AkadNikahController::index');
$routes->get('/akad_nikah/create', 'AkadNikahController::create');
$routes->post('/akad_nikah/store', 'AkadNikahController::store');
$routes->get('/akad_nikah/edit/(:num)', 'AkadNikahController::edit/$1');
$routes->post('/akad_nikah/update/(:num)', 'AkadNikahController::update/$1');
$routes->get('/akad_nikah/delete/(:num)', 'AkadNikahController::delete/$1');


$routes->get('/resepsi', 'ResepsiController::index');
$routes->get('/resepsi/create', 'ResepsiController::create');
$routes->post('/resepsi/store', 'ResepsiController::store');
$routes->get('/resepsi/edit/(:num)', 'ResepsiController::edit/$1');
$routes->post('/resepsi/update/(:num)', 'ResepsiController::update/$1');
$routes->get('/resepsi/delete/(:num)', 'ResepsiController::delete/$1');


$routes->get('/galeri_foto', 'GaleriFotoController::index');
$routes->get('/galeri_foto/create', 'GaleriFotoController::create');
$routes->post('/galeri_foto/store', 'GaleriFotoController::store');
$routes->get('/galeri_foto/edit/(:num)', 'GaleriFotoController::edit/$1');
$routes->post('/galeri_foto/update/(:num)', 'GaleriFotoController::update/$1');
$routes->get('/galeri_foto/delete/(:num)', 'GaleriFotoController::delete/$1');


$routes->get('unsubscribe_thankyou', 'UnsubscribeController::thankyou');


$routes->get('admin/index', 'AdminController::index'); // Mengarahkan ke method index di controller AdminDashboard
$routes->get('/admin/login', 'AdminController::login');
$routes->post('/admin/login', 'AdminController::login');
$routes->post('/admin/logout', 'AdminController::logout');
$routes->get('/admin/logout', 'AdminController::logout');

