/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.html"],
  theme: {
    extend: {
      colors: {
        'aquamarine': '#7FFFD4',
        'mint': '#F5FFFA',
        'blue-to-green': {
          '50': '#f0f9f4',
          '100': '#c8e6c9',
          '200': '#a5d6a7',
          '300': '#81c784',
          '400': '#66bb6a',
          '500': '#4caf50',
          '600': '#43a047',
          '700': '#388e3c',
          '800': '#2e7d32',
          '900': '#1b5e20',
        },
        'blue-gradient': {
          '50': '#E3F2FD',
          '100': '#BBDEFB',
          '200': '#90CAF9',
          '300': '#64B5F6',
          '400': '#42A5F5',
          '500': '#2196F3',
          '600': '#1E88E5',
          '700': '#1976D2',
          '800': '#1565C0',
          '900': '#0D47A1',
        },
        aquaBlue: '#00BFFF', // Define Aqua Blue color
        mintGreen: '#98FB98', // Define Mint Green color
        coral: '#FF7F50', // Define Coral color
        beige: '#f5f5dc', // Define Beige color
      },
    },
    fontFamily: {
      'sans': ['Roboto', 'Arial', 'sans-serif'],
      'serif': ['Georgia', 'Cambria', 'serif'],
      'montserrat': ['Montserrat', 'sans-serif'], // Add your custom font here
      'poppins': ['Poppins', 'sans-serif'],
      'lato': ['Lato', 'sans-serif'],
      'alegreya': ['Alegreya', 'serif'],
    }
  },
  plugins: [],
}