( function( api ) {

	// Extends our custom "advocator-lite" section.
	api.sectionConstructor['advocator-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
