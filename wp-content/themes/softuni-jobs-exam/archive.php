<?php get_header (); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Properties</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/softuni-jobs-exam/files/css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="site-wrapper">
		<header class="site-header">
			<h1 class="site-title"><a href="#"></a></h1>
		</header>
		<ul class="properties-listing">

<?php  the_archive_title() ; ?>

<?php if ( have_posts() ) : ?>
   
	<?php while( have_posts() ) : the_post() ?>
            

	<li class="property-card">
				<div class="property-primary">
					<h2 class="property-title"><a href="<?php the_permalink(); ?>">Two-bedroom apartment</a></h2>
					<div class="property-meta">
						<span class="meta-location">Ovcha Kupel, Sofia</span>
						<span class="meta-total-area">Total area: 91.65 sq.m</span>
					</div>
					<div class="property-details">
						<span class="property-price">€ 100,815</span>
						<span class="property-date"><?php the_date(); ?></span>
					</div>
				</div>
				<div class="property-image">
					<div class="property-image-box">
						<?php 
						if(has_post_thumbnail() ) {
							the_post_thumbnail();
						}else {
							echo '<img src="images/bedroom.jpg" alt="property image">';
						}
						
						?>
					</div>
				</div>
			</li>

			

    <?php endwhile; ?>

	<?php posts_nav_link(' ') ?>

<?php endif; ?>

		
		</ul>
		<footer class="site-footer">
			<p>&copy; Copyright 2023| Developer links: 
				<a href="/edits.html">Edits</a>,
				<a href="/index.html">Home</a>,
				<a href="/single.html">Single</a>
			</p>
		</footer>
	</div>

</body>
</html>
<?php get_footer(); ?>