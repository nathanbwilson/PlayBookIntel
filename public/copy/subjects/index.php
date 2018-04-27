<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'TEST SUBJECTS Creation'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>

  <div class="jumbotron">
    <div class="container">
       <header><h2>TEST SUBJECTS Creation</h2></header>
    </div>
  </div>


<?php
  $subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-sx-12">
      <div class="well">

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

        </div>  
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-sx-12">
      <div class="well">

    <div class="actions">
      <a class="action" href="<?php echo url_for('/copy/subjects/new.php'); ?>">Create New Subject</a>
    </div>

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

      <?php foreach($subjects as $subject) { ?>
        <tr>
          <td><?php echo h($subject['id']); ?></td>
          <td><?php echo h($subject['position']); ?></td>
          <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($subject['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/copy/subjects/show.php?id=' . h(u($subject['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/copy/subjects/edit.php?id=' . h(u($subject['id']))); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/home_footer.php'); ?>
