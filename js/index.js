var typing_machine_input = function (str, element){
    str = str.split('');
    speed = 85;
    var output = '', i = 0;
    
    var start = setInterval(function(){
      output += str[i] == '.' && i + 1 !== str.length ? '. \n' : str[i];
      element.text(output);
      i++;
      if(i === str.length) {
        clearInterval(start);
      }
    }, speed);
}

if ($(window).width() > 768) {
	if ($(".current-main-nav").length > 0) {
	  //$(".site-wrap").css('margin-top', $(".current-main-nav").outerHeight() + 'px');
	}
}

$("#mobile-nav-toggler").click(function () {
	$("#mobile-nav").toggle();
});

function jump_to_element (element, e) {
  e.preventDefault();
    $([document.documentElement, document.body]).animate({
      scrollTop: element.offset().top - 100
  }, 2000);
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Index.js

window.type_happened = false;
$(window).scroll(function () {
	if ($(window).scrollTop() >= $("#hero").offset().top - 100 && !window.type_happened) {
		window.type_happened = true;
		typing_machine_input($("#contact-typer").data("text"), $("#contact-typer"));
		setTimeout(function () {
			element = $("#contact-typer");
			element.html(element.html().substr(0, element.html().length - 1));
			setTimeout(function () {
				element.append("!");
			}, 400);
		}, 85 * $("#contact-typer").data("text").length + 400);
	}
})


// Particles
const particles = {
	particles: {
		number: { value: 150, density: { enable: true, value_area: 800 } },
		color: { value: ['#ebebeb', '#fff', '#384fa5'] },
		shape: {
			type: "circle",
			stroke: { width: 0, color: "#000000" },
			polygon: { nb_sides: 5 },
			image: { src: "img/github.svg", width: 100, height: 100 },
		},
		opacity: {
			value: 1,
			random: true,
			anim: { enable: true, speed: 1, opacity_min: 0, sync: false },
		},
		size: {
			value: 3.945738208161363,
			random: true,
			anim: { enable: false, speed: 4, size_min: 0.3, sync: false },
		},
		line_linked: {
			enable: false,
			distance: 150,
			color: "#ffffff",
			opacity: 0.4,
			width: 1,
		},
		move: {
			enable: true,
			speed: 1,
			direction: "none",
			random: true,
			straight: false,
			out_mode: "out",
			bounce: false,
			attract: { enable: false, rotateX: 600, rotateY: 600 },
		},
	},
	interactivity: {
		detect_on: "canvas",
		events: {
			onhover: { enable: true, mode: "" },
			onclick: { enable: true, mode: "" },
			resize: true,
		},
		modes: {
			grab: { distance: 400, line_linked: { opacity: 1 } },
			bubble: {
				distance: 155.84415584415586,
				size: 0,
				duration: 2,
				opacity: 0,
				speed: 3,
			},
			repulse: { distance: 73.08694910712106, duration: 0.4 },
			push: { particles_nb: 4 },
			remove: { particles_nb: 2 },
		},
	},
	retina_detect: true,
};

$(document).ready(function () {
	$.getScript('https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', function (data, textStatus, jqxhr) {
		particlesJS("hero-new-particles", particles, function () {});
	});
});

// Contact
$("#contact-submit").click(function (e) {
	e.preventDefault();

	data = new FormData();
	data.append('fullname', $("#contact-fullname").val());
	data.append('contact', $("#contact-way").val());
	
	$.ajax({
		url: 'contact.php',
		processData: false,
		contentType: false,
		method : 'POST',
		data : data,
		success: function (response) {
			console.log(response);
			$("#contact-feedback").text(response).css('display', 'inline-block');
		}
	});
});

// Modal Contact
$("#modal-contact-form").submit(function (e) {
	e.preventDefault();

	data = new FormData();
	data.append('fullname', $("#modal-form-name").val());
	data.append('contact', $("#modal-form-contact").val());
	data.append('message', $("#modal-form-message").val());
	
	$.ajax({
		url: 'contact.php',
		processData: false,
		contentType: false,
		method : 'POST',
		data : data,
		success: function (response) {
			console.log(response);
			$("#modal-form-feedback").text(response).animate('display', 'inline-block');
		}
	});
});

setTimeout(function () {
	$("#contact-modal-wrap img").attr('src', $("#modal-contact-form img").attr('lsrc'));
}, 13000);

setTimeout(function () {
	if (getCookie('modal-closed') != 'true') {
		$("#contact-modal-wrap").fadeIn('fast');
		setCookie('modal-closed', 'true', 1);
	}
}, 15000);

$("#contact-modal-exit-btn").click(function () {
	$("#contact-modal-wrap").fadeOut('fast');
});

$("#menu-contact-link").click(function (e) {
	e.preventDefault();
	$("#contact-modal-wrap").fadeIn('fast');
});

// Pricing tabs
$.each($(".pricing-tab"), function () {
	$(this).click(function () {
		tab = $(this).data('tab');

		$(".pricing-tab.active").removeClass('active');
		$(this).addClass('active');

		$.each($(".price-num"), function () {
			if (tab == 'one-time') {
				$(this).text($(this).data('priceonce'));
			}

			if (tab == 'monthly') {
				$(this).text($(this).data('pricemonth'));
			}

			if (tab == 'yearly') {
				$(this).text($(this).data('priceyear'));
			}
		})
	});
});

// Move Stars
$(window).mousemove(function(e) {
	var mouseX = (e.pageX / 25);
	var mouseY = (e.pageY / 5);

	$("#hero-new-stars").css({
	  filter: "hue-rotate(" + (mouseX * 12) + "deg)"
	});
});

// Coffee Section On Scroll
$(window).scroll(function () {
	if ($(window).scrollTop() > $("#packages-section-title").offset().top) {
		if ($(window).scrollTop() < $("#packages-section-title-tech").offset().top) {
			$("#coffee-section").css('bottom', 20)
		} else {
			$("#coffee-section").css('bottom', '-100%')
		}
	} else {
		$("#coffee-section").css('bottom', '-100%')
	}
});

// Preload
setTimeout(function () {
	$("#preload").hide();
	$('body').css('overflow-y', 'scroll');
}, 100);

// Contact suggest popup
setTimeout(function () {
	$('#contact-reminder-box').css({ animation: 'pop 0.3s linear 1', display: 'block' })
}, 10000);

setTimeout(function () {
	$('#contact-reminder-box').css({ animation: 'popout 0.3s linear 1', display: 'none' })
}, 17000);

if (getCookie('accept-cookies')) {
	$('.cookies').hide();
}

// Cookies
$('.cookies-accept').on('click', e => {
	document.querySelectorAll('.cookies')[0].style.transform = 'translateX(0) scale(0.8)'
	document.querySelectorAll('.cookies')[0].style.opacity = '0'
	document.querySelectorAll('.cookies')[0].style.filter = 'blur(3px)'

	setTimeout(() => {
		document.querySelectorAll('.cookies')[0].style.transform = 'translateX(-100%)'
	}, 400);

	setCookie('accept-cookies', true, 30)
});

// Cursor
$(document).mousemove(function (e) {
	if ($(e.target).css('cursor') == 'pointer') {
		$("#mouse-tracker").css({
			height: 30,
			width: 30,
			opacity: 0.25,
			background: '#07c1e7'
		}).addClass("hvr-pulse")
	} else {
		$("#mouse-tracker").css({
			height: 25,
			width: 25,
			opacity: 0.1,
			background: '#888'
		}).removeClass("hvr-pulse");

		if ($(e.target).hasClass("particles-js-canvas-el")) {
			$("#mouse-tracker").css({
				background: '#fff',
				opacity: 0.2
			})
		} else {
			$("#mouse-tracker").css({
				background: '#888'
			})
		}
	}

	$("#mouse-tracker").css({
		left:  e.clientX - $("#mouse-tracker").width() / 2,
		top: e.clientY - $("#mouse-tracker").height() / 2
	})
});

// Hero typing machine animation
$(document).ready(function () {
	typing_texts = [ 'החלומות שלך' ,'ההתקדמות שלך', 'העסק שלך' ];

	for (j = 0; j < 5; j++) {
		setTimeout(function () {
			for (i = 0; i < typing_texts.length; i++) {
				setTimeout(function (i) {
					typing_machine_input(typing_texts[i], $("#hero-typing"));
				}, (1500 * (i + 1)) + 200, i)
			}
		}, j * 5000);
	}
});