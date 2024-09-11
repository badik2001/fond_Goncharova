<?php get_header();?>
<div class="main_container">


    <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

        <div class="content">

        <div class="headerfon"><h1 class="pagetitle">СМИ о нас</h1></div>

            <div class="itemtext">
                <?php

                    the_content();

                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer default-max-width">

            </footer><!-- .entry-footer -->

        </div>

    </article><!-- #post-<?php the_ID(); ?> -->


</div>
<?php get_footer()?>