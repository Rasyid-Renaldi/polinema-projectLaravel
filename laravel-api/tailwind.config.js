/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

  ],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      colors: {
        primary: '#E36559',
        secondary: '#000000',
      }
    },
  },
  screens: {
    '2x1' : '1320px'
  },
  plugins: [
  ],
}
