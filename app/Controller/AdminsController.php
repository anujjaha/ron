<?php
App::uses('AppController', 'Controller');

class AdminsController extends AppController {
    public $uses = array('User','Usermeta');
    
   
    
    
    public function index() {
        $this->setcrmlayout();
    }
    
    public function company() {
        $this->setcrmlayout();
        $companies = $this->User->find('all',array('conditions'=>
                                                    array('User.role'=>  crmsystem::CRMAPP_USER_ROLE_COMPANY)
                                                   ));
        $this->set('companies',$companies);
    }
    
}