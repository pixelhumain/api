<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class ApiController extends Controller
{
  public $version = "v0.1.1";
  public $versionDate = "12/01/2017 15:00";
  public $title = "API Communecter";
  public $subTitle = "se connecter à sa commune";
  public $pageTitle = "API Communecter, se connecter à sa commune";
  public static $moduleKey = "api";
  public $keywords = "connecter, réseau, sociétal, citoyen, société, regrouper, commune, communecter, social";
  public $description = "Communecter : Connecter à sa commune, réseau sociétal, le citoyen au centre de la société.";
  
  public $notifications = array();
  //TODO - Faire le tri des liens
  //TODO - Les children ne s'affichent pas dans le menu
 
  public $pages = array(
    "data"=> array(
        "get"              => array("href" => "/ph/api/data/get", "public" => true),
    ),
    "default"=> array(
        "index"              => array("href" => "/ph/api/default/index", "public" => true),
    ),
    "person"=> array(
        "get"                 => array("href" => "/ph/api/person/get", "public" => true),
        //"authenticate"        => array("href" => "/ph/api/person/authenticate",'title' => "Authentication"),
        //'changepassword'      => array("href" => "/ph/api/person/changepassword"),
        //"register"            => array("href" => "/ph/api/person/register"),
        //'getuseridbymail'     => array("href" => "/ph/api/getuseridbymail"),
        //"updatefield"         => array("href" => "/ph/api/person/updatefield"),
    ),
    "organization"=> array(
        "get"                   => array("href" => "/ph/api/organization/get", "public" => true),
        /*"updatefield"           => array("href" => "/ph/api/organization/updatefield"),
        'save'                  => array("href" => "/ph/api/organization/save"),
        'disabled'              => array("href" => "/ph/api/organization/disabled"),
        "update"                => array("href" => "/ph/api/organization/update"),
        "updatesettings"        => array('href'=>"/ph/api/organization/updatesettings"),
        "join"                  => array("href" => "/ph/api/organization/join"),*/
    ),
    "event"=> array(
        "get"                 => array("href" => "/ph/api/event/get", "public" => true),
        /*"save"                => array("href" => "/ph/api/event/save"),
        "updatefield"         => array("href" => "/ph/api/event/updatefield"),
        "update"              => array("href" => "/ph/api/event/update"),
        "removeattendee"      => array("href" => "/ph/api/event/removeattendee"),
        "delete"              => array("href" => "/ph/api/event/delete"),
        "updatesettings"      => array('href' => "/ph/api/event/updatesettings")*/
    ),
    "project"=> array(
        "get"                 => array("href" => "/ph/api/project/get", "public" => true),
        /*"save"                => array("href" => "/ph/api/event/save"),
        "updatefield"         => array("href" => "/ph/api/project/updatefield"),
        "savecontributor"     => array("href" => "/ph/api/project/savecontributor"),
        "removeproject"       => array("href" => "/ph/api/project/removeproject"),
        "updatefield"         => array("href" => "/ph/api/project/updatefield"),
        "updatesettings"   => array('href'=>"/ph/api/project/updatesettings"),*/
    ),
    "link"=> array(
        /*'connect'             => array("href" => "/ph/api/link/connect", "public" => true),
        'follow'              => array("href" => "/ph/api/link/follow", "public" => true),
        'disconnect'          => array("href" => "/ph/api/link/disconnect", "public" => true),
        "removemember"        => array("href" => "/ph/api/link/removemember"),
        "removecontributor"   => array("href" => "/ph/api/link/removecontributor"),
        "validate"            => array("href" => "/ph/api/link/validate"),*/
    ),
    "news"=> array(
      'get'             => array("href" => "/ph/api/news/get", "public" => true),
      /*"save"            => array( "href" => "/ph/api/news/save"),
      "delete"          => array( "href" => "/ph/api/news/delete"),
      "updatefield"     => array( "href" => "/ph/api/news/updatefield"),*/
      
    ),
    "comment"=> array(
      /*"save"            => array( "href" => "/ph/api/comment/save"),
      'abuseprocess'    => array( "href" => "/ph/api/comment/abuseprocess"),
      "delete"          => array( "href" => "/ph/api/comment/delete"),
      "updatefield"     => array( "href" => "/ph/api/comment/updatefield"),*/
    ),
    "need"=> array(
        /*"saveneed"              => array("href" => "/ph/api/need/saveneed"),
        "updatefield"           => array("href" => "/ph/api/need/updatefield"),
        "addhelpervalidation"   => array("href" => "/ph/api/need/addhelpervalidation"),*/
        
      ),
    "city"=> array(
      'get'                     => array("href" => "/ph/api/city/get", "public" => true),
      /*'getcitydata'             => array("href" => "/ph/api/city/getcitydata", "public" => true),
      'getcityjsondata'         => array("href" => "/ph/api/city/getcityjsondata", "public" => true),
      'getoptiondata'           => array("href" => "/ph/api/city/getoptiondata"),
      'getlistoption'           => array("href" => "/ph/api/city/getlistoption"),
      'getpodopendata'          => array("href" => "/ph/api/city/getpodopendata"),
      'addpodopendata'          => array("href" => "/ph/api/city/addpodopendata"),
      'getlistcities'           => array("href" => "/ph/api/city/getlistcities"),
      'updatecitiesgeoformat'   => array("href" => "/ph/api/city/updatecitiesgeoformat","public" => true),
      'getinfoadressbyinsee'    => array("href" => "/ph/api/city/getinfoadressbyinsee"),
      'cityexists'              => array("href" => "/ph/api/city/cityexists"),
      'autocompletemultiscope'  => array("href" => "/ph/api/city/autocompletemultiscope"),*/
    ),

    "tool"=> array(
      'datetime'                => array("href" => "/ph/api/tool/datetime", "public" => true),
      ),

  );

  function initPage(){
    
    //review the value of the userId to check loosing session
    //creates an issue with Json requests : to clear add josn:true on the page definition here 
    //if( Yii::app()->request->isAjaxRequest && (!isset( $page["json"] )) )
      //echo "<script type='text/javascript'> userId = '".Yii::app()->session['userId']."'; var blackfly = 'sosos';</script>";
    
    //managed public and private sections through a url manager
    $page = $this->pages[Yii::app()->controller->id][Yii::app()->controller->action->id];
    
    if( isset( $_POST["X-Auth-Token"]) && Authorisation::isMeteorConnected( $_POST["X-Auth-Token"] ) ){
      $prepareData = false;
    }
      
    CornerDev::addWorkLog("communecter","you@dev.com",Yii::app()->controller->id,Yii::app()->controller->action->id);
    
  }
  protected function beforeAction($action){
    if( $_SERVER['SERVER_NAME'] == "127.0.0.1" || $_SERVER['SERVER_NAME'] == "localhost" ){
      Yii::app()->assetManager->forceCopy = true;
    }

    $this->manageLog();

    return parent::beforeAction($action);
  }


  protected function afterAction($action){

    return parent::afterAction($action);
  }

  /**
   * Start the log process
   * Bring back log parameters, then set object before action and save it if there is no return
   * If there is return, the method save in session the log object which will be finished and save in db during the method afteraction
   */
  protected function manageLog(){
    //Bring back logs needed
    $actionsToLog = Log::getActionsToLog();
    $actionInProcess = Yii::app()->controller->id.'/'.Yii::app()->controller->action->id;

    //Start logs if necessary
    if(isset($actionsToLog[$actionInProcess])) {

      //To let several actions log in the same time
      if(!$actionsToLog[$actionInProcess]['waitForResult']){
        Log::save(Log::setLogBeforeAction($actionInProcess));
      }else if(isset(Yii::app()->session["logsInProcess"]) && is_array(Yii::app()->session["logsInProcess"])){
        Yii::app()->session["logsInProcess"] = array_merge(
          Yii::app()->session["logsInProcess"],
          array($actionInProcess => Log::setLogBeforeAction($actionInProcess))
        );
      } else{
         Yii::app()->session["logsInProcess"] = array($actionInProcess => Log::setLogBeforeAction($actionInProcess));
      }
    }
  }
}

