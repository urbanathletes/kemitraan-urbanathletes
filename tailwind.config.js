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
        'neutral-150': '#F0F0F0',
        'yellow-primary': '#F6CD37'
      },
    },
    fontFamily: {
      'PoppinsSemiBold': ['PoppinsSemiBold', 'Futura', 'sans-serif'],
      'AmpleSoft': ['AmpleSoft', 'sans-serif'],
      'AmpleSoftBold': ['AmpleSoftBold', 'sans-serif'],
      'Futura': ['Futura', 'AmpleSoft', 'sans-serif'],
      'FuturaBold': ['FuturaBold', 'AmpleSoft', 'sans-serif'],
      'RobotoMono': ['RobotoMono', 'sans-serif'],
      'sans-serif': ['sans-serif'],
    }
  },
  plugins: [],
}
