<?php
App::uses('AppController', 'Controller');
/**
 * MstServiceCategories Controller
 *
 * @property MstServiceCategory $MstServiceCategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MstServiceCategoriesController extends AppController {

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
		$this->MstServiceCategory->recursive = 0;
		$this->set('mstServiceCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MstServiceCategory->exists($id)) {
			throw new NotFoundException(__('Invalid mst service category'));
		}
		$options = array('conditions' => array('MstServiceCategory.' . $this->MstServiceCategory->primaryKey => $id));
		$this->set('mstServiceCategory', $this->MstServiceCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MstServiceCategory->create();
			if ($this->MstServiceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The mst service category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mst service category could not be saved. Please, try again.'));
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
		if (!$this->MstServiceCategory->exists($id)) {
			throw new NotFoundException(__('Invalid mst service category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MstServiceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The mst service category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mst service category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MstServiceCategory.' . $this->MstServiceCategory->primaryKey => $id));
			$this->request->data = $this->MstServiceCategory->find('first', $options);
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
		$this->MstServiceCategory->id = $id;
		if (!$this->MstServiceCategory->exists()) {
			throw new NotFoundException(__('Invalid mst service category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MstServiceCategory->delete()) {
			$this->Session->setFlash(__('The mst service category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mst service category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
