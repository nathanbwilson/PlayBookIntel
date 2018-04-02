<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Customer Log In'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>

  <div class="jumbotron">
    <div class="container">
       <header><h2>Main Menu</h2></header>
    </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class="btn btn-default" href="<?php echo url_for('/copy/subjects/index.php'); ?>" role="button">Subjects</a>
      </div>

        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-default" href="<?php echo url_for('/copy/pages/index.php'); ?>" role="button">Pages</a>
          </div>

<?php include(SHARED_PATH . '/home_footer.php'); ?>
