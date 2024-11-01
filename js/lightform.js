window.addEvent('domready', function() {
	//Code to add FormCheck to the current from.
	var myCheck = new FormCheck('lightform', {
		display : {
			fadeDuration : 750,
			tipsOffsetX : -15,
			tipsOffsetY : -8
		},
		alerts : {
			email: "Please enter a valid email: <br /><span>E.g. yourname@domain.com</span>",
			url: "Please enter a valid url: <br /><span>E.g. http://www.artflutter.com</span>",
			spamcheck: "<span>4 + 3 = ???</span>",
			lengthmin: "The length is incorrect, it must be at least %0 characters"
		},
		regexp : {
			spamcheck: /^[7]+$/
		}
	});
});