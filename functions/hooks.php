<?php
/*
 * bk Hooks
 * Designed to be used by a child theme.
 */

// Navbar (in `header.php`)

function bk_navbar_before() {
  do_action('navbar_before');
}

function bk_navbar_after() {
  do_action('navbar_after');
}
function bk_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
    <?php
  } else {
		do_action('navbar_brand');
	}
}
function bk_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input class="form-control border-secondary" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
        <div class="input-group-append">
          <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'bk') ?>" class="btn btn-outline-secondary">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}


// Main

function bk_main_before() {
  do_action('main_before');
}
function bk_main_after() {
  do_action('main_after');
}

// Sidebar (in `sidebar.php` -- only displayed when sidebar has 1 widget or more)

function bk_sidebar_before() {
  do_action('sidebar_before');
}
function bk_sidebar_after() {
  do_action('sidebar_after');
}

// Footer (in `footer.php`)

function bk_footer_before() {
  do_action('footer_before');
}
function bk_footer_after() {
  do_action('footer_after');
}
function bk_bottomline() {
	if ( ! has_action('bottomline') ) {
		?>
		<?php		
	} else {
		do_action('bottomline');
	}
}
