<?php
App::uses('AttendanceTime', 'Model');

/**
 * AttendanceTime Test Case
 *
 */
class AttendanceTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendance_time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AttendanceTime = ClassRegistry::init('AttendanceTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttendanceTime);

		parent::tearDown();
	}

}
