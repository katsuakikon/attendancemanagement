<?php
App::uses('MstServiceCategory', 'Model');

/**
 * MstServiceCategory Test Case
 *
 */
class MstServiceCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mst_service_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MstServiceCategory = ClassRegistry::init('MstServiceCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MstServiceCategory);

		parent::tearDown();
	}

}
