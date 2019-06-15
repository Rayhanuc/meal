<!doctype html>
<html <?php  ?> >
  <head>
    

    <?php wp_head();?>

  </head>
  <body <?php body_class() ; ?> class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

    <div class="site-wrap">
      
      <nav class="site-menu" id="ftco-navbar-spy">

          <?php 

          echo wp_nav_menu( array(
            'location'  => 'primary',
            'container_class' => 'site-menu-inner',
            'menu_id'         => 'ftco-navbar',
            'menu_class'      => 'list-unstyled',

            /*'theme_location'  => '',
            'menu'            => '',
            'container'       => 'div',
            'container_id'    => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',*/
          ) );

          ?>
      </nav>

      <header class="site-header">
        <div class="row align-items-center">
          <div class="col-5 col-md-3">
             
          </div>
          <div class="col-2 col-md-6 text-center site-logo-wrap">
            <a href="index.html" class="site-logo">M</a>
          </div>
          <div class="col-5 col-md-3 text-right menu-burger-wrap">
            <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

          </div>
        </div>
       
      </header> <!-- site-header -->