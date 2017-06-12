<?php defined( '_JEXEC' ) or die; include_once JPATH_THEMES.'/'.$this->template.'/logic.php';?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <jdoc:include type="head" />
  </head>
  <body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
   <header>
 <div class="large-4 medium-4 small-12 columns">
   <div class="logo">
        
      <?php if ($logo && $logoimage == 1): ?>
        <a href="<?php echo $this->baseurl ?>" class="mylogo"><img src="<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo $sitename; ?>" /></a>
      <?php endif; ?>
      <?php if (!$logo || $logoimage == 0): ?>

        <?php if ($sitetitle): ?>
          <a href="<?php echo $this->baseurl ?>"  class="mylogo"><?php echo htmlspecialchars($sitetitle); ?></a><br/>
        <?php endif; ?>

        <?php if ($sitedescription): ?>
          <div class="sitedescription"><?php echo htmlspecialchars($sitedescription); ?></div>
        <?php endif; ?>

      <?php endif; ?>
    </div>
   </div>
  <div class="large-8 medium-8 small-12 columns">
    <div class="topmenu clearfix">
      <div class="top_h">
        
      <jdoc:include type="modules" name="topmenu" />
      </div>
        </div>
        <div class="top_right">
      <jdoc:include type="modules" name="top_right" />
    </div>  
  </div>
  </header>
   </header>
   <div class="content-body">
     <div class="row">
           <?php if ($left): ?>
        <div class="sidebar-left large-3 medium-3 small-12 columns">
          <jdoc:include type="modules" name="Left_Sidebar" style="xhtml" />
        </div>
           <?php endif; ?>
                <div class="content <?php if ($left && $right) {print('large-6 medium-6 small-12 columns');}
                 else if ($left || $right) {print('large-9 medium-9 small-12 columns');} 
                 else {print('large-12 medium-12 small-12 columns');} ?>">
                 
              <jdoc:include type="message" />
              <jdoc:include type="component" />
        </div>
               <?php if ($right): ?>
        <div class="sidebar-right large-3 medium-3 small-12 columns">
          <jdoc:include type="modules" name="Right_Sidebar" style="xhtml" />
        </div>
         <?php endif; ?>
</div>
   </div>
   <div class="row">
  <div class="large-12 medium-12 small-12 columns">
    <footer>
       <?php echo date('Y'); ?>  <?php echo $sitename; ?> 
    </footer>
  </div>
</div> 
     <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- <script src="bower_components/foundation-sites/dist/js/foundation.js"></script> -->  
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/app.js"></script>
  </body>
</html>
