<?php
/**
 * AttendanceTimeFixture
 *
 */
class AttendanceTimeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'attendance_time';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'at_config_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'day' => array('type' => 'integer', 'null' => false, 'default' => null),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'paid_holiday_flg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1),
		'holiday_flg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000),
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
			'day' => 1,
			'start_date' => '2015-03-23 09:01:14',
			'end_date' => '2015-03-23 09:01:14',
			'paid_holiday_flg' => 'Lorem ipsum dolor sit ame',
			'holiday_flg' => 'Lorem ipsum dolor sit ame',
			'remarks' => 'Lorem ipsum dolor sit amet'
		),
	);

}
