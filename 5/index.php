<?php include('header.php');?>

<div class="row auto-clear">
<?php
$post = array_map('str_getcsv', file('data/datos.csv'));
array_walk($post, function(&$a) use ($post) {$a = array_combine($post[0], $a);});
array_shift($post);
$all = count($post);
for($n=0; $n < $all; $n++){?>
  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
  <article>
  <figure>
    <img src="<?php print($post[$n]["picture"])?>" class="img-thumbnail">
    <figcaption>Categoría: <a href="archive.php?url=<?php print($post[$n]["category"])?>"><?php print($post[$n]["category"])?></a></figcaption>
  <figure>
  <h3><a href="post.php?url=<?php print($n);?>"><?php print($post[$n]["title"])?></a></h3>
  <p><?php print($post[$n]["excerpt"])?>. <a href="post.php?url=<?php print($post[$n])?>">Ver más detalles</a></p>
  </article>
  </div><!--/col-sm-4-->
<?php };?>
</div><!--/row auto-clear-->

<?php include('footer.php');?>
