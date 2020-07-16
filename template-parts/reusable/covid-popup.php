<?php

  if( !isset($_COOKIE['covid-banner-cookie']) ){ ?>

    <div class="covid-banner">
      <div class="banner-inner">
        <a href="<?php the_field('covid_19_banner_link', 'options'); ?>" class="parents-link">
          <h2 class="covid-message"><?php the_field('covid_19_banner_title', 'options'); ?></h2>
        </a>
        <div class="banner-escape"></div>
      </div>
    </div>
    <?php
  }
  ?>
