module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './ressources/views/**/*.blade.php',
    './src/**/*.html',
     './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
