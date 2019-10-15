function gridInit( $container ){
    if( !$().isotope ) {
        console.log('gridInit: Isotope not Defined.');
        return true;
    }

    if( $container.length < 1 ) { return true; }
    if( $container.hasClass('customjs') ) { return true; }

    $container.each( function(){
        var element = $(this),
            elementTransition = element.attr('data-transition'),
            elementLayoutMode = element.attr('data-layout'),
            elementStagger = element.attr('data-stagger'),
            elementOriginLeft = true;

        if( !elementTransition ) { elementTransition = '0.65s'; }
        if( !elementLayoutMode ) { elementLayoutMode = 'masonry'; }
        if( !elementStagger ) { elementStagger = 0; }

        setTimeout( function(){
            if( element.hasClass('portfolio') ){
                element.isotope({
                    layoutMode: elementLayoutMode,
                    isOriginLeft: elementOriginLeft,
                    transitionDuration: elementTransition,
                    stagger: Number( elementStagger ),
                    masonry: {
                        columnWidth: element.find('.portfolio-item:not(.wide)')[0]
                    }
                });
            } else {
                element.isotope({
                    layoutMode: elementLayoutMode,
                    isOriginLeft: elementOriginLeft,
                    transitionDuration: elementTransition
                });
            }
        }, 300);
    });
}