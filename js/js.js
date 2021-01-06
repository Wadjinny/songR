window.onload = () => {
    list = []
    aesthetics()
    settingupCounter()
    settingUpAjouterPanier()
}

function aesthetics() {
    let pgs = ["Acceuil", "rock", "opera", "classic", "Contact", "compte"]
    let title = document.getElementsByTagName("title")[0].innerText
    let ind = pgs.indexOf(title)
    let list = document.getElementsByTagName("ul")[0].children
    list[ind].classList.add("selected")
}

function settingupCounter() {

    let counters = Array.from(document.getElementsByClassName("counter"));
    counters.forEach(counter => {
        let children = counter.childNodes
        let btnUp = children[3].childNodes[1];
        let btnDown = children[3].childNodes[3];
        let holder = children[1];
        btnUp.onclick = () => {
            let max = parseInt(counter.getAttribute("data_max"))
            holder.innerText = Math.min(parseInt(holder.innerText) + 1, max)
        }
        btnDown.onclick = () => {
            holder.innerText = Math.max(parseInt(holder.innerText) - 1, 0)
        }
    });
}

function settingUpAjouterPanier() {
    let songs = Array.from(document.querySelectorAll(".song"))
    songs.forEach(song => {
        let btn = song.querySelector("button")
        btn.addEventListener('click', () => {
            let productId = song.getAttribute("songId")
            let quantite = song.querySelector(".counter>span");
            let table_produit = document.body.getAttribute("table_produit")
            if(getCookie("user")==""){
                if(confirm("Veuillez connecter s'il vous plait.")) window.location="connexion.php"
            }else if(parseInt(quantite.innerText)==0){
                alert('Aucune quantité n\'est sélectionné')
            }else{
                insertCom(productId, quantite.innerText, table_produit)
            }
            
        })
    });


}

function insertCom(id_produit, quantite, table_produit) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        let div = document.createElement('div')
        div.classList.add('hoverDiv')
        if (this.readyState == 4 && this.status == 200)
            if (this.response == "succes") {
                console.log("succes")
                div.innerHTML=`<span class="msgAlertGood"><i class="fas fa-thumbs-up" aria-hidden="true"></i> Votre commande a été ajouté </span>`
                document.body.append(div)
            } else {
                div.innerHTML = `<span class="msgAlertBad"><i class="fas fa-ban" aria-hidden="true"></i> ${this.response} </span>`
                document.body.append(div)

            }
    }
    let valeur = `id_produit=${id_produit}&quantite=${quantite}&table_produit=${table_produit}`
    xhttp.open("GET", "ajouterCom.php?" + valeur, true);
    xhttp.send();
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
