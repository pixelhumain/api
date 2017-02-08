<?php
class ToolController extends ApiController {

  protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
          'get'                   	=> 'citizenToolKit.controllers.tool.GetAction',
	    );
	}
}

?>