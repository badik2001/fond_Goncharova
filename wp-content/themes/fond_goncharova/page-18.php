<?php get_header(); ?>
<div class="main-content">


    <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

        <div class="content">

            <div class="headerfon">
                <h1 class="pagetitle">Контакты</h1>
            </div>

            <div class="entry-content">
                <?php

                the_content();

                ?>
                <div>
                    <div>
                        <div class="contactsmapwrap">
                            <div class="contactsmap" id="idcontactsmap">
                                <div class="contactstext">
                                    <br>
                                    <img src="/wp-content/themes/fond_goncharova/base/sysvalues/101.jpg" width="120"><br>
                                    <p>432017, г. Ульяновск, бульвар Новый Венец, 3/4</p>
                                    <p>тел. <span class="phone">+7 (8422) 44-30-64</span></p>
                                </div>
                                <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;source=constructor-api&amp;um=constructor%3A861a8245b066ae96ec68bd496b962683dfb56915a9b0c3c91248e0166fa58025" frameborder="0" allowfullscreen="true" width="100%" height="450px" style="display: block;"></iframe>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div>
                        <div class="upscrollbutton">
                            <a id="toTop" style="display: block;"><img src="/wp-content/themes/fond_goncharova/img/upscroll.png" width="36" height="36" alt="^"></a>
                        </div>
                    </div>
                </div>
            </div><!-- .entry-content -->

            <footer class="entry-footer default-max-width">

            </footer><!-- .entry-footer -->

        </div>

    </article><!-- #post-<?php the_ID(); ?> -->


</div>
<?php get_footer() ?>