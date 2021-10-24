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
      'sans': ['Inter', 'sans-serif'],
    },
    // Match theme.json
    fontSize: {
      'xs': 'var(--wp--preset--font-size--xs)',
      'sm': 'var(--wp--preset--font-size--sm)',
      'base': 'var(--wp--preset--font-size--base)',
      'lg': 'var(--wp--preset--font-size--lg)',
      'xl': 'var(--wp--preset--font-size--xl)',
      '2xl': 'var(--wp--preset--font-size--2-xl)',
      '3xl': 'var(--wp--preset--font-size--3-xl)',
      '4xl': 'var(--wp--preset--font-size--4-xl)',
      '5xl': 'var(--wp--preset--font-size--5-xl)',
      '6xl': 'var(--wp--preset--font-size--6-xl)',
    },
    screens: {
      sm: '520px',
      md: '768px',
      lg: '976px',
      xl: '1300px',
    },
    extend: {
      // Match theme.json
      colors: {
        "black": "var(--wp--preset--color--black)",
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
    require('@tailwindcss/forms')
  ],
  corePlugins: {
    // added container in /src/shared/tw-components.scss
   container: false,
  }
}

