<?php
class PersonController extends ApiController {

  public $hasSocial = false;
  public $loginRegister = true;

  
  public function accessRules() {
    return array(
      // not logged in users should be able to login and view captcha images as well as errors
      array('allow', 'actions' => array('index','graph','register','register2')),
      // logged in users can do whatever they want to
      array('allow', 'users' => array('@')),
      // not logged in users can't do anything except above
      array('deny'),
    );
  }

	protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
	        'authenticate'       => 'citizenToolKit.controllers.person.AuthenticateAction',    
	    );
	}
}