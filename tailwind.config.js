/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        'c1': '#FFFFFF',
        'c2': '#003399',
        'c3': '#3366CC',
        'c4': '#6699FF',
      }
    },
  },
  plugins: [],
}
