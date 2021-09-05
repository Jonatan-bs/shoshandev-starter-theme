const colors = require('tailwindcss/colors')

module.exports = {
  darkMode: false,
  purge: [
    // Paths to your templates...
    "../**.php",
    "../**/**.php",
    "./src/js/**.js"
    ],
  theme: {
    extend: {
      colors: {
        primary: colors.red
      },
    }
  },
  variants: {},
  plugins: [],
}
