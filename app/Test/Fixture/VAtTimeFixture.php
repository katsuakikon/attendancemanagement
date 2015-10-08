<?php
/**
 * VAtTimeFixture
 *
 */
class VAtTimeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'v_at_time';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'at_config_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'year' => array('type' => 'integer', 'null' => true, 'default' => null),
		'month' => array('type' => 'integer', 'null' => true, 'default' => null),
		'project_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'service_category_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'closing_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'day' => array('type' => 'integer', 'null' => true, 'default' => null),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'paid_holiday_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'holiday_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000),
		'cost' => array('type' => 'decimal', 'null' => true, 'default' => null),
		'indexes' => array(
			
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
			'at_config_id' => 1,
			'user_id' => 1,
			'year' => 1,
			'month' => 1,
			'project_name' => 'Lorem ipsum dolor sit amet',
			'service_category_name' => 'Lorem ipsum dolor sit amet',
			'closing_flg' => 1,
			'id' => 1,
			'day' => 1,
			'start_date' => '2015-03-27 08:25:05',
			'end_date' => '2015-03-27 08:25:05',
			'paid_holiday_flg' => 1,
			'holiday_flg' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet',
			'cost' => ''
		),
	);

}
