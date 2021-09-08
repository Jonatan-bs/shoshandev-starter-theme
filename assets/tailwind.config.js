const colors = require('tailwindcss/colors')

module.exports = {
  darkMode: false,

  purge: {
    content: [
    // Paths to your templates...
      "../**.php",
      "../**/**.php",
      "../**/**/**.php",
      "./**/**.php",
    ]
  },
  theme: {
    fontFamily: {
      'sans': ['Roboto', 'sans-serif'],
    },
    container: {
      padding: {
        DEFAULT: '1rem',
      },
    },
    screens: {
      sm: '620px',
      md: '768px',
      lg: '976px',
      xl: '1300px',
    },
    extend: {
      colors: {
        primary: colors.red
      },
    }
  },
  variants: {},
  plugins: [],
}
