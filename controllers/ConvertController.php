<?php
class ConvertController extends ApiController {
  
	protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions()
	{
	    return array(
	       	'index' 	=> 'citizenToolKit.controllers.convert.IndexAction',
	       	'get' 		=> 'citizenToolKit.controllers.convert.GetAction',
	       	'geojson'   => 'citizenToolKit.controllers.convert.GeoJsonAction',
	    );
	}
}

?>

