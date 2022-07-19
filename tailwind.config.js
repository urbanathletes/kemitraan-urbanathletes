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
        'black-ua': '#191919',
        'content-bg': '#222222',
        'green-ua': '#75923d',
        'gray-footer': '#322C31',
        'facebook': '#1877F2',
        'instagram': '#C62B57',
        'youtube': '#FF0000',
      },
    },
    fontFamily: {
      'AmpleSoft': ['AmpleSoft', 'sans-serif'],
      'Futura': ['Futura', 'AmpleSoft', 'sans-serif'],
      'FuturaBold': ['FuturaBold', 'AmpleSoft', 'sans-serif'],
      'RobotoMono': ['RobotoMono', 'sans-serif'],
      'sans-serif': ['sans-serif'],
    }
  },
  plugins: [],
}
