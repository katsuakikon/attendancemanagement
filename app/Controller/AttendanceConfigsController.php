<?php
App::uses('AppController', 'Controller');
/**
 * AttendanceConfigs Controller
 *
 * @property AttendanceConfig $AttendanceConfig
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AttendanceConfigsController extends AppController {

/**
 * Model
 *
 * @var array
 */
	public $uses = array(
		'AttendanceConfig',
		'AttendanceTime',
		'MstProject',
		'MstServiceCategory',
	);

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AttendanceConfig->recursive = 0;
		$this->set('attendanceConfigs', $this->Paginator->paginate());

		$projects = $this->MstProject->find('list',
			array(
				'fields' => array('mst_name'),
				'order' => array('MstProject.id')
			));

		$serviceCategories = $this->MstServiceCategory->find('list',
			array(
				'fields' => array('mst_name'),
				'order' => array('MstServiceCategory.id')
			));

		$status = array('' => '未申請', '1' => '申請済み', '2' => '承認済み');

		$this->set('projects', $projects);
		$this->set('serviceCategories', $serviceCategories);
		$this->set('status', $status);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendanceConfig->exists($id)) {
			throw new NotFoundException(__('Invalid attendance config'));
		}
		$options = array('conditions' => array('AttendanceConfig.' . $this->AttendanceConfig->primaryKey => $id));
		$this->set('attendanceConfig', $this->AttendanceConfig->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendanceConfig->create();
			$this->request->data['AttendanceConfig']['user_id'] = $this->Auth->user('id');
			$this->request->data['AttendanceConfig']['created_id'] = $this->Auth->user('id');
			$this->request->data['AttendanceConfig']['modified_id'] = $this->Auth->user('id');

			if ($this->AttendanceConfig->save($this->request->data)) {
				$this->AttendanceTime->saveMonthlyDefault($this->request->data['AttendanceConfig'], $this->AttendanceConfig->id);
				$this->Session->setFlash(__('The attendance config has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance config could not be saved. Please, try again.'));
			}
		}

		$projects = $this->MstProject->find('list',
			array(
				'fields' => array('mst_name'),
				'order' => array('MstProject.id')
			));

		$serviceCategories = $this->MstServiceCategory->find('list',
			array(
				'fields' => array('mst_name'),
				'order' => array('MstServiceCategory.id')
			));
		$this->set(compact('projects', 'serviceCategories'));

		$years = array();
		for ($i= date('Y') - 1; $i <= date('Y') + 1; $i++) {
			$years[$i] = $i; 
		}
		$this->set('years', $years);

		$months = array();
		for ($i= 1; $i <= 12; $i++) {
			$months[$i] = $i;
		}
		$this->set('months', $months);

		$times = array();
		for ($i= 0; $i <= 23; $i++) {
			$times[$i] = $i;
		}
		$this->set('times', $times);

		$minutes = array();
		for ($i= 0; $i <= 59; $i+=5) {
			$minutes[$i] = $i;
		}
		$this->set('minutes', $minutes);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AttendanceConfig->exists($id)) {
			throw new NotFoundException(__('Invalid attendance config'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AttendanceConfig->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance config has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance config could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AttendanceConfig.' . $this->AttendanceConfig->primaryKey => $id));
			$this->request->data = $this->AttendanceConfig->find('first', $options);
		}
		$users = $this->AttendanceConfig->User->find('list');
		$projects = $this->AttendanceConfig->Project->find('list');
		$serviceCategories = $this->AttendanceConfig->ServiceCategory->find('list');
		$this->set(compact('users', 'projects', 'serviceCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AttendanceConfig->id = $id;
		if (!$this->AttendanceConfig->exists()) {
			throw new NotFoundException(__('Invalid attendance config'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AttendanceConfig->delete()) {
			$this->Session->setFlash(__('The attendance config has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attendance config could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
