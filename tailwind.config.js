module.exports = {
  mode: "jit", //ADD THIS LINE
  content: ["**/*.php", "*.php", "js/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        Lato: ["Lato", "Helvetica", "sans-serif"],
        PTSerif: ["PTSerif", "Times New Roman", "Times", "serif"],
        NothingYouCouldDo: ["NothingYouCouldDo"],
      },
      colors: {
        themePrimary: "#000000",
        themeAccentLighter: "#ff9999",
        themeAccent: "#FF0000",
        themeAccentDarker: "#660000",
        themeSecondary: "#cca876",
        themeBlue: {
          200: "#0476ac",
          600: "#00497a",
        },
        themeGray: {
          200: "#2f2f2f",
          300: "#2a2a2a",
        },
        facebookBlue: "#4267B2",
        linkedInBlue: "#0072b1",
      },
      typography: {
        DEFAULT: {
          css: {
            a: {
              color: "#b95e02",
              "&:hover": {
                color: "#7c3f02",
              },
              textDecoration: "none !important",
            },
          },
        },
      },
      backgroundImage: (theme) => ({
        // "case-bg": "url('/images/case-bg.jpg')",
        // "news-bg": "url('/images/news-bg.jpg')",
      }),
      listStyleType: {
        square: "square",
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/line-clamp"),
    require("@tailwindcss/typography"),
  ],
};
