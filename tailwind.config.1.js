const defaultTheme = require(`tailwindcss/defaultTheme`)

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    `./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php`,
    `./storage/framework/views/*.php`,
    `./resources/views/**/*.blade.php`,
    `./resources/js/**/*.vue`,
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: [`Figtree`, ...defaultTheme.fontFamily.sans],
      },
      animation: {
        overlayShow: `overlayShow 275ms cubic-bezier(.54, 0, .52, 1)`,
        overlayHide: `overlayHide 300ms cubic-bezier(.54, 0, .52, 1)`,
        contentShow: `contentShow 300ms cubic-bezier(.54, 0, .52, 1)`,
        contentHide: `contentHide 275ms cubic-bezier(.54, 0, .52, 1)`,
        accordionSlideDown: `accordionSlideDown 300ms cubic-bezier(.54, 0, .52, 1)`,
        accordionSlideUp: `accordionSlideUp 300ms cubic-bezier(.54, 0, .52, 1)`,
      },

      keyframes: {
        overlayShow: {
          from: { opacity: 0 },
          to: { opacity: 1 },
        },
        overlayHide: {
          from: { opacity: 1 },
          to: { opacity: 0 },
        },
        contentShow: {
          from: { opacity: `0`, scale: `1.05` },
          to: { opacity: `1`, scale: `1` },
        },
        contentHide: {
          from: { opacity: `1`, scale: `1` },
          to: { opacity: `0`, scale: `0.95` },
        },
        accordionSlideDown: {
          from: {
            height: `0`,
          },
          to: {
            height: `var(--radix-accordion-content-height)`,
          },
        },
        accordionSlideUp: {
          from: {
            height: `var(--radix-accordion-content-height)`,
          },
          to: {
            height: `0`,
          },
        },
      },
    },
  },

  plugins: [
    require(`@tailwindcss/forms`),
    require(`@tailwindcss/container-queries`),
  ],
}
