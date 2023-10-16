<!-- Our header -->
<div class="flex-l">
    <!-- Our header image -->
    <div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php if (get_field('hero_image')): ?> background-image: url(<?php the_field('hero_image'); ?>);
    <?php endif; ?>"> </div>
    <!-- Our header content -->
    <div class="w-100 w-40-l flex items-center content-center w-40 ph3 ph4-l header-content">
        <div class="tc header-info">

            <p class="mt4 mt1-l f6 archivo mt0 mb5 absolute-l ttu tracked header-date">
                <?php nice_date(get_field('date')); ?>
            </p>


            <h1 class="f2 fl-l archivo mt0 mb2 ttu lh-title">
                <?php the_title() ?>
            </h1>

            <h3 class="f2 fl-l tenor mt0 mb5 ttu lh-title">
                <?php the_field('subhead') ?>
            </h3>

            <p class="f4 cado i header-intro mv0">
                <?php echo pods_field("header_intro")[0] ?>
            </p>
        </div>
    </div>

</div>