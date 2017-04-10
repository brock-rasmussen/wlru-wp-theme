function addBootstrapDropdownHover() {
  var navDropdowns = jQuery('.navbar [data-toggle="dropdown"]');
  if (jQuery('body').outerWidth() < 768) {
    navDropdowns.bootstrapDropdownHover('destroy');
  } else {
    navDropdowns.bootstrapDropdownHover({ setClickBehavior: 'disable' });
  }
}
jQuery(document).ready(function() {
  addBootstrapDropdownHover();
  jQuery('[data-toggle="tooltip"]').tooltip();
  jQuery('[data-toggle="popover"]').popover();
  jQuery('[data-slick]').slick();
});
jQuery(window).resize(function() {
  addBootstrapDropdownHover();
});
