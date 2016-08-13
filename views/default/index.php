<?php 
	$cssAnsScriptFilesModule = array(
	  '/plugins/showdown/showdown.min.js',
	  '/plugins/showdown/showdown-table.min.js'

	);
	HtmlHelper::registerCssAndScriptsFiles( $cssAnsScriptFilesModule ,Yii::app()->theme->baseUrl."/assets");
	
?>
<h1><?php echo $docs["name"];?></h1>
<hr/>
<div id="divSubMenu" />
	<ul id="subMenu">
		
	</ul>

</div>
<hr/>

<div id="divContainer" /></div>

<?php 
	$this->renderPartial('./menu/menuLeft', array("page" => "accueil", 
												 "folders" => $docs["folders"])); 
?>

<script type="text/javascript">
	
	var docs = <?php echo $json; ?>;
	jQuery(document).ready(function() {
		//var docs = jQuery.parseJSON(docsJson) ;
		console.dir(docs);
	});

	function changeSubMenu(idSubMenu){
		console.log("changeSubMenu");
		var str = "";
		$.each(docs.requests, function(keyRequests, valueRequests){
			if(valueRequests.folder == idSubMenu){
				
				str += "<li>"+
							"<a href='javascript:;' onclick='changeContainer(\""+valueRequests.id+"\")'>"+
								valueRequests.name+
							"</a>"+
						"</li>";
			}	
			
		});
		/*console.log("#sub-menu-left-container-"+idSubMenu);
		$("#sub-menu-left-container-"+idSubMenu).html(str);*/
		$("#subMenu").html(str);
	}

	function changeContainer(idContainer){
		console.log("changeContainer");
		var str = "";
		$.each(docs.requests, function(keyRequests, valueRequests){
			if(valueRequests.id == idContainer){
				str += "### Méthod : "+ valueRequests.method +" \n";
				str += "### Url : "+ changeURL(valueRequests.url) +" \n";
				str += "### Params \n";
				if(typeof valueRequests.data != "undefined"){
					str += "| Name | Type |" ;
					$.each(valueRequests.data, function(keyData, valueData){
						str += "|" + valueData.key+ " | " + valueData.type + " | ";
					});
				}
				
				str += "### Description \n";
				str += "\n"+valueRequests.description;
				//return false;
			}	
			
		});
		var converter = new showdown.Converter({extensions: ['table']}),
	    	text      = converter.makeHtml(str);
		$("#divContainer").html(text);
	}

	function changeURL(url){
		console.log("newUrl");
		var newUrl = "";
		if(url.indexOf("{{url}}") != -1){
			newUrl = baseUrl+'/api'+ url.substring(7);
		}
		newUrl
		return newUrl ;
	}


	function check(url){
		console.log("newUrl");
		var newUrl = "";
		if(url.indexOf("{{url}}") != -1){
			newUrl = baseUrl+'/api'+ url.substring(7);
		}
		newUrl
		return newUrl ;
	}

</script>