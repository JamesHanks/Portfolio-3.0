// Masonry Initialisation
var grid = document.querySelector('.grid');
var msnry = new Masonry( grid, {

  // Options...
  itemSelector: '.grid-item',

  // Responsive column and gutter
  columnWidth: '.project-link',
  gutter: '.project-gutter',
  percentPosition: true
});