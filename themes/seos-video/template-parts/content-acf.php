<!-- Blog Content -->
<?php
    $text =  get_field('text');
    $textArea = get_field('text_area');
    $number = get_field('number');
    $wysiwyg = get_field('wysiwyg');
    $image = get_field('image');
    $pageLink = get_field('page_link');
    $postObject = get_field('post_object');
?>

<?php if($text): ?>
    <div class="font-italic">
        <?= $text; ?>
    </div>
<?php endif; ?>

<?php if($textArea): ?>
    <div>
        <?= $textArea; ?>
    </div>
<?php endif; ?>

<?php if($number): ?>
    <div>
        <?= $number; ?>
    </div>
<?php endif; ?>

<?php if($wysiwyg): ?>
    <div>
        <?= $wysiwyg; ?>
    </div>
<?php endif; ?>

<?php if($image): ?>
    <div>
        <img src='<?= $image; ?>' />
    </div>
<?php endif; ?>

<?php if($pageLink): ?>
    <div>
        <a href="<?= $pageLink; ?>">Page Link</a>
    </div>
<?php endif; ?>

<?php if($postObject): ?>
    <?php 
        $post = $postObject;
        setup_postdata( $post ); 
    ?>
        <div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    <?php wp_reset_postdata();?>      
<?php endif; ?>



<!-- Blog Content 2 -->
<?php
    $petName =  get_field('pet_name');
    $petImage = get_field('pet_image');
?>

<?php if($petName): ?>
    <div>
        <?= $petName; ?>
    </div>
<?php endif; ?>

<?php if($petImage): ?>
    <div>
        <img src='<?= $petImage; ?>' />
    </div>
<?php endif; ?>
        