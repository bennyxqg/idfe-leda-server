<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class CKeditorController extends AppController
{


    public function admin_upload_image()
    {
        $image_file = isset($this->params['form']['upload']) ? $this->params['form']['upload'] : null;
        $CKEditorFuncNum = $this->request->query['CKEditorFuncNum'];
        $file_url = $this->upload_file($image_file['tmp_name'], 0, '', false, '', '');
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('{$CKEditorFuncNum}','{$file_url}');</script>";
        exit(0);
    }


}
