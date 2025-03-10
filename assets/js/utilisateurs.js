const modifBtn = document.getElementById("modifBtn")
const formModif = document.getElementById('formModifUser')
const userInfos = document.getElementById("userInfosContainer")

modifBtn.addEventListener('click', function(){
    afficherForm()
})

function afficherForm(){
    formModif.style.display = "block"
}