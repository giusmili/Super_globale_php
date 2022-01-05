document.addEventListener("DOMContentLoaded",()=>{
    let x, y
    console.log(x)
    x = 2022
    y = null
    localStorage.setItem("mdp", x)

    let user = {
        storage: localStorage.setItem("mdp", x),
        calc(x){
            x ? console.log(x):false
        }

    }
    console.log(user.storage)
    user.calc("hello")

    let crypt = (a,b,c)=>{

    }
})