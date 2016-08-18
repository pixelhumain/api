<?php
class ProjectController extends ApiController {

  protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
          'get'                   	=> 'citizenToolKit.controllers.project.GetAction',
          'updatefield'           	=> 'citizenToolKit.controllers.project.UpdateFieldAction',
          'save'					=> 'citizenToolKit.controllers.project.SaveAction',

          // A faire sur swagger
          'update'					=> 'citizenToolKit.controllers.project.UpdateAction',
          'savecontributor'			=> 'citizenToolKit.controllers.project.SaveContributorAction',
          'editchart'				=> 'citizenToolKit.controllers.project.EditChartAction',
          "updatesettings" 			=> 'citizenToolKit.controllers.project.UpdateSettingsAction'
	    );
	}
}

?>