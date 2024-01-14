/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/template/template.blade.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            josefin: ['Josefin Sans', 'sans-serif'],
      },
      animation: {
        blob: "blob 10s infinite"
      },
      keyframes: {
        blob: {
            "0%": {
                transform: "translate(0px, 0px) scale(1)"
            },
            "33%": {
                transform: "translate(30px, -50px) scale(1.1)"
            },
            "66%": {
                transform: "translate(-20px, 20px) scale(0.9)"
            },
            "100%": {
                transform: "translate(0px, 0px) scale(1)"
            },
        }
      }
    },
  },
  plugins: [
    require('tailwindcss-animated'),
    require('flowbite/plugin')
  ],
}




