/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",

  ],
  theme: {
      screens:{
          xs:'0px',
          sm:'327px',
          smx:'460px',
          sml:'590px',
          md:'768px',
          lg:'976px',
          llg:'1200px',
          xl:'1440px'
      },
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

