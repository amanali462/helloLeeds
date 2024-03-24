// background-cycle.js
function initializeBackgroundCycling(containerId, imageUrls) {
  let currentIndex = 0;
  const backgroundContainer = jQuery(containerId);

  function changeBackground() {
      const nextIndex = (currentIndex + 1) % imageUrls.length;

      // Preload the next image
      const nextImage = new Image();
      nextImage.src = imageUrls[nextIndex];

      backgroundContainer.ready(function () {
          backgroundContainer.css('background-image', `url(${imageUrls[currentIndex]})`);
          currentIndex = nextIndex;
      });
  }

  setInterval(changeBackground, 3000);
  changeBackground(); // Initial background image
}

jQuery(document).ready(function () {
  const homeImages = [
    '/wp-content/uploads/2024/01/hero1.jpg',
    '/wp-content/uploads/2024/01/hero2.jpg',
    '/wp-content/uploads/2024/01/hero3.jpg',
    '/wp-content/uploads/2024/01/hero4.jpg',
    '/wp-content/uploads/2024/01/hero5.jpg',
    '/wp-content/uploads/2024/01/hero6.jpg',
    '/wp-content/uploads/2024/01/hero7.jpg',
    '/wp-content/uploads/2024/01/hero8.jpg',
  ];

  const backgroundContainer = jQuery('#background-container-home');

  // Preload the first image for this section
  const firstImage = new Image();
  firstImage.src = homeImages[0];

  initializeBackgroundCycling(backgroundContainer, homeImages);
});


jQuery(document).ready(function () {
  const seeAndDoImages = [
    '/wp-content/uploads/2024/01/see-and-do-hero-1.jpg',
    '/wp-content/uploads/2024/01/see-and-do-hero-2.jpg',
    '/wp-content/uploads/2024/01/see-and-do-hero-3.jpg',
    '/wp-content/uploads/2024/01/see-and-do-hero-4.jpg',
    '/wp-content/uploads/2024/01/see-and-do-hero-5.jpg',
  ];

  const backgroundContainer = jQuery('#background-container-see-and-do');

  // Preload the first image for this section
  const firstImage = new Image();
  firstImage.src = seeAndDoImages[0];

  initializeBackgroundCycling(backgroundContainer, seeAndDoImages);
});

jQuery(document).ready(function () {
  const attractionsImages = [
    '/wp-content/uploads/2024/01/attraction-3.jpg',
    '/wp-content/uploads/2024/01/attraction-1.jpg',
    '/wp-content/uploads/2024/01/attraction-2.jpg',
    '/wp-content/uploads/2024/01/attraction-4.jpg',

  ];

  const backgroundContainer = jQuery('#background-container-attractions');

  // Preload the first image for this section
  const firstImage = new Image();
  firstImage.src = attractionsImages[0];

  initializeBackgroundCycling(backgroundContainer, attractionsImages);
});

