<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="the Perpetual Education responsive layout challenge">
    <title>responsive layout challenge</title>
  </head>
  <body>
  	<?php include "modules/header.php"; ?>
  	<main class="site-main">
  		<section class="welcome">
  			<inner-column>
  				<h1 class="heading-one" aria-hidden="true">responsive layout challenge</h1>

  				<?php include "modules/diptych.php"; ?>
  			</inner-column>
  		</section>

  		<section class="products">
  			<inner-column>
  				<h2 class="heading-two" aria-hidden="true">products</h2>
  				
  				<?php  include "modules/products.php"; ?>
  			</inner-column>
  		</section>

      <section class="corporate-layout">
        <inner-colummn>
          <?php include "modules/corporate-layout.php"; ?>
        </inner-colummn>
      </section>

      <section class="tech-layout">
        <inner-colummn>
          <?php include "modules/tech-finance.php"; ?>
        </inner-colummn>
      </section>
  	</main>

  	<?php include "modules/footer.php"; ?>
  </body>
</html>