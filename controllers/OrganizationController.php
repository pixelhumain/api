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
          'disabled'              => 'citizenToolKit.controllers.organization.DisableAction',
          /*'update'            => 'citizenToolKit.controllers.organization.UpdateAction',
          'join'              => 'citizenToolKit.controllers.organization.JoinAction',
          'addneworganizationasmember'  => 'citizenToolKit.controllers.organization.AddNewOrganizationAsMemberAction',
          'declaremeadmin'          => 'citizenToolKit.controllers.organization.DeclareMeAdminAction',
          "updatesettings"        => 'citizenToolKit.controllers.organization.UpdateSettingsAction'*/
	    );
	}
}

?>