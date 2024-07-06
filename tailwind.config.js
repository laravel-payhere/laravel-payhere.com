/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
    ],
    theme: {
        fontFamily: {
            sans: ['Figtree', 'sans-serif'],
        },
      extend: {
          colors: {
              'blue': {
                  '50': '#f0f5fe',
                  '100': '#dce8fd',
                  '200': '#c1d7fc',
                  '300': '#97bff9',
                  '400': '#659df5',
                  '500': '#4179f0',
                  '600': '#2c59e4',
                  '700': '#2447d6',
                  '800': '#233aaa',
                  '900': '#223586',
                  '950': '#192252',
              },
          }
      },
    },
    plugins: [],
}

