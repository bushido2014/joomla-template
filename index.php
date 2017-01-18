<?php defined( '_JEXEC' ) or die; include_once JPATH_THEMES.'/'.$this->template.'/logic.php';?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <jdoc:include type="head" />
  </head>
  <body>
   <header>
  <div class="row">
    <h2>Joomla Blank template</h2>
  </div>
   </header>
     <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- <script src="bower_components/foundation-sites/dist/js/foundation.js"></script> -->  
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/app.js"></script>
  </body>
</html>
