<?php
class OrganizationController extends ApiController {

  protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions(){
	    return array(
          'get'                   => 'citizenToolKit.controllers.organization.GetAction',
          'save'                  => 'citizenToolKit.controllers.organization.SaveAction',
          'updatefield'           => 'citizenToolKit.controllers.organization.UpdateFieldAction',
          
          // A faire dans swagger
          'disabled'                    => 'citizenToolKit.controllers.organization.DisableAction',
          'addneworganizationasmember'  => 'citizenToolKit.controllers.organization.AddNewOrganizationAsMemberAction',
          'update'                      => 'citizenToolKit.controllers.organization.UpdateAction',
          "updatesettings"              => 'citizenToolKit.controllers.organization.UpdateSettingsAction'

          /*'update'            => 'citizenToolKit.controllers.organization.UpdateAction',
          'join'              => 'citizenToolKit.controllers.organization.JoinAction',
          
          'declaremeadmin'          => 'citizenToolKit.controllers.organization.DeclareMeAdminAction',
          "updatesettings"        => 'citizenToolKit.controllers.organization.UpdateSettingsAction'*/
	    );
	}
}

?>