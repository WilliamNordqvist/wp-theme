<?php 
get_header();
$title = get_field('page_title');
$subTitle = get_field('sub_title');
$textColor = get_field('title_color');
$image = get_field('background');

?>

<section class="hero">
            


                <div class="container">
                    <?php if($title):?>
                        <h1 class="title"><?php echo $title; ?> </h1>
                    <?php endif;?>
                    <?php if($subTitle):?>
                        <p class="sub-title"><?php echo $subTitle; ?> </p>
                    <?php endif;?>
                </div>


                <?php if( $image ): ?>
	                <style type="text/css">
                        .hero {
                            background-image: url(<?php echo $image; ?>);
                        }
                        .title, .sub-title {
                            color:<?php echo $textColor; ?>
                        }
	                </style>
	            <?php endif; ?>

    
</section>

<section>
<?php


$rows = get_field('info_text');
if( have_rows('info_text') ):
    while ( have_rows('info_text') ) : the_row();
        $sub_value1 = get_sub_field('text1');
        $sub_value2 = get_sub_field('text2');
        $sub_value3 = get_sub_field('text3');
        ?> 

<div class="container">

    <div class="row"> 
        <div class="text">
            <p > <?php echo $sub_value1; ?> </p>
        </div>
        <div> </div>
    </div>

    <div class="row"> 
        <div class="text">
            <p > <?php echo $sub_value2; ?> </p>
        </div>
        <div> </div>
    </div>

    <div class="row"> 
        <div class="text">
            <p> <?php echo $sub_value3; ?> </p>
        </div>
        <div> </div>
    </div>
    
</div>
        <?php
        // Do something...
    endwhile;
else :
    // no rows found
endif;


?> 



</section>

<?php get_footer();?>

