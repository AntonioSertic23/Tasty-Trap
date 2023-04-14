<?php
get_header();
?>

<?php
$sImageUrl = get_template_directory_uri().'/img/pozadina.jpg';
echo '<header class="masthead" style="background-image: url('.$sImageUrl.')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Hrana</h1>
              <span class="subheading">Uvijek svježe pripremljena!</span>
            </div>
          </div>
        </div>
      </div>
</header>';
?>

<?php
echo '<div class="container-fluid text-center">
		<div class="hrana-vrsta-item">
			<h2>Burgeri</h2>';
				echo daj_hranu( 'burger' );
				echo '<h2>Wrapovi</h2>';
				echo daj_hranu( 'wrap' );
				echo '<h2>Nuggets</h2>';
				echo daj_hranu( 'nuggets' );
				echo '<h2>Toasts</h2>';
				echo daj_hranu( 'toast' );
				echo '<h2>Muffins</h2>';
				echo daj_hranu( 'muffin' );
				echo '<h2>Salate</h2>';
				echo daj_hranu( 'salata' );
echo '</div></div>';
?>

<?php
get_footer();
?>
