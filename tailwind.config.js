module.exports = {
  content: ["./*.{html,js,php}"],
  theme: { 
    screens: {
    'xsm': '350px',
    // => @media (min-width: 350px) { ... }  
    'sm': '640px',
    // => @media (min-width: 640px) { ... } 

    'md': '768px',
    // => @media (min-width: 768px) { ... }

    'lg': '1024px',
    // => @media (min-width: 1024px) { ... }

    'xl': '1280px',
    // => @media (min-width: 1280px) { ... }
  },
    extend: {
        transitionDuration: {
        '0': '0ms',
        '2000': '2000ms',
      }
    },
  },
  plugins: [],
}
