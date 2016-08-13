
<?php 
	$cssAnsScriptFilesModule = array(
		'/css/default/menu.css',
		'/js/default/menu.js',
	);
	HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, $this->module->assetsUrl);
?>

<style>
	.hidden-xs.main-menu-left.inSig{
		display:inline !important;
	}

	.main-menu-left.inSig hr{
		border-top: 1px solid transparent !important;
	}
	.main-menu-left.inSig .fa-angle-right, 
	.main-menu-left.inSig .lbl-btn-menu{
		display:none;
	}
	.main-menu-left.inSig .fa{
		margin-left:5px;
	}
	.main-menu-left.inSig hr{
		max-width:5px!important;
	}

</style>

<div class="hover-info col-md-7 col-md-offset-3 col-sm-6 col-sm-offset-5 hidden-xs panel-white padding-20">
	<?php echo $this->renderPartial('explainPanels',array("class"=>"explain")); ?>
</div>


<div class="hidden-xs main-menu-left col-md-2 col-sm-2 padding-10">
	
	<div class="menu-left-container">

		<?php 
			foreach ($folders as $keyFolder => $valuesFolder) {?>
				<a 	href="javascript:;" 
					id="menu-btn-directory"
					data-hash="#default.directory"
					onclick="changeSubMenu('<?php echo $valuesFolder["id"]; ?>')"
					class="menu-button-left visible-communected 
						<?php echo ($page == 'directory') ? 'selected':'';?>">
						<i class="fa fa-angle-right"></i> 
						<i class="fa fa-search tooltips"
							data-toggle="tooltip" data-placement="right" title="<?php echo $valuesFolder["name"]; ?>"></i> <span class="lbl-btn-menu"><?php echo $valuesFolder["name"]; ?></span>
				</a>
				<div class="sub-menu-left-container-<?php echo $valuesFolder["id"]; ?>">
				</div>
				<hr class="visible-communected">
<?php   	}?>
	</div>
	<?php //echo $this->renderPartial('version'); ?>
	
</div>

<?php 
	if(!isset($me)) $me = "";
 	//$this->renderPartial("./menu/menuSmall", array("me"=>$me)); 
?>
<style>

.count-to-moderate{
	font-weight: 500;
	font-size:16px;
	margin-left:2px;
}

#kkbb-min span.msg{
	top: -3px;
	position: relative;
	color: black !important;
	font-size: 22px;
}
#kkbb-min img.piggy {
    height: 40px;
    top: -7px;
    position: relative;
}
#kkbb-min img.helloasso {
	height: 40px;
	position: absolute;
	top: 0px;
	margin-left: 5px;
}

#kkbb-big .msg {
width: 40%;
font-size: 17px;
margin-left: 0px;
margin-top: 5px;
line-height: 20px;
text-align: center;
}

.globale-announce {
    width: 360px;
}

#btn-close-globale-announce {
    z-index: 2;
}

</style>
<div class="globale-announce text-dark hidden-xs">
	<div id="kkbb-min" style="margin-bottom: -12px;">
		<span class="homestead msg hidden">Soutenez-nous</span>
		<img class="piggy" style="height:30px;" src='<?php echo $this->module->assetsUrl?>/images/piggybank.png'/>
		<img class="helloasso" src="<?php echo $this->module->assetsUrl?>/images/helloasso-logo.png"/>
		<!-- <img style="height: 25px; margin-top: -18px;" src="<?php echo $this->module->assetsUrl?>/imasges/announce-kkbb2.png"/> -->
	</div>
	<div id="kkbb-big" style="display:none;">
		<button class="btn btn-default" id="btn-close-globale-announce"><i class="fa fa-times"></i></button>
		<a href="https://www.helloasso.com/associations/open-atlas" target="_blank">
			<img class="pull-left" style="width:20%;" src='<?php echo $this->module->assetsUrl?>/images/piggybank.png'/>
		</a>
		
		<a href="https://www.helloasso.com/associations/open-atlas" target="_blank">
		<div class="pull-left homestead text-red msg">
			Soutenez-nous<br/>
			à prix libre<br/>
			sur
		</div>
		</a>
		
		<a href="https://www.helloasso.com/associations/open-atlas" target="_blank">
			<img class="pull-right" style="height:40px; position:relative; top:20px;" src='<?php echo $this->module->assetsUrl?>/images/helloasso-logo.png'/>
		</a>

		</div>
	</div>
</div>

<script type="text/javascript">

//var timeoutCommunexion = setTimeout(function(){}, 0);
//var showMenuExplanation = <?php echo (@$me["preferences"]["seeExplanations"] || !@Yii::app()->session["userId"]) ? "true" : "false"; ?>;
//var urlLogout = "<?php echo Yii::app()->createUrl('/'.$this->module->id.'/person/logout'); ?>";
jQuery(document).ready(function() {

	//realTimeKKBB();
	showMenuExplanation = false;
	
	bindEventMenu();
	//$(".menu-button-left .fa-angle-right").hide(100);

	$(".menu-button-left").mouseenter(function(){
		$(this).addClass("active");
	});
	$(".menu-button-left").mouseout(function(){
		$(this).removeClass("active");
	});
	$(".menu-button-left").click(function(){
		$(".menu-button-left").removeClass("selected");
		$(this).addClass("selected");
	});
});
</script>