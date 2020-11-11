let navbar = document.querySelector('#navbar')

document.addEventListener('scroll',()=> {
   
if (window.pageYOffset > 600) {
  navbar.classList.add('bg-black');
  
} else {
  navbar.classList.remove('bg-black');
  

}

})
