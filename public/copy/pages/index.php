<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'TEST PAGES Creation'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>

  <div class="jumbotron">
    <div class="container">
       <header><h2>TEST PAGES Creation</h2></header>
    </div>
  </div>

<?php
  $pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'History'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Contact Us'],
  ];
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-sx-12">
      <div class="well"> 

<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/copy/pages/new.php'); ?>">Create New Page</a>
    </div>

      </div>  
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-sx-12">
      <div class="well"> 

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      </div>  
    </div>  
  </div>
</div>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($page['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/copy/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/copy/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/home_footer.php'); ?>
