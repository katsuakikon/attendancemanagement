<?php
App::uses('MstProject', 'Model');

/**
 * MstProject Test Case
 *
 */
class MstProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstProject = ClassRegistry::init('MstProject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstProject);

		parent::tearDown();
	}

}
