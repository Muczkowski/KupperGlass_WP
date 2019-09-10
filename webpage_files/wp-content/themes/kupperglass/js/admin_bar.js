// Copyright 2019 Salamanders Studio (https://salamanders.pl)

(function() {
	let adminBar = document.getElementById('admin_bar');
	let scrolling = false,
		previousTop = 0,
		currentTop = 0,
		scrollDelta = 10,
		scrollOffset = 150;
	window.addEventListener('scroll', () => {
		if (!scrolling) {
			scrolling = true;
			requestAnimationFrame(autoHideHeader);
		}
	});
	function autoHideHeader() {
		var currentTop = window.scrollY;
		transitionBar(currentTop);
		previousTop = currentTop;
		scrolling = false;
	};
	function transitionBar(currentTop) {
		if (previousTop - currentTop > scrollDelta) {
			adminBar.classList.remove('is-hidden');
		} else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
			adminBar.classList.add('is-hidden');
		}
	}
})();