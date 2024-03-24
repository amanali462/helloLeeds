// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
  presets: [
    // Manage Tailwind Typography's configuration in a separate file.
    require('./tailwind-typography.config.js'),
  ],
  content: [
    // Ensure changes to PHP files and `theme.json` trigger a rebuild.
    './theme/**/*.php',
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    // Extend the default Tailwind theme.
    extend: {
      colors: {
        mysticBlue: '#091D36',
        veniceBlue: '#0B4C84',
        danubeBlue: '#598EC2',
        blueIris: '#9BC1EE',
        grayFlash: '#F0EFF5',
      },

      fontFamily: {
        body: ['Montserrat', 'sans-serif'],
      },

      fontSize: {
        header: '2.25rem',
        sub: '1.25rem',
        paragraph: '1rem',
        paragraphSmall: '0.5rem',
      },

      fontWeight: {
        regular: '400',
        semiBold: '600',
      },
    },
  },
  corePlugins: {
    // Disable Preflight base styles in builds targeting the editor.
    preflight: includePreflight,
  },
  plugins: [
    // Add Tailwind Typography (via _tw fork).
    require('@_tw/typography'),

    // Extract colors and widths from `theme.json`.
    require('@_tw/themejson'),
    require('tailwindcss-animated'),

    // Uncomment below to add additional first-party Tailwind plugins.
    // require('@tailwindcss/forms'),
    // require('@tailwindcss/aspect-ratio'),
    // require('@tailwindcss/container-queries'),
  ],
};
