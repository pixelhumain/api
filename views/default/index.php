<?php 
	$cssAnsScriptFilesModule = array(
    //l'ordre est a respecter
    '/plugins/swagger-ui/css/reset.css',
    '/plugins/swagger-ui/css/screen.css',
    //'/plugins/swagger-ui/css/print.css',
    '/plugins/swagger-ui/lib/jquery.slideto.min.js',
    '/plugins/swagger-ui/lib/jquery.wiggle.min.js',
    '/plugins/swagger-ui/lib/jquery.ba-bbq.min.js',
    '/plugins/swagger-ui/lib/handlebars-4.0.5.js',
    '/plugins/swagger-ui/lib/lodash.min.js',
    '/plugins/swagger-ui/lib/backbone-min.js',  
    '/plugins/swagger-ui/swagger-ui.min.js',
    '/plugins/swagger-ui/lib/highlight.9.1.0.pack.js',
    '/plugins/swagger-ui/lib/highlight.9.1.0.pack_extended.js',
    '/plugins/swagger-ui/lib/jsoneditor.min.js',
    '/plugins/swagger-ui/lib/marked.js',
    '/plugins/swagger-ui/lib/swagger-oauth.js'
	);
	HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule,Yii::app()->request->baseUrl);

?>
<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
<?php
    $server = ((isset($_SERVER['HTTPS']) AND (!empty($_SERVER['HTTPS'])) AND strtolower($_SERVER['HTTPS'])!='off') ? 'https://' : 'http://').$_SERVER['HTTP_HOST'];
    $url = $server.Yii::app()->createUrl("/api/data/get/");
?>
<script type="text/javascript">
var url = "<?php echo $url ; ?>"
jQuery(document).ready(function() {
  hljs.configure({
    highlightSizeThreshold: 5000
  });

  // Pre load translate...
  if(window.SwaggerTranslator) {
    window.SwaggerTranslator.translate();
  }
  window.swaggerUi = new SwaggerUi({
    url: url,
    dom_id: "swagger-ui-container",
    supportedSubmitMethods: ['get', 'post', 'put', 'delete', 'patch'],
    onComplete: function(swaggerApi, swaggerUi){
      if(typeof initOAuth == "function") {
        initOAuth({
          clientId: "your-client-id",
          clientSecret: "your-client-secret-if-required",
          realm: "your-realms",
          appName: "your-app-name",
          scopeSeparator: " ",
          additionalQueryStringParams: {}
        });
      }
      if(window.SwaggerTranslator) {
        window.SwaggerTranslator.translate();
      }
    },
    onFailure: function(data) {
      log("Unable to Load SwaggerUI");
    },
    docExpansion: "none",
    jsonEditor: false,
    defaultModelRendering: 'schema',
    showRequestHeaders: false
  });
  window.swaggerUi.load();
});
function log() {
  if ('console' in window) {
    console.log.apply(console, arguments);
  }
}
</script>