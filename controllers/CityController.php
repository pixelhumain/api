<?php
class CityController extends ApiController {
  

	protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions()
	{
	    return array(
	    	'get'					=> 'citizenToolKit.controllers.city.GetAction',
	        'getcitydata'     		=> 'citizenToolKit.controllers.city.GetCityDataAction',
	        'getcityjsondata'     	=> 'citizenToolKit.controllers.city.GetCityJsonDataAction',
	        'getcitiesdata'     	=> 'citizenToolKit.controllers.city.GetCitiesDataAction',
	        'getoptiondata'			=> 'citizenToolKit.controllers.city.GetOptionDataAction',
	        'getlistoption'			=> 'citizenToolKit.controllers.city.GetListOptionAction',
	        'getpodopendata'		=> 'citizenToolKit.controllers.city.GetPodOpenDataAction',
	        'addpodopendata'		=> 'citizenToolKit.controllers.city.AddPodOpenDataAction',
	        'getlistcities'			=> 'citizenToolKit.controllers.city.GetListCitiesAction',
	        'updatecitiesgeoformat' => 'citizenToolKit.controllers.city.UpdateCitiesGeoFormatAction',
	        'getinfoadressbyinsee'  => 'citizenToolKit.controllers.city.GetInfoAdressByInseeAction',
	        'cityexists'  			=> 'citizenToolKit.controllers.city.CityExistsAction',
	        'autocompletemultiscope'=> 'citizenToolKit.controllers.city.AutocompleteMultiScopeAction',

	    );
	}
}