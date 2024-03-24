<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helloLeedsTailwind
 */

?>

  <!-- Footer -->
  <footer class="bg-mysticBlue">
    <!-- Flex Container -->
    <div class=" container py-10 px-6 mx-auto space-y-8 md:flex-row md:space-y-0">
    
          <!-- List Container -->
        <div class="font-semibold flex md:justify-start flex-col space-y-5 md:flex-row md:space-x-20 md:space-y-0 pb-5 text-white">
            <a href="#" class="inline-block after:content-[''] after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 hover:after:w-12">Terms of Use</a>
            <a href="#" class="inline-block after:content-[''] after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 hover:after:w-12">Privacy Policy</a>
            <a href="#" class="inline-block after:content-[''] after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 hover:after:w-12">Cookie consent</a>
            <a href="#" class="inline-block after:content-[''] after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 hover:after:w-12">Contact us</a>
        </div>
        
        <!-- Border Line -->
        <hr class="border-1 border-white">
        <!-- Footer Social Links Container -->
        <div class="block flex-row-reverse md:flex md:pt-5 items-center">
          <!-- Social Links -->
          <div class="ml-auto flex space-x-5 justify-center md:space-x-10 text-white">

            <!-- Twitter -->
            <a href="https://www.x.com/" class="w-6 h-6 hover:animate-jump">
              <svg id="Layer_4" data-name="Layer 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 1226.37">
                <path d="m714.16,519.28L1160.89,0h-105.86l-387.89,450.89L357.33,0H0l468.49,681.82L0,1226.37h105.87l409.63-476.15,327.18,476.15h357.33l-485.86-707.09h.03Zm-145,168.54l-47.47-67.89L144.01,79.69h162.6l304.8,435.99,47.47,67.89,396.2,566.72h-162.6l-323.31-462.45v-.03Z" style="fill: #fff; stroke-width: 0px;"/>
              </svg>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/" class="w-6 h-6 hover:animate-jump">
              <svg id="facebook-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <g id="facebook-logo-2" data-name="facebook-logo">
                  <path id="Initiator" d="m500,250C500,111.93,388.07,0,250,0S0,111.93,0,250c0,117.24,80.72,215.62,189.61,242.64v-166.24h-51.55v-76.4h51.55v-32.92c0-85.09,38.51-124.53,122.05-124.53,15.84,0,43.17,3.11,54.35,6.21v69.25c-5.9-.62-16.15-.93-28.88-.93-40.99,0-56.83,15.53-56.83,55.9v27.02h81.66l-14.03,76.4h-67.63v171.77c123.79-14.95,219.71-120.35,219.71-248.17Z" style="fill: #fff; stroke-width: 0px;"/>
                  <path id="F" d="m347.92,326.4l14.03-76.4h-81.66v-27.02c0-40.37,15.84-55.9,56.83-55.9,12.73,0,22.98.31,28.88.93v-69.25c-11.18-3.11-38.51-6.21-54.35-6.21-83.54,0-122.05,39.44-122.05,124.53v32.92h-51.55v76.4h51.55v166.24c19.34,4.8,39.57,7.36,60.39,7.36,10.25,0,20.36-.63,30.29-1.83v-171.77h67.63Z" style="fill: none; stroke-width: 0px;"/>
                </g>
              </svg>
            </a>

            <!-- Instagram -->
            <a href="#https://www.instagram.com/" class="w-6 h-6 hover:animate-jump">
              <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 999.99 1000">
                <path d="m292.92,3.5c-53.2,2.51-89.53,11-121.29,23.48-32.87,12.81-60.73,30-88.45,57.82-27.72,27.82-44.79,55.7-57.51,88.62-12.31,31.83-20.65,68.19-23,121.42C.32,348.07-.2,365.18.06,500.96s.86,152.8,3.44,206.14c2.54,53.19,11,89.51,23.48,121.28,12.83,32.87,30,60.72,57.83,88.45,27.83,27.73,55.69,44.76,88.69,57.5,31.8,12.29,68.17,20.67,121.39,23,53.22,2.33,70.35,2.87,206.09,2.61,135.74-.26,152.83-.86,206.16-3.39s89.46-11.05,121.24-23.47c32.87-12.86,60.74-30,88.45-57.84s44.77-55.74,57.48-88.68c12.32-31.8,20.69-68.17,23-121.35,2.33-53.37,2.88-70.41,2.62-206.17s-.87-152.78-3.4-206.1-11-89.53-23.47-121.32c-12.85-32.87-30-60.7-57.82-88.45s-55.74-44.8-88.67-57.48c-31.82-12.31-68.17-20.7-121.39-23S634.83-.2,499.04.06s-152.79.84-206.12,3.44m5.84,903.88c-48.75-2.12-75.22-10.22-92.86-17-23.36-9-40-19.88-57.58-37.29s-28.38-34.11-37.5-57.42c-6.85-17.64-15.1-44.08-17.38-92.83-2.48-52.69-3-68.51-3.29-202s.22-149.29,2.53-202c2.08-48.71,10.23-75.21,17-92.84,9-23.39,19.84-40,37.29-57.57s34.1-28.39,57.43-37.51c17.62-6.88,44.06-15.06,92.79-17.38,52.73-2.5,68.53-3,202-3.29,133.47-.29,149.31.21,202.06,2.53,48.71,2.12,75.22,10.19,92.83,17,23.37,9,40,19.81,57.57,37.29s28.4,34.07,37.52,57.45c6.89,17.57,15.07,44,17.37,92.76,2.51,52.73,3.08,68.54,3.32,202,.24,133.46-.23,149.31-2.54,202-2.13,48.75-10.21,75.23-17,92.89-9,23.35-19.85,40-37.31,57.56s-34.09,28.38-57.43,37.5c-17.6,6.87-44.07,15.07-92.76,17.39-52.73,2.48-68.53,3-202.05,3.29s-149.27-.25-202-2.53M706.37,232.77c.06,33.14,26.96,59.96,60.1,59.9s59.96-26.96,59.9-60.1c-.06-33.14-26.96-59.96-60.1-59.9,0,0-.01,0-.02,0-33.13.07-59.94,26.97-59.88,60.1M243.27,500.5c.28,141.8,115.44,256.49,257.21,256.22s256.54-115.42,256.27-257.22-115.46-256.52-257.25-256.24-256.5,115.46-256.23,257.24m90.06-.18c-.18-92.05,74.29-166.82,166.34-167,92.05-.18,166.82,74.29,167,166.34.18,92.05-74.29,166.82-166.34,167-92.04.19-166.81-74.26-167-166.3v-.04" style="fill: #fff; stroke-width: 0px;"/>
              </svg>
            </a>
            
            <!-- TikTok -->
            <a href="https://www.tiktok.com/" class="w-6 h-6 hover:animate-jump">
              <svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 347.67 398.67">
                <g id="Layer_1-2" data-name="Layer 1-2">
                  <path d="m295.74,79.91c-21.48-14-36.97-36.41-41.81-62.52-1.04-5.64-1.62-11.45-1.62-17.39h-68.54l-.11,274.68c-1.15,30.76-26.47,55.45-57.5,55.45-9.65,0-18.73-2.41-26.73-6.62-18.34-9.65-30.89-28.87-30.89-50.99,0-31.77,25.85-57.62,57.61-57.62,5.93,0,11.62.98,17,2.66v-69.97c-5.57-.76-11.23-1.23-17-1.23-69.56,0-126.15,56.59-126.15,126.16,0,42.68,21.32,80.45,53.86,103.29,20.49,14.39,45.42,22.86,72.3,22.86,69.56,0,126.15-56.59,126.15-126.15v-139.29c26.88,19.29,59.82,30.66,95.36,30.66v-68.54c-19.14,0-36.97-5.69-51.93-15.44Z" style="fill: #fff; stroke-width: 0px;"/>
                </g>
              </svg>
            </a>

          </div>

          <!-- Copyright -->
          <div class="h-8 text-center pt-5 md:pt-0 text-white">
              All rights reserved <span class="font-semibold">2023</span>
          </div>
        </div>
      </div>
  </footer>
<?php wp_footer();?>
</body>
</html>
