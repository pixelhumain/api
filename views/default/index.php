<!DOCTYPE html>
<html><head></head><body>
<h1><?php echo $docs["name"];?></h1>
<hr/>
<div id="divMenu" />
	<ul>
		<?php 
			foreach ($docs["folders"] as $keyFolder => $valuesFolder) {?>
				<li>
					<a href="javascript:;" onclick="changeSubMenu('<?php echo $valuesFolder["id"]; ?>')"> 
						<?php echo $valuesFolder["name"]; ?>
					</a>
				</li>
<?php   	}?>
	</ul>

</div>
<hr/>
<div id="divSubMenu" />
	<ul id="subMenu">
		
	</ul>

</div>
<hr/>

<div id="divContainer" />
<?php echo $docs["description"]?>
</div>
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
		$("#subMenu").html(str);
	}

	function changeContainer(idContainer){
		console.log("changeContainer");
		var str = "";
		$.each(docs.requests, function(keyRequests, valueRequests){
			if(valueRequests.id == idContainer){
				
				str += valueRequests.description.replace("\n", "<br/>").replace("\n\n", "<br/><br/>");;
				//return false;
			}	
			
		});
		$("#divContainer").html(str);
	}

</script>
</body>