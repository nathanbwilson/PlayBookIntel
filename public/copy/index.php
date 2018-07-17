<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Customer Log In'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>

  <div class="jumbotron">
    <div class="container">
       <header><h2>Test Menu</h2></header>
    </div>
  </div>

<div class="container">
 
<div class="well hidden-sm hidden-md hidden-lg">
<p>Screen &lt; 768px</p>
</div>
 
<div class="well hidden-md hidden-lg">
<p>Screen &gt;= 768px and &lt; 992px</p>
</div>
 
<div class="well hidden-lg">
<p>Screen &gt;= 992px and &lt; 1200px</p>
</div>
 
<div class="well">
<p>Screen &gt; 1200px</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
        <div class="well"> 
          <div class="btn-group btn-group-lg" role="group" aria-label="...">
            <a class="btn btn-warning btn-lg" href="<?php echo url_for('/copy/pages/formTest.php'); ?>" role="button">Form Test</a>
        </div>
      </div>  
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
      <div class="well">  
        <div class="btn-group btn-group-lg" role="group" aria-label="...">
          <a class="btn btn-lg btn-primary" href="<?php echo url_for('/copy/subjects/index.php'); ?>" role="button">Subjects</a>
        </div>
      </div>  
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
      <div class="well">   
        <div class="btn-group btn-group-lg" role="group" aria-label="...">
          <a class="btn btn-lg btn-primary" href="<?php echo url_for('/copy/pages/index.php'); ?>" role="button">Pages</a>
        </div>
      </div>  
    </div>  
  </div>    
</div>  

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
      <div class="well">  
        <div class="btn-group btn-group-lg" role="group" aria-label="...">
          <a class="btn btn-lg btn-primary" href="<?php echo url_for('../source/index.html'); ?>" role="button">Sign Up Form from Internet</a>
        </div>
      </div>  
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
      <div class="well">  
        <div class="btn-group btn-group-lg" role="group" aria-label="...">
          <a class="btn btn-lg btn-primary" href="<?php echo url_for('../source/signUp.php/'); ?>" role="button">Sign Up Form NATHAN'S FORM</a>
        </div>
      </div>  
    </div>  
  </div>
</div>

<?php include(SHARED_PATH . '/home_footer.php'); ?>
