<?php
    locate_template( 'header/header_works.php', true );
?>

<main class="inner">

    <!-- works-breadcrumb -->
    <nav class="breadcrumb">
        <div class="breadcrumb-item">
            <span><a href="<?php echo home_url('/works')?>"><i class="fas fa-home"></i>ホーム</a></span>
            <span><a href="<?php echo home_url('/work')?>">制作実績</a></span>
            <span><?php echo the_title(); ?></span>
        </div>
    </nav><!-- /.breadcrumb -->

    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="works-content">       
        <div class="works-content_top">

            <div class="works-thumbnail_single">
                <?php
                    $img = get_field( 'img' );
                    echo '<img src="' . $img . '" alt="ブログアイキャッチ画像" loading="lazy" decoding="async">';
                ?>
            </div><!-- /.works-thumbnail -->
    
            <div class="works-info">
                <div class="works-info_title">
                    <h1><?php the_title(); ?></h1>
                    <?php
                        $url = get_field( 'url' );
                        echo '<p><a href="' . $url . '" target="_blank" rel="external"><i class="fas fa-external-link-alt"></i></a></p>';
                    ?> 
                </div><!-- /.works-info_title -->
    
                <div class="works-info_date">
                    <?php the_content(); ?>
                </div><!-- /.works-info_date -->
    
                <?php 
                    $terms = get_the_terms($post->ID, 'area');
                    if (!empty($terms)):
                ?>
                    <ul class="works-card_area works-info_area">
                            <?php
                                foreach ($terms as $term) {
                                    echo '<li>' . $term->name . '</li>';
                                }
                            ?>
                    </ul><!-- /.works-info_area -->
                <?php endif; ?>
    
                <div class="works-info_overview">
                    <p><?php the_field('about'); ?></p>
                </div><!-- /.works-info_overview -->
            </div><!-- /.works-info --> 
        </div><!-- /.works-content_top -->

        <dl class="works-content_items">
            <?php if (get_field('aim')): ?>
                <div class="works-content_item">
                    <dt>目的</dt>
                    <dd><p><?php the_field('aim'); ?></p></dd>
                </div><!-- /.works-content_item -->
            <?php endif; ?>
    
            <?php if (get_field('approach')): ?>
                <div class="works-content_item">
                    <dt>アプローチ</dt>
                    <dd>
                        <p><?php the_field('approach'); ?></p>

                        <?php if (get_field('approach_list')): ?>
                            <ul class="approach-list">
                                <?php the_field('approach_list'); ?>
                            </ul>
                        <?php endif; ?>
                    </dd>
                </div><!-- /.works-content_item -->
            <?php endif; ?>
      
            <?php if (get_field('try')): ?>
                <div class="works-content_item">
                        <dt>実践内容</dt>
                        <dd>
                            <ul class="try-items">
                                <?php
                                    $try_lists = get_field('try');
                                    foreach ($try_lists as $try_list) {
                                        echo '<li class="try-list">' . $try_list .'</li>';
                                    }
                                ?>
                            </ul><!-- /.try-items -->
                        </dd>
                    </div><!-- /.works-content_item -->
            <?php endif; ?>

            <div class="works-content_item">
                <dt>制作工数</dt>
                <dd>
                    <p class="process-time"><span><i class="far fa-clock"></i></span>約 <?php the_field('time'); ?></p>

                    <ul class="process-items">

                        <?php 
                            $process_plan = get_field('process-list_plan');
                            if(!empty($process_plan)):
                        ?>
                            <li class="process-item">
                                <p class="process-list-title">サイト設計</p>
                                <ul class="process-list">
                                    <?php
                                        foreach ($process_plan as $plan) {
                                            echo '<li>'. $plan . '</li>';
                                        }
                                    ?>
                                </ul><!-- /.process-list --> 
                            </li>
                        <?php endif; ?>

                        <?php 
                            $process_design = get_field('process-list_design');
                            if(!empty($process_design)):
                        ?>    
                        <li class="process-item">
                            <p class="process-list-title">デザイン</p>
                            <ul class="process-list">
                                <?php
                                    foreach ($process_design as $design) {
                                        echo '<li>'. $design . '</li>';
                                    }
                                ?>
                            </ul><!-- /.process-list -->    
                        </li>
                        <?php endif; ?>

                        <?php 
                            $process_code = get_field('process-list_code');
                            if(!empty($process_code)):
                        ?>    
                        <li class="process-item">
                            <p class="process-list-title">コーディング</p>
                            <ul class="process-list">
                                <?php
                                    foreach ($process_code as $code) {
                                        echo '<li>'. $code . '</li>';
                                    }
                                ?>
                            </ul><!-- /.process-list -->    
                        </li>
                        <?php endif; ?>

                        <?php 
                            $process_cms = get_field('process-list_cms');
                            if(!empty($process_cms)):
                        ?>
                        <li class="process-item">
                            <p class="process-list-title">CMS導入</p>
                            <ul class="process-list">
                                <?php
                                    foreach ($process_cms as $cms) {
                                        echo '<li>'. $cms . '</li>';
                                    }
                                ?>
                            </ul><!-- /.process-list -->    
                        </li>
                        <?php endif; ?>

                        <?php 
                            $process_seo = get_field('process-list_seo');
                            if(!empty($process_seo)):
                        ?>
                        <li class="process-item">
                            <p class="process-list-title">SEO対策</p>
                            <ul class="process-list">
                                <?php
                                    foreach ($process_seo as $seo) {
                                        echo '<li>'. $seo . '</li>';
                                    }
                                ?>
                            </ul><!-- /.process-list -->        
                        </li>
                        <?php endif; ?>

                    </ul><!-- /.process-lists -->
                </dd>
            </div><!-- /.works-content_item -->
        </dl>

    </section><!-- /.works-content -->

    <?php endwhile; ?>
    <?php endif; ?>

</main><!-- /.inner -->

<!-- footer -->
<?php
    locate_template( 'footer/footer_works.php', true );
?>