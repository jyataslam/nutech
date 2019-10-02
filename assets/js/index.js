/* Change style of navbar on scroll */

$(document).ready(function () {
	document.getElementById('nav-btn').addEventListener('click', handleNavAnimationClick);

	$('.accordion-wrapper > ul > li:has(ul)').addClass("accordion-content");

    $('.accordion-wrapper > ul > li > a').click(function () {
        var checkElement = $(this).next();

        $('.accordion-wrapper li').removeClass('accordion-active');
        $(this).closest('li.accordion-content').addClass('accordion-active');

        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('accordion-active');
            checkElement.slideUp('normal');
        }

        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('.accordion-wrapper ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
        }

        if (checkElement.is('ul')) {
            return false;
        } else {
            return true;
        }
    });
});

// Hide Sidenav on Body click
$('#background, #main').click(() => handleBodyClick());

handleBodyClick = () => {
	$(navBtn).removeClass('on');
    $(sidenav).removeClass('sidenav-transform-x');
    $(main).removeClass('main-transform-x');
    $(body).removeClass('no-scroll');
}


$(window).scroll( () => navScroll() );

navScroll = () => {
	var navbar = document.getElementById("myNavbar");
	if ($('body').scrollTop > 10 || document.documentElement.scrollTop > 10) {
		navbar.className = "w3-bar" + " w3-card" + " w3-light-white" + " background-white ";
		$('.w3-button').css({
			'color': '#000'
		})
	} else {
		$('#myNavbar').removeClass("w3-card w3-light-white background-white");
		$('.w3-button').css({
			'color': '#000'
		})
	}
}

// Navigation
let nav = $('.navigation-menu-wrapper');
let navBtn = $('#nav-btn');
let sidenav = $('.nav-menu');
let main = $('.background');
let body = $('body');

handleNavAnimationClick = () => {
    if ($(navBtn).hasClass('on')){
        $(navBtn).removeClass('on');
        $(sidenav).removeClass('sidenav-transform-x');
        $(main).removeClass('main-transform-x');
        $(body).removeClass('no-scroll');
    } else {
        $(navBtn).addClass('on');
        $(sidenav).addClass('sidenav-transform-x');
        $(main).addClass('main-transform-x');
        $(body).addClass('no-scroll');
    }
}

// MAA Calculator
function checkBrowser() {
	var Brow = navigator.appName;
	var Ver = navigator.appVersion;
	if (Brow == "Netscape") {
		if (parseInt(Ver.substring(0, 2)) < 3.0) {
			alert("You are using a stale version of Netscape - some parts of this calculator may not work correctly.  For best results download the latest version of Netscape.")
		}

	}

}

function maapart(form) {
	var totalparticles;
	var totalactivity;
	var dose;
	var totalparticles = form.totalparticles.value
	var totalactivity = form.totalactivity.value
	var dose = form.dose.value
	form.tzero.value = totalparticles * dose / totalactivity;
	form.t1h.value = (Math.round(totalparticles * dose / totalactivity / 0.891) + "");
	form.t2h.value = (Math.round(totalparticles * dose / totalactivity / 0.794) + "");
	form.t3h.value = (Math.round(totalparticles * dose / totalactivity / 0.708) + "");
	form.t4h.value = (Math.round(totalparticles * dose / totalactivity / 0.631) + "");
	form.t5h.value = (Math.round(totalparticles * dose / totalactivity / 0.562) + "");
	form.t6h.value = (Math.round(totalparticles * dose / totalactivity / 0.501) + "");
	form.t7h.value = (Math.round(totalparticles * dose / totalactivity / 0.447) + "");
	form.t8h.value = (Math.round(totalparticles * dose / totalactivity / 0.398) + "");
	form.t9h.value = (Math.round(totalparticles * dose / totalactivity / 0.355) + "");
	form.t10h.value = (Math.round(totalparticles * dose / totalactivity / 0.316) + "");
	form.t11h.value = (Math.round(totalparticles * dose / totalactivity / 0.282) + "");
	form.t12h.value = (Math.round(totalparticles * dose / totalactivity / 0.251) + "");
	form.t18h.value = (Math.round(totalparticles * dose / totalactivity / 0.126) + "");
	form.t24h.value = (Math.round(totalparticles * dose / totalactivity / 0.063) + "");
}


// Pediatric Dose Calculations

function peddose(form) {
	var wtlb;
	var wtkg;
	wt = form.wt.value
	if (form.unit1[0].checked) {
		wtkg = wt
		wtlb = wt * 2.2
	}
	else if (form.unit1[1].checked) {
		wtkg = wt / 2.2
		wtlb = wt
	}
	var dob;
	var dot;
	var adltdose = form.adltdose.value;
	var diff;
	var mos;
	var yrs;
	dob = Date.parse(form.dob.value);
	dot = Date.parse(form.dot.value);
	diff = Math.abs(dot - dob);
	mos = diff / 86400000 / 30;
	yrs = diff / 86400000 / 365;
	form.clark.value = wtlb / 150 * adltdose;
	form.webster.value = (yrs + 1) / (yrs + 7) * adltdose;
	form.bsa.value = (((Math.pow(wtkg, 0.7)) / 11) / 1.73) * adltdose;
	form.young.value = (yrs / (yrs + 12)) * adltdose;
	form.fried.value = (mos / 150) * adltdose;
}
