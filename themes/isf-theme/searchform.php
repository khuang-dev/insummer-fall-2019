<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
	<a class="icon-search" aria-hidden="true">
	<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Search.svg" alt="icon-search">
</a>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit">
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
