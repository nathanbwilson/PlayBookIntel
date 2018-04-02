<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Home Page'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>
     <div class="jumbotron">
       <div class="container">
          <header class="bgimage">
           <h2 class="text">Full Site Coming Soon</h2>
            <p><a class="btn btn-primary btn-lg" href="<?php echo url_for('/copy/index.php'); ?>" role="button">Learn more &raquo;</a></p>
         </header>
       </div><!--Container-->
     </div><!--Jumbotron-->
       <div class="container">
         <div class="row">
          <div class="col-md-4">
            <h2>Example Bio</h2>
            <p>This is where biographical text would go.</p>
            <p><a class="btn btn-default" href="<?php echo url_for('/page/bio.php'); ?>" role="button">View details &raquo;</a></p>
          </div>

          <div class="col-md-4">
            <h2>Testimonials</h2>
            <p>We could put some Testimonials from customers here in this link.</p>
            <p><a class="btn btn-default" href="<?php echo url_for('/page/test.php'); ?>" role="button">View testimonials &raquo;</a></p>
          </div>

          <div class="col-md-4">
            <h2>Buy buy buy</h2>
            <p>This could send people to the buy now link.</p>
            <p><a class="btn btn-default" href="<?php echo url_for('/page/buy.php'); ?>" role="button">Buy now &raquo;</a></p>
          </div>
        </div><!--Row-->
      </div><!--Container-->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<?php include(SHARED_PATH . '/home_footer.php'); ?>
