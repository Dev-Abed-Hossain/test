<?php 
// include autoload file
if(file_exists(__DIR__ . "/../autoload.php")){
    require_once __DIR__ . "/../autoload.php";
}
?>

  <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
      <?php 
			$j = 1;
			foreach($menu as $item): ?>
			<li class="colour-<?php echo $j; $j++; ?>"><a href="<?php echo $item["link"]; ?>"><?php echo $item["name"]; ?></a></li>
			<?php endforeach; ?>
		</ul>
    </nav>