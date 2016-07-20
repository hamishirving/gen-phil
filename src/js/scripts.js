'use strict';

// DOM Ready
jQuery(document).ready(function($) {

	// Add active class to nav on current page
	$(function(){
	    var url = window.location.pathname, 
	        urlRegExp = new RegExp(url === '/' ? window.location.origin + '/?$' : url.replace(/\/$/,''));
	        // now grab every link from the navigation (not .bold)
	        $('.nav-links li a').each(function(){
	            // and test its normalized href against the url pathname regexp
	            if(urlRegExp.test(this.href.replace(/\/$/,''))){
	                $(this).addClass('active');
	            }
	        });
	});

	// Open & close mobile menu
	$('#mobile-menu-btn').on('click', function() {
		$('.mobile-menu').velocity('transition.fadeIn', 300);
		$('.mobile-menu-links li')
			.velocity('transition.slideRightIn', {stagger: 100})
			.delay(300);
	});
	$('#close-mobile-menu-btn').on('click', function() {
		$('.mobile-menu').velocity('transition.fadeOut', 500);
	});

	// HMU.cool

	function loadSuccess() {
		var rsvpSection = $('section.rsvp');
		var successMsg = $('#successMsg');

		rsvpSection.hide();
		successMsg.show();
	}

	$('#sendRsvp').on('click', function(e) {
		e.preventDefault();

		var email = $('#email').val();
		var name = $('#name').val();
		var message = $('#message').val();
		var HMU_URL = 'http://api.hmu.cool/messages/f6f9cf14a10a294862f203e01f37a500';
		var data = {
		  email: email,
		  fields: {
		    name: name,
		    message: message
		  }
		};
		$.post(HMU_URL, data)
			.done(function() {
				loadSuccess();
				console.log('Sent: ' + data);
			});
	});

// End DOM Ready
});


// All content loaded (inc images, css etc)
window.onload = function() {

	// Fade out loader
	$('.loader').velocity('transition.fadeOut', 300);

	// Fade in elements on page load
	// $('.nav').velocity('transition.slideDownIn', {delay: 300}, 1000);
	$('.page-content').velocity('transition.slideUpIn', {delay: 300}, 1000);
	
// End Window Ready
};
