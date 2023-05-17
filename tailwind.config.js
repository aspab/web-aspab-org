const colors = require('tailwindcss/colors')

module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {},
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      cyan: colors.cyan,
      'aspab-blue': '#406b81',
      'aspab-blue-gray': '#cfdadf',
      'aspab-green': '#2f5051',
      'aspab-highlight': '#612b10'
    }
  },
  plugins: [],
};
