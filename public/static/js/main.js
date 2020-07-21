$(function(){
	'use-strict';

	$(".side-nav-left").sideNav({

		edge: 'right',
		closeOnClick: false

	});

<<<<<<< HEAD
	$("#cart-menu").animatedModal();
	
=======
	$("#index-menu").animatedModal();

>>>>>>> cf0722f1263bbbcca67ee2f7a36371ef55bf0ac8
	$("#nav-menu").animatedModal({
		modalTarget: 'animatedModal2'
	});


	// slider
	$(".slider").slider({full_width: true});


	// screenshot
	$(".screenshot-content").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,


	})

	// testimonial
	$("#owl-testimonial").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// latest-news
	$(".latest-news-owl").owlCarousel({

		autoPlay : false,
		singleItem: true

	})

	// loader
    $("#fakeLoader").fakeLoader({
<<<<<<< HEAD
      
=======

>>>>>>> cf0722f1263bbbcca67ee2f7a36371ef55bf0ac8
      zIndex: 999,
      spinner: 'spinner4',
      bgColor: '#191919'

    });

    $('.collapsible').collapsible({
		accordion: false
	});

    $('select').material_select();
<<<<<<< HEAD
    
});
=======

});
>>>>>>> cf0722f1263bbbcca67ee2f7a36371ef55bf0ac8
