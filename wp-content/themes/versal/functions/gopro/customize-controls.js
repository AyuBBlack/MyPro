( function( api ) {

	// Extends our custom "versal-gopro" section.
	api.sectionConstructor['versal-gopro'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
