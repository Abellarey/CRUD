const btn = document.querySelector(".btn");
const content = document.querySelector(".content");
const modal = document.querySelector(".modal")
const myback = document.querySelector(".myback");

btn.addEventListener("click", ()=>{
    content.classList.add("active")
    modal.classList.remove("active")
});

myback.addEventListener("click", ()=>{
    content.classList.add("active");
    modal.classList.add("active");
})