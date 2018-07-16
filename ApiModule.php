<?php
/**
 * Api Module
 *
 * @author Tibor Katelbach <oceatoon@mail.com>
 * @version 0.0.3
 *
*/

class ApiModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		Yii::app()->setComponents(array(
		    'errorHandler'=>array(
		        'errorAction'=>'/'.$this->id.'/error'
		    )
		));
		
		Yii::app()->homeUrl = Yii::app()->createUrl($this->id);
		Yii::app()->theme  = $this->getTheme();

		Yii::app()->language = (isset(Yii::app()->session["lang"])) ? Yii::app()->session["lang"] : 'fr';
		
		// import the module-level models and components
		$this->setImport(array(
			'citizenToolKit.models.*',
			'ressources.models.*',
			'eco.models.*',
			'places.models.*',
			$this->id.'.models.*',
			$this->id.'.components.*',
			$this->id.'.messages.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if (parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
	private $_assetsUrl;

	public function getAssetsUrl()
	{
		if ($this->_assetsUrl === null)
	        $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
	            Yii::getPathOfAlias($this->id.'.assets') );
	    return $this->_assetsUrl;
	}

	public function getTheme() {
		$theme = "CO2";
		if (!empty(Yii::app()->params['theme'])) {
			$theme = Yii::app()->params['theme'];
		} else if (empty(Yii::app()->theme)) {
			$theme = "CO2";
		}

		if(@$_GET["tpl"] == "iframesig"){ $theme = $_GET["tpl"]; }
		return $theme;
	}
}
