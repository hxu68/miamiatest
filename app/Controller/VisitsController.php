<?php
App::uses('AppController', 'Controller');
/**
 * Visits Controller
 *
 * @property Visit $Visit
 */
class VisitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Visit->recursive = 0;
		$this->set('visits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Visit->exists($id)) {
			throw new NotFoundException(__('Invalid visit'));
		}
		$options = array('conditions' => array('Visit.' . $this->Visit->primaryKey => $id));
		$this->set('visit', $this->Visit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Visit->create();
			if ($this->Visit->save($this->request->data)) {
				$this->Session->setFlash(__('The visit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visit could not be saved. Please, try again.'));
			}
		}
        $employees = $this->Employees->find();
        $this->set(compact('employees'));
		$projects = $this->Visit->Projects->find('list');
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Visit->exists($id)) {
			throw new NotFoundException(__('Invalid visit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Visit->save($this->request->data)) {
				$this->Session->setFlash(__('The visit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Visit.' . $this->Visit->primaryKey => $id));
			$this->request->data = $this->Visit->find('first', $options);
		}
		$projects = $this->Visit->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Visit->id = $id;
		if (!$this->Visit->exists()) {
			throw new NotFoundException(__('Invalid visit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Visit->delete()) {
			$this->Session->setFlash(__('Visit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Visit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
