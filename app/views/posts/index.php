<?php require APPROOT . '/views/inc/header.php'; ?>

<?php foreach($data["posts"] as $post) : ?>
  <h1><?php echo $post->title ;?></h1>
<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
