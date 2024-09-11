<?php get_header(); ?>

<div class="main_container">
    <div class="clear"></div>
    <div id="o-fonde1" data-tooltip="">
        <div class="headerfon">
            <h2>О фонде</h2>
        </div>
        <div class="itemtext">
            <div class="columns columns_content">
                <div class="column column_left column_medium">
                    <div style="text-align: center;"><a href="/img/landmuseum.jpg" class="hs" onclick="return hs.expand(this);" title="Приблизить"><img src="/wp-content/themes/fond_goncharova/img/landmuseum.jpg" class="hs" alt="Музей"></a></div>
                </div>
                <div class="column column_large">
                    <p><strong>Культурный фонд имени И.А. Гончарова создан&nbsp; в 2005 году</strong></p>
                    <p>Основные цели создания и деятельности Фонда:</p>
                    <ul>
                        <li>сохранение, создание и развитие культурных традиций и историко-культурного наследия Симбирского – Ульяновского&nbsp; края;</li>
                        <li>привлечение внебюджетных средств для реализации творческих инициатив, продвижения инновационных методов работы в сфере музейного дела;</li>
                        <li>реализация социально-значимых проектов, направленных на осуществление экспозиционной, просветительской и образовательной деятельности в целях всестороннего развития личности и воспитания у молодого поколения чувства патриотизма и любви&nbsp; к своей малой родине.</li>
                    </ul>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="headerfon">&nbsp;</div>
        </div>
    </div>
    <div id="novosti1" data-tooltip="">
        <div class="headerfon">
            <h2><a href="/news">Новости</a></h2>
        </div> <a name="news" id="news"></a>
        <div class="newsslider">

            <?php

            $perfomaces = get_posts(['category' => 2, 'order' => 'DESC', 'numberposts' => 6]);

            foreach ($perfomaces as $perfomace) {
                $postId = $perfomace->ID;

            ?>

                <a href="<?= get_permalink($perfomace->ID) ?>">
                    <h3><?= $perfomace->post_title ?></h3>
                    <div class="hr1"></div>
                    <div class="preview">
                        <div style="background-image: url('<?= get_the_post_thumbnail_url($perfomace->ID) ?>');"></div>
                    </div>
                    <div class="hr1"></div>
                </a>


            <?php

            } //end foreach

            wp_reset_query(); // сброс запроса

            ?>

            <a href="https://fond.local/?p=24">
                <h3>Выставка «Впереди – Победа» в Ульяновском государственном педагогическом университете имени И.Н. Ульянова</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1055m.jpg)"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=28">
                <h3>В Ульяновске открылась выставка «Впереди – Победа», посвященная ульяновцам - участникам Специальной военной операции</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1054m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=39">
                <h3>В Ульяновске состоялась презентация 3D копий исторических зданий, изготовленных в рамках грантового проекта «Город на Венце. Новый взгляд»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1053m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=48">
                <h3>Межрегиональный фольклорный фестиваль «Симбирский взгляд. Традиции и современность» собрал на своей сцене коллективы из Ульяновска, Казани и Самары</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1048m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=51">
                <h3>Проект «Впереди – Победа»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1047m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=54">
                <h3>ФЕСТИВАЛЬ «КРАСКИ НАРОДОВ»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1045m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
        </div>
    </div>
    <div id="proektyi" data-tooltip="">
        <div class="headerfon">
            <h2>Проекты</h2>
        </div> <a name="news" id="virtualshow"></a>
        <div class="newsslider">
            <a href="https://fond.local/?p=74">
                <h3>«Впереди – Победа»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1046m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=77">
                <h3>«Ульяновск, на взлёт!»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1043m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=82">
                <h3>«Город на Венце. Новый взгляд»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1042m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=85">
                <h3>«Симбирский взгляд. Традиции и современность»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1033m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=88">
                <h3>Молодежный фестиваль «Краски народов»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1032m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=91">
                <h3>«Вербатим: лица тылового города»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1029m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=98">
                <h3>"Симбирские ткачи": творческая лаборатория по возрождению ремёсел»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1028m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href=" https://fond.local/?p=107">
                <h3>«Этнографическая экспедиция. Народные промыслы»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1027m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=120">
                <h3>«Ульяновск – город трудовой доблести. Мы гордимся!»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1026m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=125">
                <h3>«Музейные волонтёры – наследию Симбирска 2.0» </h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1025m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=135">
                <h3>Партнёрский проект «Хождение за традицией»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1024m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
            <a href="https://fond.local/?p=140">
                <h3>«Познавая культуру друг друга»</h3>
                <div class="hr1"></div>
                <div class="preview">
                    <div style="background-image: url(/wp-content/themes/fond_goncharova/base/data/1023m.jpg);"></div>
                </div>
                <div class="hr1"></div>
            </a>
        </div>
    </div>
    <div id="goID966" data-tooltip="">
        <div class="clear"></div>
    </div>
</div>
<script async="" src="./Совет музеев ПФО._files/spxl.js.Без названия" data-pixel-id="22985"></script>
<meta name="proculture-verification" content="905197975acdae856d5326b3fc94fda7">


<?php get_footer(); ?>