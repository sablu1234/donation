<?php

$args=array(
    'post_type'=>array('post'),
    'posts_per_page' => 3,
    'offset' => 2,
);

$the_time=new wp_query($args);

if($the_time->have_posts()):

while ($the_time->have_posts()): $the_time->the_post();
?>
 <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <?php 
                            if(has_post_thumbnail('medium')){
                                the_post_thumbnail();
                            }
                            else{
                                ?>
                            <img class="hasan" src="<?php echo get_parent_theme_file_uri('/assets/img/img-1.png');?>" alt="home-image">
                                <?php
                            }
                            
                            the_post_thumbnail('medium',array('class'=>'hasan'));?>
                            <h1><?php the_title('hi')?></h1>
                            <h5><?php the_content('')?></h5>
                            <h1><?php the_time()?></h1>
                            <a href="<?php the_permalink(); ?>">hi permalink</a>
                            <!-- <img class="hasan" src="<?php echo get_parent_theme_file_uri('/assets/img/img-1.png');?>" alt="home-image"> -->
                        </div>
                    </div>
<?php
endwhile;
else:
    echo "post nai";
endif;

?>

