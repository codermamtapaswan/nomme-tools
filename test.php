<section class="about mt-5 ">
  <div class="container">
    <div class="sub-heading">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28">
        <path d="M5.25 5.25c0-1.93 1.57-3.5 3.5-3.5H24.5c1.93 0 3.5 1.57 3.5 3.5v17.5c0 1.93-1.57 3.5-3.5 3.5H4.375A4.374 4.374 0 0 1 0 21.875V7c0-.968.782-1.75 1.75-1.75S3.5 6.032 3.5 7v14.875c0 .481.394.875.875.875s.875-.394.875-.875zm3.5 1.313v4.375a1.31 1.31 0 0 0 1.313 1.313h6.125a1.31 1.31 0 0 0 1.313-1.313V6.563a1.31 1.31 0 0 0-1.313-1.313h-6.125A1.31 1.31 0 0 0 8.75 6.563m11.375-.438c0 .481.394.875.875.875h2.625c.481 0 .875-.394.875-.875s-.394-.875-.875-.875H21a.88.88 0 0 0-.875.875m0 5.25c0 .481.394.875.875.875h2.625c.481 0 .875-.394.875-.875s-.394-.875-.875-.875H21a.88.88 0 0 0-.875.875M8.75 16.625c0 .481.394.875.875.875h14c.481 0 .875-.394.875-.875s-.394-.875-.875-.875h-14a.88.88 0 0 0-.875.875m0 5.25c0 .481.394.875.875.875h14c.481 0 .875-.394.875-.875S24.106 21 23.625 21h-14a.88.88 0 0 0-.875.875" />
      </svg>
      Latest Coursers
    </div>
    <div class="fs-1 fw-bold text-black mb-3">
      Get the Latest Online Free Courses & Enhace Your Professional Skills. </div>
    <div class="seprator d-flex">
      <div class="sm-yellow mt-2 me-1"></div>
      <div class="big-line mt-2"></div>
      <div class="sm-blue mt-2 ms-1"></div>
    </div>
    <div class="row mb-2 mt-4">
      <?php

      $section_2_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
      );

      $section_2_query = new WP_Query($section_2_args);

      while ($section_2_query->have_posts()) :
        $section_2_query->the_post();

        if ($section_2_query->current_post <= 4) :
      ?>
          <div class="col mb-4">
            <div class="img-placeholder">
              <?php
              if (has_post_thumbnail()) :
                echo '<a href="' . get_the_permalink() . '">';
                the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));
                echo '</a>';
              endif;
              ?>
            </div>
            <div class="learning-card">
              <a class="learn-title d-block mt-3" href="<?php the_permalink(); ?>">
                <?php echo wp_trim_words(get_the_title(), 8); ?>
              </a>
              <div class="learning-timeline d-flex justify-content-between align-items-center">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="learning-aut-n">
                  <?php the_author(); ?>
                </a>
                <span class="learning-date">
                  <?php echo get_the_modified_date('M d') . 'th'; ?>
                </span>
              </div>
            </div>
          </div>
        <?php

        else :
          if ($section_2_query->current_post === 5) echo '</div><div class="row">';
        ?>
          <div class="col-lg-4 col-md-4 mb-4">
            <div class="row align-items-center">
              <div class="col-lg-4">
                <div class="img-placeholder">
                  <?php
                  if (has_post_thumbnail()) :
                    echo '<a href="' . get_the_permalink() . '">';
                    the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));
                    echo '</a>';
                  endif;
                  ?>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="learning-card">
                  <a class="learn-title d-block mt-3 mt-lg-0" href="<?php the_permalink(); ?>">
                    <?php echo wp_trim_words(get_the_title(), 8); ?>
                  </a>
                  <div class="learning-timeline d-flex justify-content-between align-items-center">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="learning-aut-n">
                      <?php the_author(); ?>
                    </a>
                    <span class="learning-date">
                      <?php echo get_the_modified_date('M d') . 'th'; ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        endif;
      endwhile;
      ?>
    </div>
  </div>
</section>




<section class="about mt-5 ">
  <div class="container">
    <div class="sub-heading">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28">
        <path d="M5.25 5.25c0-1.93 1.57-3.5 3.5-3.5H24.5c1.93 0 3.5 1.57 3.5 3.5v17.5c0 1.93-1.57 3.5-3.5 3.5H4.375A4.374 4.374 0 0 1 0 21.875V7c0-.968.782-1.75 1.75-1.75S3.5 6.032 3.5 7v14.875c0 .481.394.875.875.875s.875-.394.875-.875zm3.5 1.313v4.375a1.31 1.31 0 0 0 1.313 1.313h6.125a1.31 1.31 0 0 0 1.313-1.313V6.563a1.31 1.31 0 0 0-1.313-1.313h-6.125A1.31 1.31 0 0 0 8.75 6.563m11.375-.438c0 .481.394.875.875.875h2.625c.481 0 .875-.394.875-.875s-.394-.875-.875-.875H21a.88.88 0 0 0-.875.875m0 5.25c0 .481.394.875.875.875h2.625c.481 0 .875-.394.875-.875s-.394-.875-.875-.875H21a.88.88 0 0 0-.875.875M8.75 16.625c0 .481.394.875.875.875h14c.481 0 .875-.394.875-.875s-.394-.875-.875-.875h-14a.88.88 0 0 0-.875.875m0 5.25c0 .481.394.875.875.875h14c.481 0 .875-.394.875-.875S24.106 21 23.625 21h-14a.88.88 0 0 0-.875.875" />
      </svg>
      Latest Coursers
    </div>
    <div class="fs-1 fw-bold text-black mb-3">
      Get the Latest Online Free Courses & Enhace Your Professional Skills. </div>
    <div class="seprator d-flex">
      <div class="sm-yellow mt-2 me-1"></div>
      <div class="big-line mt-2"></div>
      <div class="sm-blue mt-2 ms-1"></div>
    </div>
    <div class="row mb-2 mt-4">
      <?php

      $section_2_args = array(
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => 8,
      );

      $section_2_query = new WP_Query($section_2_args);

      while ($section_2_query->have_posts()) :
        $section_2_query->the_post();

        if ($section_2_query->current_post <= 4) :
      ?>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="img-placeholder">
              <?php
              if (has_post_thumbnail()) :
                echo '<a href="' . get_the_permalink() . '">';
                the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));
                echo '</a>';
              endif;
              ?>
            </div>
            <div class="learning-card">
              <a class="learn-title d-block mt-3" href="<?php the_permalink(); ?>">
                <?php echo wp_trim_words(get_the_title(), 8); ?>
              </a>
              <div class="learning-timeline d-flex justify-content-between align-items-center">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="learning-aut-n">
                  <?php the_author(); ?>
                </a>
                <span class="learning-date">
                  <?php echo get_the_modified_date('M d') . 'th'; ?>
                </span>
              </div>
            </div>
          </div>
      <?php
        endif;
      endwhile;
      ?>
    </div>
  </div>
</section>