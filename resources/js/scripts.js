let navbar = document.querySelector('#navbar')

document.addEventListener('scroll',()=> {
   
if (window.pageYOffset > 100) {
  navbar.classList.add('bg-black');
  
} else {
  navbar.classList.remove('bg-black');
  

}

})
