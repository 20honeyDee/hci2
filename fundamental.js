
const manual = document.querySelector("#manual");
const automatic = document.querySelector("#automatic");
const manualCon = document.querySelector(".manual");
const automaticCon = document.querySelector(".automatic");
const body = document.querySelector("body");

// const span = "";


manualCon.style.display = "none";
automaticCon.style.display = "none";


// SHOW "MANUAL" AS TITLE
function manualh2(){
    let option = document.querySelector(".option-title");
    choice = "Manual";
    document.querySelector(".h2").innerHTML = choice;
    option.style.backgroundColor = "#F4CE14";
    manualCon.style.display = "block";
    automaticCon.style.display = "none";
    // body.style.backgroundImage = "URL(fundamentalbg.jpg)";
    // body.style.backgroundImage = "radial-gradient(circle, #F5F7F8 30%, #45474B 100%)"
    body.style.backgroundImage = "linear-gradient(to right, #F5F7F8 30%, #45474B 100%, #F5F7F8 30%)";
}
manual.addEventListener('click', manualh2);

// SHOW AUTOMATIC AS TITLE
function automatich2(){
    let option = document.querySelector(".option-title");
    choice2 = "automatic";
    document.querySelector(".h2").innerHTML = choice2;
    option.style.backgroundColor = "#F4CE14";
    automaticCon.style.display = "block";
    manualCon.style.display = "none";
    body.style.backgroundImage = "linear-gradient(to right, #F5F7F8 30%, #45474B 100%, #F5F7F8 30%)";
}

automatic.addEventListener('click', automatich2);


// NEXT BUTTON
const btn_next = document.querySelector(".btn-next");
const preview = document.querySelector(".preview");

preview.style.display = "none";

btn_next.addEventListener('mouseover', ()=>{
    preview.style.display = "block";
    
});

btn_next.addEventListener('mouseout', ()=>{
    preview.style.display = "none";
});

// NEXT BUTTON 2
const btn_next2 = document.querySelector(".btn-next2");
const preview2 = document.querySelector(".preview2");

preview2.style.display = "none";

btn_next2.addEventListener('mouseover', ()=>{
    preview2.style.display = "block";
    
});

btn_next2.addEventListener('mouseout', ()=>{
    preview2.style.display = "none";
});