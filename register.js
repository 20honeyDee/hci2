function clicked(div1, div2) {
    const showDiv = document.getElementById(div1);
    const hideDiv = document.getElementById(div2);
  
    showDiv.classList.remove("hidden");
    hideDiv.classList.add("hidden");
}

