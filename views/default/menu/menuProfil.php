
<?php if (isset(Yii::app()->session['userId']) && !empty($me)) {
          $profilThumbImageUrl = Element::getImgProfil($me, "profilThumbImageUrl", $this->module->assetsUrl);
      }
?>

<div class="dropdown pull-right">
  <button class="dropdown-toggle menu-name-profil text-dark" data-toggle="dropdown">
    <img class="img-circle" id="menu-thumb-profil" width="34" height="34" src="<?php //echo $profilThumbImageUrl; ?>" alt="image" >
    <?php //echo $me["name"]; ?>
    <span class="caret"></span>
  </button>
  
</div>

<button class="menu-button btn-menu btn-menu-notif tooltips text-dark" 
      data-toggle="tooltip" data-placement="left" title="Notifications" alt="Notifications">
  <i class="fa fa-bell hidden-xs"></i>
  <span class="notifications-count topbar-badge badge badge-danger animated bounceIn"><?php count($this->notifications); ?></span>
</button>