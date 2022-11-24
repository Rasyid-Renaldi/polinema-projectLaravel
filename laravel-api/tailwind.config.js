/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
<<<<<<< HEAD
    container: {
      center: true,
      padding: '16px'
    },
    extend: {},
  },
  screens: {
    '2x1' : '1320px'
  },
  plugins: [],
=======
    extend: {
      space: {
        '5px': '5px',
      },
      colors: {
        primary: '#E36559',
        secondary: '#000000',
      }
    },
  },
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
  ],
>>>>>>> 6dfa229f00ff7ff53bf135f3f62369e477ed2cdc
}
