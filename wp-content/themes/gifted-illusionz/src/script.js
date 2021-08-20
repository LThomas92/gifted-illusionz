$ = jQuery.noConflict();
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$(document).ready(function () {
  if (
    jQuery(".project-block-section > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    jQuery(".project-block-section > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".project-block-section .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >=
        jQuery(this).data("offset")
      ) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }

  $(window).scroll(() => {
    let scrolled = $(window).scrollTop();

    // gutenberg scroll anims
    if (gutenbergScrollAnims) {
      $(".project-block-section .to-reveal").each(function () {
        console.log($(this).data("offset"));
        console.log(scrolled + windowHeight - blockTriggerHeight);
        if (
          scrolled + windowHeight - blockTriggerHeight >=
          $(this).data("offset")
        ) {
          $(this).removeClass("to-reveal");
          $(this).addClass("revealed");
        }
      });
    }
  });

  $(window).resize(() => {
    if (
      jQuery(".project-block-section > *").length &&
      !(window.location.hash != "" && jQuery(window.location.hash).length)
    ) {
      gutenbergScrollAnims = true;
      // console.log(window.scrollY + $(window).height());
      // console.log($('.gutenberg-styles > *'));
      jQuery(".project-block-section > *").each(function () {
        let offset = jQuery(this).get(0).getBoundingClientRect().top;
        // console.log(offset);
        jQuery(this).data("offset", offset);
        jQuery(this).addClass("to-reveal");
      });

      let numRevealed = 0;
      jQuery(".project-block-section .to-reveal").each(function () {
        if (
          jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >=
          jQuery(this).data("offset")
        ) {
          numRevealed++;
          const thisRef = $(this);
          setTimeout(function () {
            thisRef.removeClass("to-reveal");
            thisRef.addClass("revealed");
          }, 700 + numRevealed * 600);
        }
      });
    }
  });

  $(".image-slideshow").slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    prevArrow: jQuery(".prev-arrow"),
    nextArrow: jQuery(".next-arrow"),
  });

  $(".collections").slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    // prevArrow: jQuery('.prev-arrow'),
    // nextArrow: jQuery('.next-arrow')
  });

  //Testimonials Slider

  $('.testimonials').slick({
		dots: false,
		arrows: true,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		prevArrow: jQuery('.testimonials__arrow-left'),
		nextArrow: jQuery('.testimonials__arrow-right')
  });


	$('.portfolio__name').click(function() {
		var portfolioName = $(this).attr('key');
		$(this).toggleClass('portfolio__name-line').siblings().removeClass('portfolio__name-line');

		$('.portfolio__grid picture').each(function() {
			if(portfolioName !== $(this).attr('key')) {
				$(this).addClass('hide-portfolio-img');
			} else {
				$(this).removeClass('hide-portfolio-img');
			}
		});
	
	});

	$('.all-collections').click(function() {
		$('.portfolio__grid picture').each(function() {
			$(this).removeClass('hide-portfolio-img');
		});
	});

	$('.search-icon').click(function() {
		$('.search-overlay').addClass('search-overlay__active');
	});

	$('.search-overlay__close-btn').click(function() {
		$('.search-overlay').removeClass('search-overlay__active');
	});

	$('.menu-icon__checkbox').click(function() {
		$('.mobile-navigation').toggleClass('mobile-navigation__active');
	});

	$('.mobile-navigation__close').click(function() {
		$('.mobile-navigation').removeClass('mobile-navigation__active');
	});

	});
