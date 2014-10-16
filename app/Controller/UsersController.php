<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Cookie');

    public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('add','login', 'logout');
    }

    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            
            
            if ($this->Auth->login()) {
                if ($this->request->data['User']['rememberMe'] == 1) {
                $cookieTime = "12 months"; // You can do e.g: 1 week, 17 weeks, 14 days
                // remove "remember me checkbox"
                // hash the user's password
                $this->request->data['User']['password'] = $this->request->data['User']['password'];
                // write the cookie
                $this->Cookie->write('rememberMe', $this->request->data['User'], true, $cookieTime);
                } else {
                    $cookieExpireTime = 0;
                    $this->Cookie->write('rememberMe', "", true, $cookieExpireTime);
                }
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
       
        if($this->Cookie->read('rememberMe')) {
            $this->request->data['User'] = $this->Cookie->read('rememberMe');
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }    
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
            $user_role = $this->Auth->user('role');
            if($user_role == crmsystem::CRMAPP_USER_ROLE_ADMIN) {
                $this->redirect(array('controller'=>'admins','action'=>'index'));
            }
                $this->layout = "admin";
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
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
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
