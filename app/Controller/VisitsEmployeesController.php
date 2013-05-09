<?php
App::uses('AppController', 'Controller');
/**
 * VisitsEmployees Controller
 *
 * @property VisitsEmployee $VisitsEmployee
 */
class VisitsEmployeesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VisitsEmployee->recursive = 0;
		$this->set('visitsEmployees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VisitsEmployee->exists($id)) {
			throw new NotFoundException(__('Invalid visits employee'));
		}
		$options = array('conditions' => array('VisitsEmployee.' . $this->VisitsEmployee->primaryKey => $id));
		$this->set('visitsEmployee', $this->VisitsEmployee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VisitsEmployee->create();
			if ($this->VisitsEmployee->save($this->request->data)) {
				$this->Session->setFlash(__('The visits employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visits employee could not be saved. Please, try again.'));
			}
		}
		$employees = $this->VisitsEmployee->Employee->find('list');
		$visits = $this->VisitsEmployee->Visit->find('list');
		$this->set(compact('employees', 'visits'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VisitsEmployee->exists($id)) {
			throw new NotFoundException(__('Invalid visits employee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VisitsEmployee->save($this->request->data)) {
				$this->Session->setFlash(__('The visits employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visits employee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VisitsEmployee.' . $this->VisitsEmployee->primaryKey => $id));
			$this->request->data = $this->VisitsEmployee->find('first', $options);
		}
		$employees = $this->VisitsEmployee->Employee->find('list');
		$visits = $this->VisitsEmployee->Visit->find('list');
		$this->set(compact('employees', 'visits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VisitsEmployee->id = $id;
		if (!$this->VisitsEmployee->exists()) {
			throw new NotFoundException(__('Invalid visits employee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VisitsEmployee->delete()) {
			$this->Session->setFlash(__('Visits employee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Visits employee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
