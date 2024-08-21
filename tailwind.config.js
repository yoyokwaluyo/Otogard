/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
  ],
  safelist: [
      'h-3.5', 'my-2', 'skew-x-[-30deg]',
      'bg-gradient-to-r', 'bg-sky-900', 'bg-sky-800', 'bg-sky-700', 'bg-sky-600', 'bg-rose-600', 'bg-rose-500',
      'from-black', 'from-black/90', 'from-sky-800', 'from-sky-700', 'from-sky-600', 'from-sky-500', 'from-rose-800', 'from-rose-700', 'from-rose-600', 'from-rose-500',
      'to-sky-800', 'to-black/90', 'to-sky-800', 'to-sky-700', 'to-sky-600', 'to-sky-500', 'to-sky-500', 'to-rose-700', 'to-rose-600', 'to-rose-500', 'to-rose-500',
      'border-black/90', 'border-sky-900', 'border-sky-800', 'border-sky-700', 'border-sky-500', 'border-sky-500', 'border-sky-600', 'border-rose-800', 'border-rose-600', 'border-rose-500', 'border-r-[1px]',
  ],
  theme: {
      extend: {
          fontFamily: {
              roboto: ["Roboto", "sans-serif"],
          },
      }
  },
  plugins: [require("flowbite/plugin")],
};
