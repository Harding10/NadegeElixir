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
          50: '#faf5ff',
          100: '#f3e8ff',
          200: '#e9d5ff',
          300: '#d8b4fe',
          400: '#c084fc',
          500: '#a855f7',
          600: '#9333ea',
          700: '#7e22ce',
          800: '#6b21a8',
          900: '#581c87',
          950: '#3b0764',
        },
        success: {
          light: '#f0fdf4',
          DEFAULT: '#22c55e',
          dark: '#15803d',
        },
        warning: {
          light: '#fefce8',
          DEFAULT: '#eab308',
          dark: '#854d0e',
        },
        error: {
          light: '#fef2f2',
          DEFAULT: '#ef4444',
          dark: '#991b1b',
        },
        info: {
          light: '#f0f9ff',
          DEFAULT: '#3b82f6',
          dark: '#1d4ed8',
        },
        surface: {
          DEFAULT: '#ffffff',
          hover: '#faf5ff',
          active: '#f3e8ff',
          disabled: '#f4f4f5',
        },
        action: {
          primary: '#9333ea',
          hover: '#7e22ce',
          active: '#6b21a8',
          disabled: '#e9d5ff',
        },
        text: {
          primary: '#581c87',
          secondary: '#7e22ce',
          disabled: '#a1a1aa',
          inverse: '#ffffff',
        },
        border: {
          light: '#f3e8ff',
          DEFAULT: '#e9d5ff',
          dark: '#d8b4fe',
          focus: '#9333ea',
        },
        background: {
          page: '#faf5ff',
          card: '#ffffff',
          popup: '#ffffff',
          overlay: 'rgba(88, 28, 135, 0.5)',
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
