<?php

class NewsController extends ApiController {

    protected function beforeAction($action) {
    	parent::initPage();
    	return parent::beforeAction($action);
  	}
  	public function actions()
	{
	    return array(
	    	'get'     		=> 'citizenToolKit.controllers.news.GetAction',
	        'save'     		=> 'citizenToolKit.controllers.news.SaveAction',
	        'delete'     	=> 'citizenToolKit.controllers.news.DeleteAction',
	        'updatefield'   => 'citizenToolKit.controllers.news.UpdateFieldAction',
	        /*'extractprocess' => array (
	            'class'   => 'ext.extract-url-content.ExtractProcessAction',
	            'options' => array(
	                // Tmp dir to store cached resized images 
	                'cache_dir'   => Yii::getPathOfAlias('webroot') . '/assets/',	 
	                // Web root dir to search images from
	                'base_dir'    => Yii::getPathOfAlias('webroot') . '/',
	            )
	        )*/
	    );
	}
}

?>