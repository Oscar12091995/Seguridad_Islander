module.exports = {
  content: ["./src/**/*.{html,blade,js}",
            "./resources/views/**/*.blade.php"],
  theme: {
    extend: {},
  },
  plugins: [  
    require('tailwindcss'), 
    require('autoprefixer'),
    
 ],
  
}
