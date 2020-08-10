/**
 * Overlay Custom Functionality
 */
( function( $ ) {

    $( document ).ready( function() {

        // Add button to sub-menu item to show nested pages / Only used on mobile
        $( '#overlay-main-menu' ).append( '<button class="main-menu-close"></button>' );
        $( '.main-navigation li.page_item_has_children > a, .main-navigation li.menu-item-has-children > a' ).after( '<button class="menu-dropdown-btn"><i class="fa fa-angle-right"></i></button>' );
        $( '.main-navigation.overlay-nav-block ul#overlay-main-menu > li > a, .main-navigation.overlay-nav-block #overlay-main-menu > ul > li > a' ).wrapInner( '<span class="nav-span-block"></span>' );
        // Add/Remove .focus class for accessibility
        $( '.main-navigation' ).find( 'a' ).on( 'focus blur', function() {
            $( this ).parents( 'ul, li' ).toggleClass( 'focus' );
        } );
        // Mobile nav button functionality
        $( '.menu-dropdown-btn' ).click( function(e){
            $(this).parent().toggleClass( 'open-page-item' );
        });
        // The menu button
        $( '.menu-toggle' ).click( function(e){
            $( 'body' ).toggleClass( 'show-main-menu' );
        });
        $( '.main-menu-close' ).click( function(e){
            $( '.menu-toggle' ).click();
        });
        // True/False Aria label for accessibility
        $( '.menu-toggle' ).on( 'click', function() {
            $( '.primary-menu nav ul' ).toggle();
            var visible = $( 'body' ).hasClass( 'show-main-menu' );
            if ( visible ) {
                $(this).attr( 'aria-expanded', 'true' );
            } else {
                $(this).attr( 'aria-expanded', 'false' );
            }
        } );

        // Show / Hide Floating Sidebar
        $( '.floating-sidebar-control' ).click( function(e){
            $( 'body' ).toggleClass( 'show-floating-sidebar' );
        });

        // Show / Hide Search
        $( '.header-search' ).toggle( function(){
            $( 'body').addClass( 'show-site-search' );
            $( '.header-search-block input.search-field' ).focus();
        },function(){
            $( 'body').removeClass( 'show-site-search' );
        });

    } );

    $( window ).load( function() {

        

    } );

    $(window).resize(function () {
        // Close menu if open and browser is scrolled out on mobile
        if ( $( window ).width() > 980 ) {
            $( 'body' ).removeClass( 'show-main-menu' );
        }
    });

    // Hide Search if user clicks outside
    $( document ).mouseup( function (e) {
        var container = $( '.header-search-block' );
        if ( !container.is( e.target ) && container.has( e.target ).length === 0 ) {
            $( 'body' ).removeClass( 'show-site-search' );
        }
    });

} )( jQuery );