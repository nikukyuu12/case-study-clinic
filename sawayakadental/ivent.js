const TOPbutton =document.getElementById('TOP-button');

window.addEventListener('scroll',() => {
  const scrollValue = document.scrollingElement.scrollTop;
  if(scrollValue>=300) {
    TOPbutton.style.display = 'fade-in';
  }
  else {
    TOPbutton.style.display = 'none';
  }
});