<?php
/**
 * DefaultController.php
 *
 * OneScreenApp for Communecting people
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
 * Date: 14/03/2014
 */
class DefaultController extends ApiController {

    
    protected function beforeAction($action)
  	{

      parent::initPage();

      
		  return parent::beforeAction($action);
  	}

    /**
     * Home page
     */
	public function actionIndex() 
	{
    $this->layout = "//layouts/mainApi";
    $docsJSON = str_replace("'", "&quot;", file_get_contents("../../modules/api/data/docs.json", FILE_USE_INCLUDE_PATH));
    
    $docs = json_decode($docsJSON,true);

    foreach ($docs["requests"] as $key => $value) {
      $value["tests"] = "";
      $docs["requests"][$key] = $value;
    }
    $docsJSON = json_encode($docs);

    //$docsJSON = str_replace(array("\n\n", "\r\n", "\n", "\r"), "", $docsJSON);
   
    //$sub = substr ( $docsJSON,5725);
    $params = array("docs" => $docs,
                    "json" => $docsJSON);
    $this->render("index2", $params);
  }

  
}