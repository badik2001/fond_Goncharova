<?php get_header(); ?>
<?php 

if(count(get_the_category()) > 0 ) {
    $categories = get_the_category();
	$cat_id = $categories[0]->cat_ID;
// echo '<pre>';
// var_dump($categories[0]);
// echo '</pre>';

    $cat_name = $categories[0]->name // ID категории       
?>




	<div class="main_container">
		<div class="clear"></div>        
        <div class="headerfon">       
            <h1 class="pagetitle"><?= $cat_name; ?></h1>
        </div>
        
        <div class="newsslider">	

				<?php

					$perfomaces = get_posts( [ 'category' => $cat_id, 'order' => 'ASC', 'numberposts' => 1000 ] ); 

					foreach($perfomaces as $perfomace){
					$postId = $perfomace->ID;        

				?>

					<a href="<?= get_permalink( $perfomace->ID ) ?>">
						<h3><?= $perfomace->post_title ?></h3>
						<div class="hr1"></div>
							<div class="preview"><div style="background-image: url('<?= get_the_post_thumbnail_url( $perfomace->ID ) ?>')"></div>
						</div>
						<div class="hr1"></div>
					</a>


				<?php

					}

					wp_reset_query(); // сброс запроса

				?>			

		</div>

		
					
		<div class="clear"></div>
		<div>
			<div class="upscrollbutton">
				<a id="toTop" style="display: none;"><img src="./Проекты _ Совет музеев ПФО._files/upscroll.png" width="36" height="36" alt="^"></a>
			</div>
		</div>
	</div><!-- main container -->

<?php } else { ?>

	Нет записей.

<?php } ?>

<?php get_footer(); ?>