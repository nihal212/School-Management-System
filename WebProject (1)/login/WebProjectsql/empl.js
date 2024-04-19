const dropCards = document.querySelectorAll(".drop__card");
const allStatus = document.querySelectorAll(".status");
let draggableDropCard = null;

dropCards.forEach((dropCard) => {
  dropCard.addEventListener("dragstart", dragStart);
  dropCard.addEventListener("dragend", dragEnd);
});

function dragStart(event) {
  draggableDropCard = this;
  event.dataTransfer.setData("text/plain", ""); // Nécessaire pour le glisser-déposer pour fonctionner dans Firefox
  setTimeout(() => {
    this.style.display = "none";
  }, 0);
  console.log("dragStart");
}

function dragEnd() {
  draggableDropCard = null;
  setTimeout(() => {
    this.style.display = "block";
  }, 0);
  console.log("dragEnd");
}

allStatus.forEach((status) => {
  status.addEventListener("dragover", dragOver);
  status.addEventListener("dragenter", dragEnter);
  status.addEventListener("dragleave", dragLeave);
  status.addEventListener("drop", dragDrop);
});

function dragOver(event) {
  event.preventDefault();
}

function dragEnter() {
  this.style.border = "4px dashed #ccc";
  console.log("dragEnter");
}

function dragLeave() {
  this.style.border = "none";
  console.log("dragLeave");
}

function dragDrop(event) {
  event.preventDefault();
  this.style.border = "none";
  const droppedCard = draggableDropCard;
  if (this.classList.contains("status")) {
    if (droppedCard.parentNode !== this) {
      this.appendChild(droppedCard);
    }
    console.log("dropped");
  } else {
    const noStatus = document.querySelector("#no_status");
    if (droppedCard.parentNode !== noStatus) {
      noStatus.appendChild(droppedCard);
    }
  }
}

const btnSauvegarder = document.getElementById('btn-sauvegarder');
btnSauvegarder.addEventListener('click', sauvegarderInformations);

function sauvegarderInformations() {
  const draggableCards = document.querySelectorAll(".status .drop__card");
  if (draggableCards.length === 0) {
    console.log("Aucune carte draggable sélectionnée");
    return;
  }
  const paysSelect = document.getElementById('pays');
  const selectedPays = paysSelect.value; // Récupérer la valeur sélectionnée dans la liste déroulante
  
  draggableCards.forEach((draggableCard) => {
    const name = draggableCard.querySelector('.drop__name').textContent;
    const profession = draggableCard.querySelector('.drop__profession').textContent;
    const jour = draggableCard.parentNode.getAttribute('data-jour');
    const heure = draggableCard.parentNode.getAttribute('data-heure');

    // console.log(name);
    // console.log(profession);
    // console.log(heure);
    // console.log(jour);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'enp.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
        // Afficher un message ou effectuer d'autres actions après la sauvegarde réussie
      }
    };
    const dataToSend = 'name=' + encodeURIComponent(name) + '&profession=' + encodeURIComponent(profession) + '&jour=' + encodeURIComponent(jour) + '&heure=' + encodeURIComponent(heure) + '&pays=' + encodeURIComponent(selectedPays);
    // Ajoutez ici les autres données du formulaire à envoyer

    xhr.send(dataToSend);
  });
}