module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '640px',
      // => @media (min-width: 640px) { ... }
      md: '764px',
      // => @media (min-width: 764px) { ... }
      lg: '1024px',
      // => @media (min-width: 1024px) { ... }
      xl: '1280px',
      // => @media (min-width: 1280px) { ... }
      '2xl': '1536px'
      // => @media (min-width: 1536px) { ... }
    },
    spacing: {
      1: '8px',
      2: '12px',
      3: '16px',
      4: '24px',
      5: '32px',
      6: '48px',
      sm: '8px',
      md: '12px',
      lg: '16px',
      xl: '24px'
    },
    maxWidth: {
      sm: '86px'
    },
    maxHeight: {
      md: '770px'
    },
    extend: {}
  },
  variants: {
    extend: {}
  },
  plugins: []
}
