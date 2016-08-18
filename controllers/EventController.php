<?php
class EventController extends ApiController {

  protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
          'get'                   	=> 'citizenToolKit.controllers.event.GetAction',
          'save'           		  	=> 'citizenToolKit.controllers.event.SaveAction', 
          'updatefield'           	=> 'citizenToolKit.controllers.event.UpdateFieldAction', 

          // A faire sur swagger
          'update'                	=> 'citizenToolKit.controllers.event.UpdateAction',
          'delete' 					=> 'citizenToolKit.controllers.event.DeleteAction',
          'removeattendee'			=> 'citizenToolKit.controllers.event.RemoveAttendeeAction',
          "updatesettings"        	=> 'citizenToolKit.controllers.event.UpdateSettingsAction'
          //'getcalendar'               => 'citizenToolKit.controllers.event.GetCalendarAction',
	    );
	}
}
