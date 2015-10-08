<?php
App::uses('AttendanceExpense', 'Model');

/**
 * AttendanceExpense Test Case
 *
 */
class AttendanceExpenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendance_expense',
		'app.at_config'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AttendanceExpense = ClassRegistry::init('AttendanceExpense');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttendanceExpense);

		parent::tearDown();
	}

}
