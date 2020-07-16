<section class="academics__grade-info" id="has_accordion_tabs">
  <ul class="accordion grade-info__tabs  tabs" id="academic-accordion-tabs" data-responsive-accordion-tabs="accordion large-tabs" data-allow-all-closed="true">
    <li class="tabs-title hs-tab is-active academic-tab"><a href="#tab1" aria-selected="true" class="uppercase bran-bold">High School</a></li>
    <li class="tabs-title ms-tab academic-tab"><a href="#tab2" class="uppercase bran-bold">Middle School</a></li>
    <li class="tabs-title elm-tab academic-tab"><a href="#tab3" class="uppercase bran-bold">Elementary</a></li>
    <li class="tabs-title pre-tab academic-tab"><a href="#tab4" class="uppercase bran-bold">Preschool</a></li>
  </ul>

  <div class="tabs-content" data-tabs-content="academic-accordion-tabs">
    <div class="tabs-panel is-active academic-content-container" id="tab1">
      <div class="tab__inner-container flex">
        <div class="tab__copy-content tab__content-container">
          <h2 class="copy-content__title text-green bran-reg"><?php the_field('high_school_content_title'); ?></h2>
          <p class="copy-content__copy bran-reg"><?php the_field('high_school_content_copy'); ?></p>
          <a href="<?php the_field('school_page_button_hs'); ?>" class="btn btn-green school-page-btn">High School</a>
        </div>
        <div class="tab__slider-content tab__content-container">
          <div class="academic-slider__slide-inner-container hs__inner-container" id="tab__hs-slider">
            <?php if( have_rows('high_school_tab_slider')): ?>
              <?php while( have_rows('high_school_tab_slider') ): the_row(); 
            
                $slide_image = get_sub_field('slide_image');
                $video_link = get_sub_field('video_slide_link_hs');
            
                ?>
            
                <div class="slide-image__container">
                  <figure class="slide-image" style="background-image:url('<?=$slide_image?>');" data-vid-src="https://player.vimeo.com/video/<?=$video_link?>">
                    <?php if ($video_link): ?>
                      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/play-button.svg" alt="play button" class="play-btn">
                    <?php endif ?>
                  </figure>
                </div>
            
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="tab__hs-arrow-container arrow-container flex"></div>
        </div>
      </div>
    </div>
    <div class="tabs-panel academic-content-container" id="tab2">
      <div class="tab__inner-container flex">
        <div class="tab__copy-content tab__content-container">
          <h2 class="copy-content__title text-green bran-reg"><?php the_field('middle_school_content_title'); ?></h2>
          <p class="copy-content__copy bran-reg"><?php the_field('middle_school_content_copy'); ?></p>
          <a href="<?php the_field('school_page_button_ms'); ?>" class="btn btn-green school-page-btn">Middle School</a>
        </div>
        <div class="tab__slider-content tab__content-container">
          <div class="academic-slider__slide-inner-container ms__inner-container" id="tab__ms-slider">
            <?php if( have_rows('middle_school_tab_slider')): ?>
              <?php while( have_rows('middle_school_tab_slider') ): the_row(); 
            
                $slide_image = get_sub_field('slide_image');
                $video_link = get_sub_field('video_slide_link_ms');
            
                ?>
            
                <div class="slide-image__container">
                  <figure class="slide-image" style="background-image:url('<?=$slide_image?>');" data-vid-src="https://player.vimeo.com/video/<?= $video_link ?>">
                    <?php if ($video_link): ?>
                      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/play-button.svg" alt="play button" class="play-btn">
                    <?php endif ?>
                  </figure>
                </div>
            
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="tab__ms-arrow-container arrow-container flex"></div>
        </div>
      </div>
    </div>
    <div class="tabs-panel academic-content-container" id="tab3">
      <div class="tab__inner-container flex">
        <div class="tab__copy-content tab__content-container">
          <h2 class="copy-content__title text-green bran-reg"><?php the_field('elementary_content_title'); ?></h2>
          <p class="copy-content__copy bran-reg"><?php the_field('elementary_content_copy'); ?></p>
          <a href="<?php the_field('school_page_button_elementary'); ?>" class="btn btn-green school-page-btn">Elementary</a>
        </div>
        <div class="tab__slider-content tab__content-container">
          <div class="academic-slider__slide-inner-container elm__inner-container" id="tab__elm-slider">
            <?php if( have_rows('elementary_tab_slider')): ?>
              <?php while( have_rows('elementary_tab_slider') ): the_row(); 
            
                $slide_image = get_sub_field('slide_image');
                $video_link = get_sub_field('video_slide_link_elm');
            
                ?>
            
                <div class="slide-image__container">
                  <figure class="slide-image" style="background-image:url('<?=$slide_image?>');" data-vid-src="https://player.vimeo.com/video/<?= $video_link ?>">
                    <?php if ($video_link): ?>
                      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/play-button.svg" alt="play button" class="play-btn">
                    <?php endif ?>
                  </figure>
                </div>
            
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="tab__elm-arrow-container arrow-container flex"></div>
        </div>
      </div>
    </div>
    <div class="tabs-panel academic-content-container" id="tab4">
      <div class="tab__inner-container flex">
        <div class="tab__copy-content tab__content-container">
          <h2 class="copy-content__title text-green bran-reg"><?php the_field('preschool_content_title'); ?></h2>
          <p class="copy-content__copy bran-reg"><?php the_field('preschool_content_copy'); ?></p>
          <a href="<?php the_field('school_page_button_preschool'); ?>" class="btn btn-green school-page-btn">Preschool</a>
        </div>
        <div class="tab__slider-content tab__content-container">
          <div class="academic-slider__slide-inner-container pre__inner-container" id="tab__preschool-slider">
            <?php if( have_rows('preschool_tab_slider')): ?>
              <?php while( have_rows('preschool_tab_slider') ): the_row(); 
            
                $slide_image = get_sub_field('slide_image');
                $video_link = get_sub_field('video_slide_link_preschool');
            
                ?>
            
                <div class="slide-image__container">
                  <figure class="slide-image" style="background-image:url('<?=$slide_image?>');" data-vid-src="https://player.vimeo.com/video/<?= $video_link ?>">
                    <?php if ($video_link): ?>
                      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/play-button.svg" alt="play button" class="play-btn">
                    <?php endif ?>
                  </figure>
                </div>
            
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="tab__preschool-arrow-container arrow-container flex"></div>
        </div>
      </div>
    </div>
  </div>
</section>