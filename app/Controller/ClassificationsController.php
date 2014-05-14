<?php
App::uses('AppController', 'Controller');
/**
 * Classifications Controller
 *
 * @property Classification $Classification
 */
class ClassificationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Classification->recursive = 0;
		$this->set('classifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Classification->exists($id)) {
			throw new NotFoundException(__('Invalid classification'));
		}
		$options = array('conditions' => array('Classification.' . $this->Classification->primaryKey => $id));
		$this->set('classification', $this->Classification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Classification->create();
			if ($this->Classification->save($this->request->data)) {
				$this->Session->setFlash(__('The classification has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classification could not be saved. Please, try again.'), 'flash/error');
			}
		}
		#$documents = $this->Classification->Document->find('list');
		$this->set(compact('documents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Classification->exists($id)) {
			throw new NotFoundException(__('Invalid classification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Classification->save($this->request->data)) {
				$this->Session->setFlash(__('The classification has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classification could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Classification.' . $this->Classification->primaryKey => $id));
			$this->request->data = $this->Classification->find('first', $options);
		}
		$documents = $this->Classification->Document->find('list');
		$this->set(compact('documents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ($this->request->is('get')) {
		        throw new MethodNotAllowedException();
		    }
		
		    if ($this->Classification->delete($id)) {
		        $this->Session->setFlash(__('The classification with id: %s has been deleted.', $id));
		        $this->redirect(array('action' => 'index'));
		    }
		}
}
