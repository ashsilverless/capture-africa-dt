jQuery(document).ready(function($) {

/* ADD CLASS ON SCROLL*/
var navHeight = $(".component__app-bar").height();
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("body").addClass("scrolled");
        navHeight = $(".component__app-bar").height();
        console.log(navHeight);
    } else {
        $("body").removeClass("scrolled");
        navHeight = $(".component__app-bar").height();
        console.log(navHeight);
    }
});

/* SCROLL TO NEXT SECTION FROM HERO*/
$('div.js-scroll-down').click(function() {
		var target = $('#under-hero');
		$('html,body').animate({
			scrollTop: target.offset().top -navHeight
		}, 1000);
		return false;
});

$(document).ready(function () {
  const animationDurationAttrName = 'data-expandable-animation-duration';

  const containerAttrName = 'data-expandable-container';
  const containerAttr = `[${containerAttrName}=true]`;

  const contentAttrName = 'data-expandable-content';
  const contentAttr = `[${contentAttrName}=true]`;

  const heroAttrName = 'data-expandable-hero';
  const heroAttr = `[${heroAttrName}=true]`;

  const rootAttrName = 'data-expandable-item';
  const rootAttr = `[${rootAttrName}=true]`;

  const scrollAnimationAttrName = 'data-expandable-scroll-animation';
  const scrollAnimationAttr = `[${scrollAnimationAttrName}=true]`;

  const stateAttrName = 'data-expandable-is-expanded';
  const stateAttr = `[${stateAttrName}=true]`;

  const oneAtATimeAttrName = 'data-expandable-one-at-a-time';
  const oneAtATimeAttr = `[${oneAtATimeAttrName}=true]`;

  function expandableSetState(context, newState) {
    const containerElement = $(context).closest(containerAttr);
    const rootElement = $(context).closest(rootAttr);
    const contentElement = $(rootElement).children(contentAttr)[0];

    const rawScrollAnimationState =
      $(containerElement).attr(scrollAnimationAttrName) || 'false';
    const scrollIsAnimated = rawScrollAnimationState == 'true';

    const rawOneAtATime =
      $(containerElement).attr(oneAtATimeAttrName) || 'false';
    const isOneAtATime = rawOneAtATime == 'true';

    if (isOneAtATime) {
      $(containerElement).children(rootAttr).attr(stateAttrName, false);
    }

    $(rootElement).attr(stateAttrName, newState);

    if (scrollIsAnimated) {
      const rawAnimationDuration = $(containerElement).attr(
        animationDurationAttrName
      );
      const animationDuration = Number(rawAnimationDuration) || 500;
      const scrollTo = newState ? $(contentElement) : $(rootElement);
      const scrollPadding = window.innerHeight / 10;

      $('html, body').animate(
        {
          scrollTop: $(scrollTo).offset().top - scrollPadding,
        },
        animationDuration
      );
    }
  }

  function expandableCloseAllInstances(context) {
    const rootElement = $(context).closest(rootAttr);
    $(rootElement).attr(stateAttrName, false);
  }

  function expandableGetNewState(context) {
    const rootElement = $(context).closest(rootAttr);
    const rawState = $(rootElement).attr(stateAttrName) || 'false';
    const currentState = rawState == 'true';
    const newState = !currentState;

    return newState;
  }

  $(document).on('click', '[data-expandable-cta=true]', function (event) {
    event.preventDefault();

    const newState = expandableGetNewState(this);
    expandableSetState(this, newState);
  });

  $(document).on('click', '[data-expandable-open-cta=true]', function (event) {
    event.preventDefault();

    expandableSetState(this, true);
  });

  $(document).on('click', '[data-expandable-close-cta=true]', function (event) {
    event.preventDefault();

    expandableSetState(this, false);
  });

  $('.component__app-bar__menu-icon-container').on('click', function (event) {
    event.preventDefault();

    const state = $('body').attr('data-app-menu-is-open') || false;
    const isExpanded = state == 'true';

    console.log(state, isExpanded);

    $('body').attr('data-app-menu-is-open', !isExpanded);
  });

  $('.hero__cta').on('click', function (event) {
    event.preventDefault();

    const nextElement = $(this).closest('.hero').next();
    console.log(nextElement);

    $('html, body').animate(
      {
        scrollTop: $(nextElement).offset().top - window.innerHeight * 0.2,
      },
      500
    );
  });

  // $('.intro-description__cta').on('click', function (event) {
  //   event.preventDefault();

  //   const content = $(this).closest('.intro-description__content');
  //   const state = $(content).attr('data-expanded');
  //   const isExpanded = state == 'true';

  //   $(content).attr('data-expanded', !isExpanded);
  // });

  // $('.expandable__inline__hero__cta').on('click', function (event) {
  //   event.preventDefault();

  //   const content = $(this).closest('.expandable__inline');
  //   const expandableContent = $(content)
  //     .children('.expandable__inline__container')
  //     .eq(0)
  //     .children('.expandable__inline__content-container')[0];

  //   const state = $(content).attr('data-expanded');
  //   const isExpanded = state == 'true';
  //   const newState = !isExpanded;

  //   $('.expandable__inline').attr('data-expanded', false);
  //   $(content).attr('data-expanded', newState);

  //   const scrollPadding = window.innerHeight / 10;
  //   let scrollElement = newState ? expandableContent : content;

  //   console.log(scrollElement);

  //   $('html, body').animate(
  //     {
  //       scrollTop: $(scrollElement).offset().top - scrollPadding,
  //     },
  //     500
  //   );
  // });

  // $('.expandable__full-width__hero__cta').on('click', function (event) {
  //   event.preventDefault();

  //   const content = $(this).closest('.expandable__full-width');

  //   $(content).attr('data-expanded', true);

  //   $('html, body').animate(
  //     {
  //       scrollTop:
  //         $('.expandable__full-width__content').offset().top -
  //         window.innerHeight / 10,
  //     },
  //     500
  //   );
  // });

  // $('.expandable__full-width__content__cta').on('click', function (event) {
  //   event.preventDefault();

  //   const content = $(this).closest('.expandable__full-width');

  //   $(content).attr('data-expanded', false);

  //   $('html, body').animate(
  //     {
  //       scrollTop: $(content).offset().top - window.innerHeight / 10,
  //     },
  //     500
  //   );
  // });

  try {
    const experienceSlider = tns({
      container: '.home-hero-slider',
      items: 1,
      autoplay: false,
      nav: false,
      prevButton: '.component__quote-slider__controls--prev',
      nextButton: '.component__quote-slider__controls--next',
      // gutter: 20,
    });
  } catch (error) {
    /*console.group('Quote Slider');
    console.error(error);
    console.groupEnd();*/
  }


  try {
    const experienceSlider = tns({
      container: '.component__quote-slider__container',
      items: 1,
      autoplay: false,
      nav: false,
      prevButton: '.component__quote-slider__controls--prev',
      nextButton: '.component__quote-slider__controls--next',
      // gutter: 20,
    });
  } catch (error) {
    /*console.group('Quote Slider');
    console.error(error);
    console.groupEnd();*/
  }

var numItems = $('.experience-block').length;
var i = 1;
for (i = 1; i < (numItems + 1); i++) {

  try {
    const experienceSlider = tns({
      autoplay: false,
      container: '.component__experience-slider__list' + [i],
      gutter: 0,
      items: 1,
    mouseDrag: true,
      mode: 'carousel',
      nav: false,
      nextButton: '.exp-next'+ [i],
      prevButton: '.exp-prev'+ [i],
      responsive: {
        800: {
          items: 1,
        },
        1100: {
          items: 1,
        },
      },
    });
  } catch (error) {
    /*console.group('Experience Slider');
    console.error(error);
    console.groupEnd();*/
  }

  try {
    const experienceSlider = tns({
      autoplay: true,
      container: '.home-slider__list' + [i],
      gutter: 0,
      items: 1,
      mouseDrag: true,
      mode: 'gallery',
      speed: 3000,
      nav: false,
      nextButton: '.exp-next'+ [i],
      prevButton: '.exp-prev'+ [i],
      responsive: {
        800: {
          items: 1,
        },
        1100: {
          items: 1,
        },
      },
    });
  } catch (error) {
    /*console.group('Experience Slider');
    console.error(error);
    console.groupEnd();*/
  }






}


});

/* MAGNIFIC POPUP */
$('.gallery').each(function() { // the containers for all your galleries
	$(this).magnificPopup({
		delegate: 'a',
		type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below

          zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
              // openerElement is the element on which popup was initialized, in this case its <a> tag
              // you don't need to add "opener" option if this code matches your needs, it's defailt one.
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        },
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1]
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});

$('.toggle').click(function(event) {
  $(this).toggleClass('active');
  $( this ).siblings( '.toggle' ).children( '.toggle__answer' ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( this ).siblings( '.toggle' ).removeClass('active');
  $( this ).children( '.toggle__answer' ).slideToggle( "slow", function() {
    // Animation complete.
  });
});
$('.read-more-trigger').click(function(event) {
    $('.read-more-wrapper').addClass('expand');
    $(this).addClass('hide');
});

$('.button-three.expanding').click(function(event) {
    $(this).toggleClass('active');
});

}); //Don't remove ---- end of jQuery wrapper
