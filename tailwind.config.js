export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          500: '#8b5cf6',
          600: '#7c3aed',
          700: '#6d28d9',
        },
        secondary: {
          500: '#a78bfa',
          600: '#8b5cf6',
          700: '#7c3aed',
        },
        accent: {
          500: '#f472b6',
          600: '#ec4899',
          700: '#db2777',
        }
      },
    },
  },
  plugins: [],
}
