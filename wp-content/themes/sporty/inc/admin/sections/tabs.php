<h2 class="nav-tab-wrapper">
	<a href="#getting_started" class="nav-tab nav-tab-active"><?php _e( 'Getting Started', 'sporty' ); ?></a>
	<a href="#add_ons" class="nav-tab"><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span> <?php _e( 'Sporty Pro', 'sporty' ); ?> <span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span></a>
</h2>

<script>
jQuery( document ).ready( function() {
	jQuery( 'div.panel' ).hide();
	jQuery( 'div#getting_started' ).show();

	jQuery( '.nav-tab-wrapper a' ).click( function() {

		var tab = jQuery( this );
		var	tabs_wrapper = tab.closest( '.about-wrap' );

		jQuery( '.nav-tab-wrapper a', tabs_wrapper ).removeClass( 'nav-tab-active' );
		jQuery( 'div.panel', tabs_wrapper ).hide();
		jQuery( 'div' + tab.attr( 'href' ), tabs_wrapper ).show();
		tab.addClass( 'nav-tab-active' );

		return false;
	});
});
</script>
