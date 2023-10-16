<?php
    $count = -1;
    $content = "text_block";
    $gallery = "gallery";
?>

<div class="gallery">

    <?php 
        while($count < 6) :
            $count++;
    ?>

    <?php
        $images = pods_field("gallery" . $count);
    ?>

    <div class="container flex flex-wrap center ph4-l">
        <?php if ($images && !empty("text_block_" . $count)): ?>
        <!-- First gallery and block -->
        <?php foreach($images as $image) : ?>
        <?php $image_width = $image['post_title']?>
        <div class="gallery-image ph3 mb4 <?php echo $image_width ?>">
            <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
            <?php $caption = wp_get_attachment_caption($image['ID'])  ?>

            <!-- If the caption is not empty, we render it into the page -->

            <?php if(!empty($caption)) : ?>
            <p class="caption archivo-regular f5 o-50 pt3 mv0">
                <?php echo $caption ?>
            </p>

            <?php endif;?>
        </div>
        <?php endforeach; ?>
        <div class="pv4 ph4 measure-wide text-block center f4">
            <?php echo pods_field("text_block_" . $count)[0];  ?>
        </div>
    </div>
</div>
<?php endif; endwhile;  ?>
</div>