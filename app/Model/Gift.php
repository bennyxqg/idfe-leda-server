<?php
App::uses('AppModel', 'Model');
/**
 * Vote Model
 *
 */
class Gift extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gifts';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
