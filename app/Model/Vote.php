<?php
App::uses('AppModel', 'Model');
/**
 * Vote Model
 *
 */
class Vote extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'vote';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
