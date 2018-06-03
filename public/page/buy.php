<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Report Generator'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>
<body>

<br class="hidden-md hidden-lg"></br>

<div class="container">
  <div class="row">
     <div class="col-sm-2" style="background-color:lavender;">LEFT SIDE</div>
     <div class="col-lg-8" style="background-color:lavenderblush;">CENTER</div>
     <div class="col-sm-2" style="background-color:lavender;">RIGHT SIDE</div>
  </div>
</div>

<div class="container hidden-sm hidden-xs" style="padding:0"><div>

<p>Here is some temp text.</p>


<div id="bodyWrapper" class="container" style="background-color:white; min-height:100%;">
	::before
	<div class="row hidden-print">
		::before
		::after
	</div>
	<!--bodyContent //-->	
	<div id="bodyContent" class="grid_20 push_4 col-md-9 col-md-3">
		<div class="visible-sm visible-xs hidden-print" style="text-align:center">
			<div id="my-little-search-box" class="row">
				::before
				<div class="col-xs-12">
					<form name="quick_find" action="#" method="get">
						<div class="input-group">
							<input id="searchOurStore" class="form-control input-lg" name="keywords" placeholder="Create a Report!" type="text">
								<span class="input-group-btn">
									<button class="btn btn-danger btn-lg" type="submit">
										<i class="fa fa-search">
											::before
										</i>
									</button>
								</span>
							</input>	
						</div>
					</form>
				</div>
				::after
			</div>
		</div>
		<ol class="breadcrumb">
			<li>
				<a href="#">Check Out This Link to This Place</a>
			</li>
		</ol>
		<div id="right-main-column">
			<div class="contentContainer">
				<div class="contentText">
					<h1 style="padding:0">Purchasing a Report</h1>
					<div class="content-fluid paddedWhiteDiv">
						::before
						<div class="row">
							::before
							<a href="#">
								<div class="text-center row style="border:1px solid #ddd;">
									::before
									<div class="col-md-3 col-sm-6" style="background-color:#f5f5f5;">
										<img class="thumbnail sportsTeam-responsive" src="https://i.imgur.com/OlOkbKK.jpg" alt="#" title="Your Favorite Sports Team" width="240" height="240" border="0">
									</div>
									<div class="col-md-9 col-sm-6" style="font-size:166%;text-transform:uppercase; font-weight:bold;padding:.5em; letter-spacing:1px; background-color:white;">Sports Teams</div>
									::after
								</div>
							</a>
							<br>
						</div>
						::after
					</div>
					<style type="text/css">
						.sportsTeam-responsive{height:90px; width: auto; display: inline-block; margin:5px;}
					</style>
					<br>
					<div class="panel panel-primary hidden-sm hidden-xs">
						<div class="panel panel-heading text-center">New Products</div>
						<div></div>
					</div>
				</div>
			
			</div>
		</div>	
	</div>
</div>

<br class="hidden-md hidden-lg"></br>
<?php include(SHARED_PATH . '/home_footer.php'); ?>
