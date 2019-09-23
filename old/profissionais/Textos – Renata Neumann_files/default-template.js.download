( function( $ ) {

$( window ).on( 'elementor/frontend/init', function() {
	$(window).ready(function() {
		if ( undefined !== window.elementor ) {
			var template = {
				source: 'local',
				template_id: default_template.id,
				get: function(value) {
					return this[value];
				}
			};
			
			if ( elementor.elements.isEmpty() ) {
				elementor.templates.startModal();
				elementor.templates.importTemplate(template);
			}
		}
	});
} );

} )( jQuery );