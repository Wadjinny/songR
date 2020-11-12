window.onload = () => {
    list=[]
    aesthetics()
    displayStocks()
    ItemNumControle()
    zoomImg()
}
function zoomImg(){
    let imgs=Array.from(document.getElementsByTagName("img")).filter((el)=>el.parentNode.parentNode.classList[0]=="song")
    let img=document.createElement("img")
    img.classList.add("imgHover")
    document.getElementsByTagName("body")[0].append(img)
    let mousover=(el)=>{
        console.log(el)
        img.style.display="block"
        img.style.left=el.clientX+"px"
        img.style.top=el.clientY+"px"
        img.src=el.path[0].src
    }
    let mousleave=(el)=>{
        img.style.display="none"
    }
    imgs.forEach(el => {
        el.onmouseover=mousover
        el.onmouseleave=mousleave
    });

    
}
function ItemNumControle() {
    let boxs =Array.from(document.getElementsByClassName("ItemCtrl"))
    boxs.forEach((el,i) => {
        box=el.childNodes
        let btnRemove = box[0]
        let numIn = box[1]
        let btnAdd = box[2]
        btnAdd.onclick = () => {
            numIn.value = parseInt(numIn.value) + 1
            check()
        }
        btnRemove.onclick = () => {
            numIn.value = parseInt(numIn.value) - 1
            check()
        }
        let check=()=>{
            btnRemove.disabled = parseInt(numIn.value) == 0   
            btnAdd.disabled= parseInt(numIn.value)>list[i]-1
        }
    });
}

function displayStocks() {
    btn = document.getElementById("stock")
    stockInf = Array.from(document.getElementsByClassName("displayStock"))
    stockInf.forEach(el =>{
        let rand = Math.floor(Math.random() * 20+ 1)
        el.firstElementChild.innerHTML = rand + " Morceau"
        list.push(rand)
    })
    isShown = false
    btn.onclick = clkStock
}

let clkStock = () => {
    isShown = !isShown
    btn.style.background = isShown ? "#000" : "#A57548"
    if (isShown) {
        stockInf.forEach(el => {
            el.classList.remove("animatOut")
            el.classList.add("animatIn")
            setTimeout(() => {
                el.style.left = "-10px"
            }, 500)
        });
    } else {
        stockInf.forEach(el => {
            el.classList.remove("animatIn")
            el.classList.add("animatOut")
            setTimeout(() => {
                el.style.left = "-100px"
            }, 500)
        });
    }
}

function aesthetics() {
    let pgs = ["Acceuil", "Rock", "Opera", "Classical", "Contact"]
    let title = document.getElementsByTagName("title")[0].innerText
    let ind = pgs.indexOf(title)
    let list = document.getElementsByTagName("ul")[0].children
    list[ind].children[0].classList.add("selected")
}
function elAinelB(a,b) {
    const rect1 = a.getBoundingClientRect();
    const rect2 = b.getBoundingClientRect();
    return (
        rect1.top >= 0 &&
        rect1.left >= 0 &&
        rect1.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect1.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
}