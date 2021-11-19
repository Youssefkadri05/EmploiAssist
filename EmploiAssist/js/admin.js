function myFunction(i) {


  var dots = document.getElementById("dots"+i);
  var moreText = document.getElementById("more"+i);
  var btnText= document.getElementById("myBtn"+i);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Lire plus"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Lire moins"; 
    moreText.style.display = "inline";
  }
  
}


function affiche_message()
{
var message = document.getElementById("id_activite");
message.style.visibility="hidden";
var message1 = document.getElementById("id_activite_hidden");
message1.style.visibility="visible";
}

function affiche_message_moins()
{
var message = document.getElementById("id_activite");
message.style.visibility="visible";
var message1 = document.getElementById("id_activite_hidden");
message1.style.visibility="hidden";
}

function affiche_entreprise()
{
var message = document.getElementById("id_activite");
message.style.visibility="hidden";
var message1 = document.getElementById("id_activite_entreprise_hidden");
message1.style.visibility="visible";
}

function affiche_entreprise_moins()
{
var message = document.getElementById("id_activite");
message.style.visibility="visible";
var message1 = document.getElementById("id_activite_entreprise_hidden");
message1.style.visibility="hidden";
}



function affiche_candidats()
{
var message = document.getElementById("id_activite");
message.style.visibility="hidden";
var message1 = document.getElementById("id_activite_candidats_hidden");
message1.style.visibility="visible";
}

function affiche_candidats_moins()
{
var message = document.getElementById("id_activite");
message.style.visibility="visible";
var message1 = document.getElementById("id_activite_candidats_hidden");
message1.style.visibility="hidden";
}

