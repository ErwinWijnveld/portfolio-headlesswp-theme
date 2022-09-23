<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="hidden" name="post_type" value="kennisbank" />
    <input type="text" class="search-field" name="s" placeholder="Doorzoek onze kennisbank.." value="<?php echo get_search_query(); ?>">
    <input type="image" src="@asset('images/search.svg')" value="Search">
</form>