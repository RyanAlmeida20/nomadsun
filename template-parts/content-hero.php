<!-- Hero need a background image on it -->
<!-- <h1>
    <a href="<?php the_permalink(); ?>">Check out <?php the_title() ?></a>
</h1> -->
<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="
          <?php nice_background('hero_image')?>
     " href="<?php the_permalink(); ?>">
    <div class="hero-content white tc">
        <!-- Our title -->
        <h1 class="archivo hero-heading f2 f1-l bold ma0 mb2 ttu lh-title"><?php the_title() ?></h1>

        <!-- Subheading -->
        <?php if( get_field('subhead') ): ?>
        <h2 class=" tenor hero-subhead mb5  mb6-l mt0 white ttu lh-title"><?php the_field('subhead'); ?></h2>
        <?php endif; ?>

        <!-- Formated date -->
        <?php if( get_field('date') ): ?>
        <p class=" archivo f6 bold white ttu m0 tracked hero-date">
            <?php 
                nice_date(get_field('date'));
            ?>
        </p>
        <?php endif; ?>
    </div>
</a>