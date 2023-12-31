<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/


$router->get('/Nhome', 'Welcome::Nhome');
$router->get('/home', 'Welcome::home');
$router->get('/contact', 'Welcome::contact');
$router->get('/signin', 'Welcome::signin');
$router->match('AddAssignment', 'Welcome::AddAssignment','GET|POST');
$router->get('/admin', 'Welcome::admin');
$router->get('/Ebike', 'Welcome::Ebike');
$router->get('/Etable', 'Welcome::Etable');
$router->get('/assignment', 'Welcome::assignment');
$router->get('/addparts', 'Welcome::addparts');
$router->get('/partsTable', 'Welcome::partsTable');
$router->post('/addParts', 'Welcome::addPart');
$router->match('read', 'Welcome::read','GET|POST');
$router->get('/Sales', 'Welcome1::Sales');
$router->match('Sales', 'Welcome::Sales','GET|POST');






// for email
// $router->post('/insert', 'Welcome::insert');
$router->get('/', 'Welcome1::register');
$router->get('/login', 'Welcome1::login');
$router->get('/dashboard', 'Welcome1::dashboard');
$router->post('/validate_reg', 'Welcome1::register_val');
$router->post('/validate_login', 'Welcome1::login_val');
$router->post('/email', 'Welcome1::email');
$router->get('/verify', 'Welcome1::account');
$router->post('/check', 'Welcome1::check');




//update and delete
$router->get('/display', 'Admin::display');
$router->post('/submit', 'Admin::add');
$router->get('/delete/(:num)', 'Admin::delete');
$router->get('/deleteParts/(:num)', 'Admin::deleteParts');
$router->get('/edit/(:any)', 'Admin::edit');
$router->post('/submitedit/(:num)', 'Admin::submitedit');


    //sheesh
    $router->get('/display', 'parts::display');
    $router->post('/submit', 'parts::add');
    $router->get('/delete/(:num)', 'parts::delete');
    $router->get('/edit/(:any)', 'parts::edit');
    $router->post('/submitedit/(:num)', 'parts::submitedit');
