<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	
	public $names		= 'Users';
	public $helpers 	= array('Html', 'Form', 'Session');
    public $components 	= array('Auth');
    
/**
 * register method
 */
	
	public function beforeFilter() {
        $this->Auth->allow('add'); // Letting users register themselves
        parent::beforeFilter();
    }
	
/**
 * login method
 */	

	public function login() {
		$this->layout = 'login';
		
        if ($this->Auth->login()) {
            $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
		
		$departments = $this->User->Department->find('list');
		$this->set(compact('departments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->User->id = $id;
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		//Dropdown menu for groups and departments
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
		
		$departments = $this->User->Department->find('list');
		$this->set(compact('departments'));
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
	
	    if ($this->User->delete($id)) {
	        $this->Session->setFlash(__('The post with id: %s has been deleted.', $id));
	        $this->redirect(array('action' => 'index'));
	    }
	}
	
/**
 * logout method
 */
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
