/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,css,js}"],
  theme: {
    extend: {
      transitionTimingFunction: {
        'in-out-expo': 'cubic-bezier(0.77, 0, 0.175, 1)',
      },
    },
  },
  plugins: [],
}

