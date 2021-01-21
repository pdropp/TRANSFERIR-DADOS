const afuncionario = document.querySelector("#page-home  header a")
const modal = document.querySelector("#modal")
const close = document.querySelector("#modal .header a")



afuncionario.addEventListener("click", () => {
    modal.classList.remove("hide")
})

close.addEventListener("click", () => {
    modal.classList.add("hide")
})