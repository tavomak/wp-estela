<?php
/*
 * The Single Post
 */
?>

<?php /* Single post loop */ if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-5">
      <h1><?php the_title()?></h1>
      <div class="header-meta text-muted">
        <?php
          _e('By ', 'bk');
          the_author_posts_link();
          _e(' on ', 'bk');
          bk_post_date();
        ?>
      </div>
    </header>
    <section>
      <?php
        the_post_thumbnail();
        the_content();
        wp_link_pages();
      ?>
    </section>
    <footer class="mt-5 border-top pt-3">
      <div>
        <?php _e('Category: ', 'bk'); the_category(', ') ?> | <?php if (has_tag()) { the_tags('Tags: ', ', '); ?> | <?php } _e('Comments', 'bk'); ?>: <?php printf( number_format_i18n( get_comments_number() ) ); ?>
      </div>

      <div class="author-bio media mt-5">
        <?php bk_author_avatar(); ?>
        <div class="media-body ml-3">
          <p class="h4 author-name"><?php _e('Author: ', 'bk'); the_author_posts_link(); ?></p>
          <?php if (bk_author_description()) {
            ?>
            <div class="author-description"><?php bk_author_description(); ?></div>
            <?php
          } ?>
          <p class="author-other-posts mb-0"><?php _e('Other posts by ', 'bk'); the_author_posts_link(); ?></p>
        </div>
      </div><!-- /.author-bio -->

      <div class="row mt-5 border-top pt-3">
        <div class="col">
          <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post<br/>'.'%title'); ?>
        </div>
        <div class="col text-right">
          <?php next_post_link('%link', 'Next post <i class="fas fa-fw fa-arrow-right"></i><br/>'.'%title'); ?>
        </div>
      </div>

    </footer>
  </article>

<?php
  // This continues in the single post loop
    if ( comments_open() || get_comments_number() ) :
      //comments_template();
      comments_template('/loops/single-post-comments.php');
		endif;
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>