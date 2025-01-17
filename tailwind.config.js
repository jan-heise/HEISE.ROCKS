const theme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["site/**/*.php", "src/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter", ...theme.fontFamily.sans],
      },
    },
  },
  plugins: [],
};
