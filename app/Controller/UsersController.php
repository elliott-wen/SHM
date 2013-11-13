<?php
class UsersController extends AppController
{
	/*
	 * Login Function
	 */
	public function login() 
	{
		if (AuthComponent::user('id'))
		{
			return $this->redirect($this->Auth->redirect());
		}
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirect());
	        }
	        $this->Session->setFlash(__('Invalid username or password, try again please.'));
	    }
	}
	
	/*
	 * Logout Function
	 */
	public function logout() 
	{
    	return $this->redirect($this->Auth->logout());
	}
	
	
	
}
