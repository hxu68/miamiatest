<?php
App::uses('AppController', 'Controller');
/**
 * ActivitiesVisits Controller
 *
 * @property ActivitiesVisit $ActivitiesVisit
 */
class ActivitiesVisitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActivitiesVisit->recursive = 0;
		$this->set('activitiesVisits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivitiesVisit->exists($id)) {
			throw new NotFoundException(__('Invalid activities visit'));
		}
		$options = array('conditions' => array('ActivitiesVisit.' . $this->ActivitiesVisit->primaryKey => $id));
		$this->set('activitiesVisit', $this->ActivitiesVisit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivitiesVisit->create();
			if ($this->ActivitiesVisit->save($this->request->data)) {
				$this->Session->setFlash(__('The activities visit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities visit could not be saved. Please, try again.'));
			}
		}
		$visits = $this->ActivitiesVisit->Visit->find('list');
		$activities = $this->ActivitiesVisit->Activity->find('list');
		$this->set(compact('visits', 'activities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivitiesVisit->exists($id)) {
			throw new NotFoundException(__('Invalid activities visit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActivitiesVisit->save($this->request->data)) {
				$this->Session->setFlash(__('The activities visit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities visit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActivitiesVisit.' . $this->ActivitiesVisit->primaryKey => $id));
			$this->request->data = $this->ActivitiesVisit->find('first', $options);
		}
		$visits = $this->ActivitiesVisit->Visit->find('list');
		$activities = $this->ActivitiesVisit->Activity->find('list');
		$this->set(compact('visits', 'activities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivitiesVisit->id = $id;
		if (!$this->ActivitiesVisit->exists()) {
			throw new NotFoundException(__('Invalid activities visit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActivitiesVisit->delete()) {
			$this->Session->setFlash(__('Activities visit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activities visit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
