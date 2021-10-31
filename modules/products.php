<?php include "product-list.php"; ?>
<product-shelf>
<?php foreach ($productList as $product): ?>
<product-area>
	<product>
		<picture class="product-photo">
			<img src="<?=$product["picture"]?>" alt="<?=$product["name"]?>">
		</picture>

		<description>
			<ul class="product-facts">
				<li><?=$product["name"]?></li>
				<li><?=$product["description"]?></li>
				<li><?=$product["price"]?></li>
				<li><a href="<?=$product["link"]?>" target="_external"><?=$product["name"]?></a></li>
			</ul>
		</description>
	</product>
</product-area>
<?php endforeach; ?>
<picture class="decoration-photo wheel">
	<img src="images/wheel.svg">
</picture>
</product-shelf>