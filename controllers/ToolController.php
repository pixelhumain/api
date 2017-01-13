<?php
/**
* Created on examples of other controllers 
* api tool datetime for update rtctime of Smart-Citizen-Kit 
* @author: Jean Daniel CAZAL <danzalkay551@gmail.com>
* Date: 12/01/2017
*/

class ToolController extends ApiController {
	
	protected function beforeAction($action) {
    	parent::initPage();
    	return parent::beforeAction($action);
  	}

  	public function actions(){
	    return array(
          
          'datetime'                   	=> 'citizenToolKit.controllers.tool.DateTimeAction'
          
        );
	}

}
?>