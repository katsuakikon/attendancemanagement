<?php
App::uses('AppController', 'Controller');
/**
 * MstProjects Controller
 *
 * @property MstProject $MstProject
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MstProjectsController extends AppController {

	public function isAuthorized($user) {
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true;
		}
		// デフォルトは拒否
		return false;
	}
	
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
		$this->MstProject->recursive = 0;
		$this->set('mstProjects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MstProject->exists($id)) {
			throw new NotFoundException(__('Invalid mst project'));
		}
		$options = array('conditions' => array('MstProject.' . $this->MstProject->primaryKey => $id));
		$this->set('mstProject', $this->MstProject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MstProject->create();
			if ($this->MstProject->save($this->request->data)) {
				$this->Session->setFlash(__('The mst project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mst project could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->MstProject->exists($id)) {
			throw new NotFoundException(__('Invalid mst project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstProject->save($this->request->data)) {
				$this->Session->setFlash(__('The mst project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mst project could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstProject.' . $this->MstProject->primaryKey => $id));
			$this->request->data = $this->MstProject->find('first', $options);
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
		$this->MstProject->id = $id;
		if (!$this->MstProject->exists()) {
			throw new NotFoundException(__('Invalid mst project'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstProject->delete()) {
			$this->Session->setFlash(__('The mst project has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mst project could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
