<?php
App::uses('VAtTime', 'Model');

/**
 * VAtTime Test Case
 *
 */
class VAtTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.v_at_time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VAtTime = ClassRegistry::init('VAtTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VAtTime);

		parent::tearDown();
	}

}
