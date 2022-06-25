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
      padding: '1rem',
    },
    extend: {
      colors: {
        'content-bg': '#222222',
        'green-ua': '#75923d',
        'gray-footer': '#322C31',
        'facebook': '#1877F2',
        'instagram': '#C62B57',
        'youtube': '#FF0000',
      },
    },
    fontFamily: {
      'RobotoMono': ['RobotoMono', 'sans-serif'],
    }
  },
  plugins: [],
}
