<?php get_header();?>
<section>
  <div class="hero">
    <div class="overlay__hero"></div>
  <video loop="true" muted="true" autoplay="true" poster="http://bettercut.local/wp-content/uploads/2019/12/hair.jpg" class="fullscreen_bg">
      <source src="http://bettercut.local/wp-content/uploads/2019/12/salon.mp4" type="video/mp4"></source>
      </video>
    <div class="hero__content">
      <h2 class="pt-5 pb-5">Your Reflection is Our Inspiration</h2>
    </div>
  </div>
  <div class="btn btn__book">book an appointment</div>
</section>
<section class="pad__sm services">
  <div class="container text-center pt-4">
    <img src="http://bettercut.local/wp-content/uploads/2020/01/A_Better_Cut_Logo.png" alt="">
  </div>
  <div class="container pad__sm">
    <h2 class="pt-5 pb-5 text-center">Our Services</h2>
  </div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-8 offset-2 col-md-5 offset-md-0">
        <div class="service">
          <div class="service__image">
            <div class="abs-fill bg-img" style="background-image:url('http://bettercut.local/wp-content/uploads/2019/12/DSCF2787.jpg')"></div>
          </div>
        </div>
      </div>
      <div class="col-10 offset-1 col-md-5 offset-md-0 service relative">
        <div class="service__description">
          <h4 class="pb-2">Hair</h4>
          <p>From simple cuts to complex color and treatments, our talented team of hairdressers will help you maintain your current style or try a new look!</p>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-8 offset-2 col-md-5 offset-md-1">
        <div class="service">
          <div class="service__image">
            <div class="abs-fill bg-img" style="background-image:url('http://bettercut.local/wp-content/uploads/2019/12/AdobeStock_91404423-e1526482874760-750x500.jpg')"></div>
          </div>
        </div>
      </div>
      <div class="col-10 offset-1 col-md-5 offset-md-0 service relative">
        <div class="service__description">
          <h4 class="pb-2">Nails</h4>
          <p>From simple cuts to complex color and treatments, our talented team of hairdressers will help you maintain your current style or try a new look!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8 offset-2 col-md-5 offset-md-2">
        <div class="service">
          <div class="service__image">
            <div class="abs-fill bg-img" style="background-image:url('http://bettercut.local/wp-content/uploads/2019/12/IMG_1618.jpg')"></div>
          </div>
        </div>
      </div>
      <div class="col-10 offset-1 col-md-5 offset-md-0 service relative">
        <div class="service__description">
          <h4 class="pb-2">Makeup</h4>
          <p>From simple cuts to complex color and treatments, our talented team of hairdressers will help you maintain your current style or try a new look!</p>
        </div>
      </div>
    </div>
    <div class="row pad__sm">
      <div class="col-12 text-center pt-5">
        <a href="http://bettercut.local/wp-content/uploads/2019/12/A-Better-Cut-Service-Guide.pdf" target="_blank" class="link">view full service menu + pricing</a>
      </div>
    </div>
  </div>
  <div class="btn btn__book">book an appointment</div>
</section>
<section class="container pad__lg">
  <div class="row mb-5">
    <div class="col-12 text-center">
      <h2>Meet Our Team</h2>
    </div>
  </div>
  <?php if( $cats ): ?>
    <ul class="filter-list text-center">
      <li><h6>view specialists</h6></li>
      <?php foreach( $cats as $cat ): ?>
        <li class="filter-item" data-type=<?php echo $cat->term_id ?>><?php echo $cat->name ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <div class="row">
    <div class="col-12 team" id="response"></div>
  </div>
</section>
<section class="modal modal__bio">
  <div class="modal-content">
    <div class="relative"><div class="close"><div class="cross"></div></div></div>
    <div class="modal-content__text container">
      <div class="row">
        <div class="col-12 col-md-5">
          <div class="modal__bio--image">
            <div class="abs-fill bg-img" style="background-image:url('<?php the_post_thumbnail_url() ;?>')"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 text-md-center relative">
          <h3></h3>  
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container pad__sm">
  <div class="row mb-5">
    <div class="col-12 text-center">
      <h3>We Proudly Use and Recommend</h3>
    </div>
  </div>
  <div class="products pad__sm">
    <div class="row">
      <div class="col-12 col-md-4 text-center mt-5 mb-5 mb-md-3">
        <img src="http://bettercut.local/wp-content/uploads/2019/11/olaplex.png">
      </div>
      <div class="col-12 col-md-4 text-center mt-5 mb-5 mb-md-3">
        <img src="http://bettercut.local/wp-content/uploads/2019/11/Paul_Mitchell_logo_wordmark.png">
      </div>
      <div class="col-12 col-md-4 text-center mt-5 mb-5 mb-md-3">
        <img src="http://bettercut.local/wp-content/uploads/2019/12/LOGO_0001s_0006_MARTIX_BLACK-e1576246469805.png">
      </div>
      <div class="col-12 col-md-4 text-center mt-5 mb-5 mb-md-3">
        <img src="http://bettercut.local/wp-content/uploads/2020/01/gelish-polygel-logo-CAC5B25F96-seeklogo.com_.png">
      </div>
      <div class="col-12 col-md-4 text-center mt-5 mb-5 mb-md-3">
        <img src="http://bettercut.local/wp-content/uploads/2020/01/496-4964762_opi-logo-photos-and-pictures-in-hd-resolution.png">
      </div>
    </div>
  </div>
</section>
<section class="pad__med">
  <div class="pad__sm">
    <div class="social container">
      <div class="row pad__sm">
        <div class="col-12 text-center">
          <h3>The Latest at A Better Cut</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mb-5">
          <div class="col-12 pb-3 text-center">
            <h4>See Us on Instagram<a href="https://www.instagram.com/abettercutsalon/" class="link"><img src="http://bettercut.local/wp-content/uploads/2019/11/instagram.png"></a></h4>
          </div>
          <?php echo do_shortcode( '[fts_instagram instagram_id=1415921801 access_token=1415921801.da06fb6.48bb4e259c24401ebdf874d58beffc0a pics_count=6 type=user profile_wrap=no super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no]' );  ?>
        </div>
        <div class="col-12">
          <div class="col-12 pb-3 text-center">
            <h4>See Us on Facebook<a href="https://www.facebook.com/abettercutsalon/" class="link"><img src="http://bettercut.local/wp-content/uploads/2019/11/facebook.png"></a></h4>
          </div>
          <?php echo do_shortcode('[fts_facebook type=page id=189282521100113 access_token=EAAP9hArvboQBAMDWlDmlHI2JM4ZAcSet8PNsn738WQ85aDdZB6gQ0TEqZAUYISfWAZASUciS2j12ehLmSH2ZAOK2zjM7wnYeGlLedtchoAYwkY8uiYhU0N82swpOLtAymcsLjGkbJ3E18vTQLR57amshU5B3gF8UzVnZC7zPOU8nttYTbDG21I posts=2 description=no posts_displayed=page_only]') ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="gift-card relative">
  <div class="abs-fill bg-img" style="background-image:url('http://bettercut.local/wp-content/uploads/2019/12/hair.jpg')"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 offset-md-1 text-center text-md-left">
        <h3>Pamper your loved ones by gifting them a visit to our salon!</h3>
      </div>
      <div class="col-12 col-md-3 relative mt-3 text-center text-md-right">
        <a href="#" target="_blank" class="btn">Gift Card</a>
      </div>
    </div>
  </div>
</section>
<section class="modal modal__appointment">
  <div class="modal-content">
    <div class="relative"><div class="close"><div class="cross"></div></div></div>
    <div class="modal-content__text text-center">
      <h4>We believe every customer has unique needs.</h4>
      <h4 class="mb-5">Please call to book an appointment so we can provide you an experience unique to you.</h4>
      <h5 class="mb-5">561.684.5757</h5>
      <h4>We can't wait to meet you!</h4>
    </div>
  </div>
</section>
<section class="modal modal__person">
  <div class="modal-content">
    <div class="relative"><div class="close"><div class="cross"></div></div></div>
    <div class="modal-content__text text-center">
      <h4>Team Name</h4>
      <h4 class="mb-5">Please call to book an appointment so we can provide you an experience unique to you.</h4>
      <h5 class="mb-5">561.684.5757</h5>
      <h4>We can't wait to meet you!</h4>
    </div>
  </div>
</section>

<?php get_footer(); ?>
</html>