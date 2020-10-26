<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//Router::connect(
//    '/a/news/:year/:md/:id_:bid',array('controller' => 'news', 'action' => 'detail' , 'defarctype'=>'news'),array(
//    'pass' => array('id','bid'),
//    'year'=>'[12][0-9]{3}',
//    'md'=>'[0-2]{1}[0-9]{1}[0-3]{1}[0-9]{1}',
//    'id' => '[0-9]+'
//);

   
    Router::connect('/', array('controller' => 'Index', 'action' => 'index'));
    Router::connect('/index_pre', array('controller' => 'Index', 'action' => 'index_pre'));
    Router::connect('/news_detail', array('controller' => 'Index', 'action' => 'news_detail'));
    Router::connect('/download', array('controller' => 'Index', 'action' => 'download'));
    Router::connect('/preview/*', array('controller' => 'Index', 'action' => 'preview'));
    Router::connect('/pages/*', array('controller' => 'Index', 'action' => 'routes'));


    //Router::connect('/jnh_news', array('controller' => 'Online', 'action' => 'jnh_news'));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
    CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
    require CAKE . 'Config' . DS . 'routes.php';
