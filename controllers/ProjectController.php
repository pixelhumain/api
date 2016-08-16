<?php
class ProjectController extends ApiController {

  protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
          'get'                   => 'citizenToolKit.controllers.project.GetAction',
          'updatefield'           => 'citizenToolKit.controllers.project.UpdateFieldAction', 
	    );
	}
}

?>