jQuery(document).ready(function($) {
  // Variables
  let menuOpen = false;
  let openState = false;

  // Scroll function
  window.onscroll = function() {
    scrollFunction(menuOpen);
  };

  function scrollFunction(menuIsOpen) {
    const navbar = $("#navbar");

    if (window.scrollY > 5 || menuIsOpen) {
      navbar.removeClass("bg-transparent").addClass("bg-mysticBlue");
    } else {
      navbar.removeClass("bg-mysticBlue").addClass("bg-transparent");
    }
  }

  // Menu Toggle
  const overlay = $("#overlay");
  const nav = $("#nav");
  const toggle = $("#toggle");
  const menuOpenButton = $("#menuOpen");
  const menuClosedButton = $("#menuClosed");
  const navbar = $("#navbar");

  function toggleNav() {
    nav.toggleClass("-right-full right-0");
    overlay.toggleClass("hidden");
    navbar.toggleClass("bg-atomicSteelBlue");

    if (openState) {
      menuOpenButton.css("display", "none");
      menuClosedButton.css("display", "inline");
      menuOpen = true; // Update the menuOpen state
    } else {
      menuOpenButton.css("display", "inline");
      menuClosedButton.css("display", "none");
      menuOpen = false; // Update the menuOpen state
    }

    // Call scrollFunction with the updated menuOpen state
    scrollFunction(menuOpen);
  }

  toggle.on('click', () => {
    openState = !openState;
    toggleNav();
  });

  // SLICK SLIDER
  $('.slider').slick({
    centerMode: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1500,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1100,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '150px',
          infinite: true,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          infinite: true,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '10px',
          slidesToShow: 1
        }
      }
    ]
  });


  // Accordion
  $('.accordion-title').click(function() {
    $(this).toggleClass('closed');
    $(this).next('.accordion-content').slideToggle();
    $('.accordion-content').not($(this).next()).slideUp();
  });

  const accordionItems = $('.accordion-item');

  accordionItems.each(function() {
    const accordionTitle = $(this).find('.accordion-title');
    const svgIcon = accordionTitle.find('svg');
    let isRotated = false;

    accordionTitle.on('click', () => {
      const isOpen = accordionTitle.hasClass('open');

      accordionItems.each(function() {
        $(this).find('.accordion-title').removeClass('open');
        $(this).find('svg').removeClass('rotate');
      });

      isRotated = !isOpen;
      accordionTitle.toggleClass('open', !isOpen);
      svgIcon.toggleClass('rotate', isRotated);
    });
  });

  $('#favouriteButton').click(function () {
    $('.notFavourited').toggleClass('hidden');
    $('.favourited').toggleClass('hidden');
  });
});




