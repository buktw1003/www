<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "JollyHeap";
$prodCode = "jh";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $prodName." < 嬰童與母親 - ".$title;?></title>
	<?php
	echo $css;
	?>
	<script>
		var lng = "<?= $lng ?>";
	</script>
	<?php
	echo $js;
	?>
</head>
<body class="page-gallery">
	<main>
		
		
		<section class="prod-intro prod" id="jollyheap">
			
			<!-- /top -->
			<div class="content">
				<div class="gallery">
					<ul class="btn-sp clearfix">
						<?php
						for($g = 52; $g > 0; $g--){
							echo '<li><a type="gallery" href="javascript:void(0);"><img src="/images/prod/cm/jh/gallery/s/'.$g.'.jpg" alt=""></a></li>';
						}
						?>
					</ul>
				</div>


			</div>
			<!-- /content -->

		</section>
	</main>

	<?php include_once($root."/inc/overlay.inc"); ?>
</body>
</html>