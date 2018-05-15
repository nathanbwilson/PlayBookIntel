<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Testimonials'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>

<body>

<div id="bodyWrapper" class="container" style="background-color:white; min-height:100%;">
	<div id="bodyContent" class="grid_20 push_4 col-md-9 col-md-push-3">
		<div class="visible-sm visible-xs" style="text-align:center">
			<div class="col-xs-12">
				<p>Here is some placeholder text for yo ass.</p>     
			</div>	
		</div>
	</div>
</div>
	
<div class="container-fluid">
  <h2 class="full-width">My First JavaScript</h2>
	
	<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">Click me to display Date and Time.</button>
		<p id="demo"></p>
		
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
  </div>
</div>

</body>

<?php include(SHARED_PATH . '/home_footer.php'); ?>
