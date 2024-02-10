<?php
wp_head();
?>
<header class="header_section">
      <div class="container">
        <div class="header_nav">
          <a class="navbar-brand brand_desktop" href="index.html">
            <?php  $logoimg=get_header_image(); ?>
            <img src="<?php echo $logoimg ?>" alt="" />
          </a>
          <div class="main_nav">
            <div class="top_nav">
              <ul class=" ">
                <li class="">
                  <a class="" href="">
                    <img src="<?php echo get_template_directory_uri()?>/images/telephone.png" alt="" />
                    <span> +01 1234567890</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <img src="<?php echo get_template_directory_uri()?>/images/mail.png" alt="" />
                    <span>demo@gmail.com</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <img src="<?php echo get_template_directory_uri()?>/images/location.png" alt="" />
                    <span>Den mark Loram ipusum</span>
                  </a>
                </li>
              </ul>
            </div>
            <?php wp_nav_menu(array(
              'theme_location'=>'primary-menu',
            'menu_class'=>'navbar')); ?>  
            
          </div>
        </div>
      </div>
    </header>