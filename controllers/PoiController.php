<?php

class PoiController extends ApiController {

    protected function beforeAction($action) {
    	parent::initPage();
    	return parent::beforeAction($action);
  	}
  	public function actions()
	{
	    return array(
	    	'get'     		=> 'citizenToolKit.controllers.poi.GetAction',
	    );
	}
}

?>