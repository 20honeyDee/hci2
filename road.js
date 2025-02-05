
const regSign = document.querySelector("#regSign");
const warnSign = document.querySelector("#warnSign");
const guideSign = document.querySelector("#guideSign");
const expresswaySign = document.querySelector("#expresswaySign");
const instructionSign = document.querySelector("#instructionSign");
const hazardSign = document.querySelector("#hazardSign");

// 
// --------------------------------------------
const sideName = document.querySelector(".sideName");
const sideNamelbl = document.getElementById("sideNamelbl");

// reg_sideName.style.display = "none";
regSign.addEventListener('mouseover', ()=>{
    sideNamelbl.innerText = "REGULATORY SIGNS";
});
warnSign.addEventListener('mouseover', ()=>{
    sideNamelbl.innerText = "WARNING SIGNS";
});
guideSign.addEventListener('mouseover', ()=>{
    sideNamelbl.innerHTML = "GUIDE OR <br>INFORMATION <br>SIGNS";
});
expresswaySign.addEventListener('mouseover', ()=>{
    sideNamelbl.innerText = "EXPRESSWAY SIGNS";
});
instructionSign.addEventListener('mouseover', ()=>{
    sideNamelbl.innerHTML = "TRAFFIC <br>INSTRUCTION<br> SIGNS";
});
hazardSign.addEventListener('mouseover', ()=>{
    sideNamelbl.innerText = "HAZARD MARKERS";
});




// regSign.addEventListener('mouseout', ()=>{
//     reg_sideName.style.display = "none";
// });
// -----------------------------------------------
// warn_sideName.style.display = "none";
// warnSign.addEventListener('mouseover', ()=>{
//     warn_sideName.style.display = "block";
//     warn_sideName.style.position = "fixed";

// });
// warnSign.addEventListener('mouseout', ()=>{
//     warn_sideName.style.display = "none";
// });




