function myFunction(elem) {
  var x = document.getElementById(elem);
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
} 
