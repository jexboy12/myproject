/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme'); // Tambahkan baris ini jika belum ada

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // Font tambahan:
        vibes: ['"Great Vibes"', 'cursive'],
        montserrat: ['"Montserrat"', 'sans-serif'],
        
        // Tetap mempertahankan Inter sebagai default sans
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
      },
      // Konfigurasi animasi kustom dan durasi transisi
      transitionProperty: {
        'transform-opacity': 'transform, opacity', // Menambahkan properti ini untuk animasi teks
      },
      transitionDuration: {
        '2000': '2000ms', // Untuk transisi hero slide (background)
        '700': '700ms',  // Untuk animasi teks masuk
      },
      transitionDelay: {
        '100': '100ms',
        '200': '200ms',
        '300': '300ms',
        // Tambahkan delay-delay lain jika Anda berencana menggunakannya
      },
      keyframes: {
        'fade-in-up': {
          '0%': {
            opacity: '0',
            transform: 'translateY(20px)' // Diperluas sedikit dari 10px
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)'
          },
        }
      },
      animation: {
        'fade-in-up': 'fade-in-up 0.7s ease-out forwards', // Durasi disesuaikan
      }
    },
  },
  plugins: [],
}