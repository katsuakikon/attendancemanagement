<?php
/**
 * AttendanceExpenseFixture
 *
 */
class AttendanceExpenseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'at_config_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'expenses_category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'day' => array('type' => 'integer', 'null' => false, 'default' => null),
		'cost' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'specification' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('id', 'at_config_id'))
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'at_config_id' => 1,
			'expenses_category_id' => 1,
			'day' => 1,
			'cost' => '',
			'specification' => 'Lorem ipsum dolor sit amet'
		),
	);

}
