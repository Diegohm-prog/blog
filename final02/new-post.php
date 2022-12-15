<?php require('init.php'); ?>
<?php

$error = false;
$title = '';
$excerpt = '';
$content = '';

if (isset($_POST['submit-new-post'])) {

	// Se ha enviado el formulario
	$title = $_POST['title'];
	$excerpt = $_POST['excerpt'];
	$content = $_POST['content'];

	if (empty($title) || empty($content)) {
		$error = true;
	} else {
		insert_post($title, $excerpt, $content);
		// Redirigir al blog
		redirect_to('index.php?success=true');
	}
}
?>
<?php require('templates/header.php'); ?>
<h2>Creat new post</h2>

<?php if ($error) : ?>
	<div class="error">
		Error in the formulario.
	</div>
<?php endif; ?>

<form action="" method="post">
	<label for="title">Title (Require)</label>
	<input type="text" name="title" id="title" value="<?php echo $title; ?>">

	<label for="excerpt">Extracto</label>
	<input type="text" name="excerpt" id="excerpt" value="<?php echo $excerpt; ?>">

	<label for="content">Content (Require)</label>
	<textarea name="content" id="content" cols="30" rows="30"><?php echo $content; ?></textarea>

	<p>
		<input type="submit" name="submit-new-post" value="Nuevo post">
	</p>
</form>
<?php require('templates/footer.php');
