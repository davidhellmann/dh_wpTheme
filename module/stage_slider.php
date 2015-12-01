<div class="m_sliderStage" dir="rtl">
  <div class="slick--stage">
    <?php $_slides = wp_count_posts()->publish; ?>

    <?php $i = 0; if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); $i++; ?>
    <?php

    $_nummer              = get_field('nummer');
    $_imageLive           = get_field('image_live');
    $_imageAfter          = get_field('image_after');
    $_link                = get_field('link_de');

    // All Images Sizes
    $_sizeSmall           = 'small';
    $_sizeLarge           = 'large';
    $_sizeFull            = 'full';

    $_imageLiveSmall      = wp_get_attachment_image_src( $_imageLive, $_sizeSmall );
    $_imageLiveLarge      = wp_get_attachment_image_src( $_imageLive, $_sizeLarge );
    $_imageLiveFull       = wp_get_attachment_image_src( $_imageLive, $_sizeFull );

    $_imageAfterSmall     = wp_get_attachment_image_src( $_imageAfter, $_sizeSmall );
    $_imageAfterLarge     = wp_get_attachment_image_src( $_imageAfter, $_sizeLarge );
    $_imageAfterFull      = wp_get_attachment_image_src( $_imageAfter, $_sizeFull );

    ?>
    <div class="m_sliderStage__slide">

        <figure class="m_sliderStage__bgImage mask" style="background-image: url('<?php echo $_imageLiveFull[0]; ?>')">
        </figure>

        <div class="m_sliderStage__content">
          <img class="m_sliderStage__schrank" src="<?php bloginfo('template_directory' ); ?>/assets/images/schrank.png" alt="Spind">
          <div class="number"><?php echo $_nummer; ?><br><span>Dezember</span></div>
        </div>

        <?php if ($_nummer < $_slides) { ?>
        <figure class="m_sliderStage__bgImage  m_sliderStage__bgImage--after">

            <img src="<?php echo $_imageAfterFull[0]; ?>"
                 srcset="<?php echo $_imageAfterSmall[0]; ?> 300w,
                         <?php echo $_imageAfterLarge[0]; ?> 640w,
                         <?php echo $_imageAfterFull[0]; ?> 960w"alt="<?php the_title(); ?>">
        </figure>
        <?php } ?>

        <?php if ($_nummer <= $_slides && $_nummer-1 != 0) { ?><span class="sliderNav next"><?php echo $_nummer-1; ?></span><?php } ?>
        <?php if ($_slides > $_nummer) { ?><span class="sliderNav prev"><?php echo $_nummer+1; ?></span><?php } ?>
    </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</div>

<div class="m_sharing">
  <a href="http://twitter.com/home?status=Wem gehört dieser Spind? — Adventskalender — Die Roten Bullen — <?php bloginfo('home' ); ?> via @DieRotenBullen" title="Diesen Beitrag twittern" target="_blank">
    <img src="<?php bloginfo('template_directory' ); ?>/assets/images/icon_twitter.svg" class="injectMe" alt="twitter"><span>Share on twitter</span></a>

  <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo('home' ); ?>" target="blank">
    <img src="<?php bloginfo('template_directory' ); ?>/assets/images/icon_facebook.svg" class="injectMe" alt="facebook"><span>Share on facebook</span></a>

  <a href="https://plus.google.com/share?url=<?php bloginfo('home' ); ?>" target="blank">
    <img src="<?php bloginfo('template_directory' ); ?>/assets/images/icon_googleplus.svg" class="injectMe" alt="Google+"><span>Share on Google+</span></a>
</div>

<div class="m_contact">
  <h1>Türchen <?php echo $i; ?></h1>

  <?php
  $_zweiSpieler     = array("7", "13", "14", "18");
  $_trainer         = array("19");
  $_zweiTrainer     = array("21");

  if (in_array($i, $_zweiSpieler)) { ?>
  <p>
    Hinter diesem Spind-Türchen verstecken sich <strong>zwei Spieler</strong>
  </p>

  <?php } elseif (in_array($i, $_trainer)) { ?>
  <p>
    Hinter diesem Spind-Türchen versteckt sich <strong>ein Trainer</strong>
  </p>

  <?php } elseif (in_array($i, $_zweiTrainer)) { ?>
  <p>
    Hinter diesem Spind-Türchen verstecken sich <strong>zwei Trainer</strong>
  </p>

  <?php } else { ?>
  <p>
    Hinter diesem Spind-Türchen versteckt sich <strong>ein Spieler</strong>
  </p>

  <?php } ?>

  <div class="m_contact__form"><?php echo do_shortcode('[contact-form-7 id="33" title="Kalender" html_id="contact"]'); ?></div>


</div>


<div class="m_abbinder">
  <div class="m_abbinder__content">
    <p>
      Und wem das noch nicht genug ist, auf den wartet beim Weihnachtseinkauf im Shopping-Center „Höfe am Brühl“  noch eine große Überraschung. Denn dort könnt ihr den Adventskalender der Roten Bullen auch ganz real erleben, einen Blick in die Spinde werfen und mit etwas Glück den einen oder anderen Spieler oder unser Maskottchen Bulli treffen. Auf geht’s Leipzig!
    </p>
  </div>
</div>
