// Masonry Initialisation
var grid = document.querySelector('.grid');

var msnry = new Masonry( grid, {
	itemSelector: '.grid-item',
	// Responsive column and gutter
	columnWidth: '.project-link',
	gutter: '.project-gutter',
	percentPosition: true
});

// Activate below button
window.scrollDown = function(target) {
	var scrollContainer = target;
		do { // Locate the scroll container
			scrollContainer = scrollContainer.parentNode;
			if (!scrollContainer) return;
			scrollContainer.scrollTop += 1;
		} while (scrollContainer.scrollTop == 0);

		var targetY = 0;
		do { // Locate top of the target relative to the container
			if (target == scrollContainer) break;
			targetY += target.offsetTop;
		} while (target = target.offsetParent);

		scroll = function(c, a, b, i) {
			i++; if (i > 30) return;
			c.scrollTop = a + (b - a) / 30 * i;
			setTimeout(function(){ scroll(c, a, b, i); }, 17);
		}
		// Start scrolling
		scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
	}