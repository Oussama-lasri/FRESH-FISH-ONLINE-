/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors:{
        'myblue': '#0076D4'
      },
      backgroundImage: {
        'bgHome': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [],
}