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
        secondary1: '#2b3137',
        card: '#414346',
        card1: '#4E4F50',
        hovering: '#8a8a8a',
      }
    },
  },
  screens: {
    '2x1' : '1320px'
  },
  plugins: [],
}
