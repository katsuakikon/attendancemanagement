<?php
App::uses('AppController', 'Controller');
/**
 * AttendanceTimes Controller
 *
 * @property AttendanceTime $AttendanceTime
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AttendanceTimesController extends AppController {

/**
 * Model
 *
 * @var array
 */
	public $uses = array(
		'AttendanceTime',
		'VAtTime',
		'AttendanceConfig',
		'MstProject',
		'MstServiceCategory',
	);

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->AttendanceTime->recursive = 0;
		// $this->set('attendanceTimes', $this->Paginator->paginate());

		$user_id = $this->Auth->user('id');
		$year = date('Y');
		$month = date('m');

		if ($this->request->is('post')) {
			$year = $this->request->data['AttendanceConfig']['year'];
			$month = $this->request->data['AttendanceConfig']['month'];

			$query = array(
				'conditions' => array(
					'VAtTime.user_id' => $user_id,
					'VAtTime.year' => $year,
					'VAtTime.month' => $month,
					),
				'order' => 'VAtTime.day,VAtTime.start_date',
			);

			if ($this->request->data['AttendanceConfig']['project_id'] != '') {
				$query['conditions']['VAtTime.project_id'] = $this->request->data['AttendanceConfig']['project_id'];
			}
			if ($this->request->data['AttendanceConfig']['service_category_id'] != '') {
				$query['conditions']['VAtTime.service_category_id'] = $this->request->data['AttendanceConfig']['service_category_id'];
			}

			$data = $this->VAtTime->find('all', $query);
		} else {
			$data = $this->VAtTime->find('all', array(
				'conditions' => array(
					'VAtTime.user_id' => $user_id,
					'VAtTime.year' => date('Y'),
					'VAtTime.month' => date('m'),
					),
				'order' => 'VAtTime.day,VAtTime.start_date',
			));
		}

		// 検索フォーム作成
		$atConfigs = $this->AttendanceConfig->find('all',
			array(
				'fields' => array('project_id', 'service_category_id'),
				'conditions' => array('AttendanceConfig.user_id' => $user_id),
				'recursive' => -1,
			));
		$project_array = array();
		$service_array = array();
		foreach ($atConfigs as $key => $value) {
			array_push($project_array, $value['AttendanceConfig']['project_id']);
			array_push($service_array, $value['AttendanceConfig']['service_category_id']);
		}
		$project_array = array_unique($project_array);
		$service_array = array_unique($service_array);

		$projects = $this->MstProject->find('list',
			array(
				'fields' => array('mst_name'),
				'conditions' => array('MstProject.id' => $project_array),
				'order' => array('MstProject.id')
			));

		$serviceCategories = $this->MstServiceCategory->find('list',
			array(
				'fields' => array('mst_name'),
				'conditions' => array('MstServiceCategory.id' => $service_array),
				'order' => array('MstServiceCategory.id')
			));

		$emptyItem = array('' => '-');

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

		$this->set('VAtTimes', $data);
		$this->set('year', $year);
		$this->set('month', $month);
		$this->set('projects', $emptyItem + $projects);
		$this->set('serviceCategories', $emptyItem + $serviceCategories);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendanceTime->exists($id)) {
			throw new NotFoundException(__('Invalid attendance time'));
		}
		$options = array('conditions' => array('AttendanceTime.' . $this->AttendanceTime->primaryKey => $id));
		$this->set('attendanceTime', $this->AttendanceTime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendanceTime->create();
			if ($this->AttendanceTime->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance time could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit() {
		// var_dump($this->request->data);
		// return;
		if ($this->request->is(array('post', 'put'))) {
			if (isset($this->request->data['AttendanceTime'])) {
				$id = $this->request->data['AttendanceTime']['id'];
				if (!$this->AttendanceTime->exists($id)) {
					throw new NotFoundException(__('Invalid attendance time'));
				}
				if ($this->request->data['AttendanceTime']['paid_holiday_flg']) {
					$this->request->data['AttendanceTime']['start_date'] = null;
					$this->request->data['AttendanceTime']['end_date'] = null;
				}
				if ($this->AttendanceTime->save($this->request->data)) {
					$this->Session->setFlash(__('The attendance time has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The attendance time could not be saved. Please, try again.'));
				}
			} else if (isset($this->request->data['id'])){
				// 前画面からの取得情報
				$id = $this->request->data['id'];
				$project = $this->request->data['project_name'];
				$service = $this->request->data['service_category_name'];
				$year = $this->request->data['year'];
				$month = $this->request->data['month'];
				$day = $this->request->data['day'];

				if (!$this->AttendanceTime->exists($id)) {
					throw new NotFoundException(__('Invalid attendance time'));
				}
				$options = array('conditions' => array('AttendanceTime.' . $this->AttendanceTime->primaryKey => $id));
				$editData = $this->AttendanceTime->find('first', $options);
				

				if ($editData['AttendanceTime']['end_date'] == null) {
					$editData['AttendanceTime']['end_date'] = date('Y-m-d H:i');
				}

				$this->request->data = $editData;

				$this->set('project', $project);
				$this->set('service', $service);
				$this->set('year', $year);
				$this->set('month', $month);
				$this->set('day', $day);
				var_dump($editData);
			}
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AttendanceTime->id = $id;
		if (!$this->AttendanceTime->exists()) {
			throw new NotFoundException(__('Invalid attendance time'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AttendanceTime->delete()) {
			$this->Session->setFlash(__('The attendance time has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attendance time could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * index method
 *
 * @return void
 */
	public function editAll() {
		$user_id = $this->Auth->user('id');
		$year = date('Y');
		$month = date('m');

		if ($this->request->is('post')) {
			$year = $this->request->data['AttendanceConfig']['year'];
			$month = $this->request->data['AttendanceConfig']['month'];

			$query = array(
				'conditions' => array(
					'VAtTime.user_id' => $user_id,
					'VAtTime.year' => $year,
					'VAtTime.month' => $month,
					),
				'order' => 'VAtTime.day,VAtTime.start_date',
			);

			if ($this->request->data['AttendanceConfig']['project_id'] != '') {
				$query['conditions']['VAtTime.project_id'] = $this->request->data['AttendanceConfig']['project_id'];
			}
			if ($this->request->data['AttendanceConfig']['service_category_id'] != '') {
				$query['conditions']['VAtTime.service_category_id'] = $this->request->data['AttendanceConfig']['service_category_id'];
			}

			$data = $this->VAtTime->find('all', $query);
		} else {
			$data = $this->VAtTime->find('all', array(
				'conditions' => array(
					'VAtTime.user_id' => $user_id,
					'VAtTime.year' => date('Y'),
					'VAtTime.month' => date('m'),
					),
				'order' => 'VAtTime.day,VAtTime.start_date',
			));
		}

		// 検索フォーム作成
		$atConfigs = $this->AttendanceConfig->find('all',
			array(
				'fields' => array('project_id', 'service_category_id'),
				'conditions' => array('AttendanceConfig.user_id' => $user_id),
				'recursive' => -1,
			));
		$project_array = array();
		$service_array = array();
		foreach ($atConfigs as $key => $value) {
			array_push($project_array, $value['AttendanceConfig']['project_id']);
			array_push($service_array, $value['AttendanceConfig']['service_category_id']);
		}
		$project_array = array_unique($project_array);
		$service_array = array_unique($service_array);

		$projects = $this->MstProject->find('list',
			array(
				'fields' => array('mst_name'),
				'conditions' => array('MstProject.id' => $project_array),
				'order' => array('MstProject.id')
			));

		$serviceCategories = $this->MstServiceCategory->find('list',
			array(
				'fields' => array('mst_name'),
				'conditions' => array('MstServiceCategory.id' => $service_array),
				'order' => array('MstServiceCategory.id')
			));

		$emptyItem = array('' => '-');

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

		$this->set('VAtTimes', $data);
		$this->set('year', $year);
		$this->set('month', $month);
		$this->set('projects', $emptyItem + $projects);
		$this->set('serviceCategories', $emptyItem + $serviceCategories);
	}
}