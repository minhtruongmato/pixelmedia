$(document).ready(function () {
	$(document)
		.on('click.nav.header', function (e) {
			$('.btn-toggle-nav').removeClass('active');
			$('header').find('.header-nav').removeClass('show');
		})
		.on('click.nav.header', '.btn-toggle-nav', function (e) {
			e.preventDefault();
			e.stopPropagation();

			$(this).toggleClass('active');
			$('header').find('.header-nav').toggleClass('show');
		});
});