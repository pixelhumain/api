<?php
class EventController extends ApiController {

  protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
          'get'                   => 'citizenToolKit.controllers.event.GetAction', 
          'updatefield'           => 'citizenToolKit.controllers.event.UpdateFieldAction', 
	    );
	}
}
