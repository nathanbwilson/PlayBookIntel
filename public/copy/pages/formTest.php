<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Form Test'; ?>
<?php include(SHARED_PATH . '/home_header.php'); ?>

<div class="container">
	<div class="row">

<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>

	</div>
</div>

	<?php include(SHARED_PATH . '/home_footer.php'); ?>