<?php
class NeedController extends ApiController {

    protected function beforeAction($action) {
    	parent::initPage();
    	return parent::beforeAction($action);
  	}
  	public function actions()
	{
	    return array(
			'saveneed'       		=> 'citizenToolKit.controllers.need.SaveNeedAction',
			'updatefield'       	=> 'citizenToolKit.controllers.need.UpdateFieldAction',
			'addhelpervalidation'   => 'citizenToolKit.controllers.need.AddHelperValidationAction',
	    );
	}
}


?>