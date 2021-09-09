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
    // container: {
    //   center: true,
    //   padding: {
    //     DEFAULT: '1rem',
    //   },
    // },
    screens: {
      sm: '620px',
      md: '768px',
      lg: '976px',
      xl: '1300px',
    },
    extend: {
      // Adds a new breakpoint in addition to the default breakpoints
      colors: {
        "primary": "var(--wp--preset--color--primary)",
        "primary-dark": "var(--wp--preset--color--primary-dark)",
        "secondary": "var(--wp--preset--color--secondary)",
        "grey": "var(--wp--preset--color--grey)",
        "grey-2": "var(--wp--preset--color--grey-2)",
        "grey-3": "var(--wp--preset--color--grey-3)",
        "grey-4": "var(--wp--preset--color--grey-4)",
        "success": "var(--wp--preset--color--success)",
        "error": "var(--wp--preset--color--error)"
      }
    }
  },
  variants: {},
  plugins: [
    // function (a) {
    //   let {addComponents, theme} = a
    //   console.log(theme())
    //   addComponents({
    //     '.container': {
    //       maxWidth: '100%',
    //       '@screen sm': {
    //         maxWidth: '600px',
    //       },
    //       '@screen md': {
    //         maxWidth: '700px',
    //       },
    //       '@screen lg': {
    //         maxWidth: '800px',
    //       },
    //       '@screen xl': {
    //         maxWidth: '900px',
    //       },
    //     }
    //   })
    // }
  ],
  corePlugins: {
   container: false,
  }
}

