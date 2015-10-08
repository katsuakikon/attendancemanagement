<?php
App::uses('AppModel', 'Model');
/**
 * MstServiceCategory Model
 *
 */
class MstServiceCategory extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'local';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'mst_service_category';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mst_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength',200),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
