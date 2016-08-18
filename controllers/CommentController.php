<?php
/**
 * 
 */
class CommentController extends ApiController {
  

	protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions()
	{
	    return array(
	        'save'					=> 'citizenToolKit.controllers.comment.SaveAction',
	        'abuseprocess'			=> 'citizenToolKit.controllers.comment.AbuseProcessAction',
	        'delete'				=> 'citizenToolKit.controllers.comment.DeleteAction',
	        'updatefield'			=> 'citizenToolKit.controllers.comment.UpdateFieldAction',
	    );
	}
}

?>