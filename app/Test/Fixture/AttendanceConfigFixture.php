<?php
/**
 * AttendanceConfigFixture
 *
 */
class AttendanceConfigFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'attendance_config';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null),
		'month' => array('type' => 'integer', 'null' => false, 'default' => null),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'service_category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'start_time' => array('type' => 'integer', 'null' => true, 'default' => null),
		'start_minutes' => array('type' => 'integer', 'null' => true, 'default' => null),
		'end_time' => array('type' => 'integer', 'null' => true, 'default' => null),
		'end_minutes' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'item1_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'item2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'closing_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
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
			'user_id' => 1,
			'year' => 1,
			'month' => 1,
			'project_id' => 1,
			'service_category_id' => 1,
			'start_time' => 1,
			'start_minutes' => 1,
			'end_time' => 1,
			'end_minutes' => 1,
			'created' => '2015-03-25 08:59:43',
			'created_id' => 1,
			'modified' => '2015-03-25 08:59:43',
			'modified_id' => 1,
			'item1_id' => 1,
			'item2_id' => 1,
			'closing_flg' => 1
		),
	);

}
