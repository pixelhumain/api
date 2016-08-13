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
          'get'                   => 'citizenToolKit.controllers.person.GetAction', 
	        'authenticate'          => 'citizenToolKit.controllers.person.AuthenticateAction',
          'changepassword'     => 'citizenToolKit.controllers.person.ChangePasswordAction',
          'register'           => 'citizenToolKit.controllers.person.RegisterAction',
          'getuseridbymail'   => 'citizenToolKit.controllers.person.GetUserIdByMailAction',
          'updatefield'        => 'citizenToolKit.controllers.person.UpdateFieldAction',
          /*
          'update'             => 'citizenToolKit.controllers.person.UpdateAction',
          "updatesettings"    => 'citizenToolKit.controllers.person.UpdateSettingsAction',
          */
	    );
	}
}