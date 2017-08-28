<?php include('header.php');?>
<?php
$post = array_map('str_getcsv', file('data/datos.csv'));
array_walk($post, function(&$a) use ($post) {$a = array_combine($post[0], $a);});
array_shift($post);
$all = count($post);
$id = $_GET['url'];
?>
<div class="row">
<div class="col-sm-12">
<h3><?php print($post[$id]["title"])?></h3>
<img src="<?php print($post[$id]["picture"])?>" class="img-responsive">
<p><?php print($post[$id]["content"])?>.</p>

</div><!--/col-sm-4-->
</div><!--/row-->
<?php include('footer.php');?>
