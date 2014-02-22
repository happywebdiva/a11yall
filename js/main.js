// Initiate Adobe's jquery-accessibleMegaMenu from plugins.js     
jQuery(document).ready(function($) {
	$("nav:first").accessibleMegaMenu({
		/* prefix for generated unique id attributes, which are required 
			 to indicate aria-owns, aria-controls and aria-labelledby */
		uuidPrefix: "accessible-megamenu",
		/* css class used to define the megamenu styling */
		menuClass: "mdd-menu",
		/* css class for a top-level navigation item in the megamenu */
		topNavItemClass: "menu-item",
		/* css class for a megamenu panel */
		panelClass: "sub-nav",
		/* css class for a group of items within a megamenu panel */
		panelGroupClass: "sub-menu",
		/* css class for the hover state */
		hoverClass: "hover",
		/* css class for the focus state */
		focusClass: "focus",
		/* css class for the open state */
		openClass: "open"
	});
});
// End Adobe's jquery-accessibleMegaMenu