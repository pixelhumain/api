<?php
/**
 * LinkController.php
 *
 * Manage Links between Organization, Person, Projet and Event
 *
 * Date: 16/08/2016
 */
class LinkController extends CommunecterController {

	protected function beforeAction($action) {
		parent::initPage();
		return parent::beforeAction($action);
	}
	public function actions()
	{
	    return array(	
			'follow' 			=> 'citizenToolKit.controllers.link.FollowAction',
			'connect' 			=> 'citizenToolKit.controllers.link.ConnectAction',
			'disconnect' 		=> 'citizenToolKit.controllers.link.DisconnectAction',

			// a faire sur Swagger
			'removemember'     	=> 'citizenToolKit.controllers.link.RemoveMemberAction',
	        "removerole"		=> 'citizenToolKit.controllers.link.RemoveRoleAction',
			'removecontributor' => 'citizenToolKit.controllers.link.RemoveContributorAction',
			'disconnect' 		=> 'citizenToolKit.controllers.link.DisconnectAction',
			
	    );
	}
}

?>