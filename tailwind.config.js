/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#007C97',
        secondary: '#01657A',
        dirt_white: '#E0E0E0',
      }
    },
  },
  plugins: [],
}

