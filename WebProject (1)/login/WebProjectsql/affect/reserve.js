


  $('.addRow').on('click', function() {
      $('#targetTable > tbody:last-child').append('<tr><td id="cas_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);"></td><td id="case_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);"></td></tr>');
    });
  
  {
function dragstart_handler(ev) {
 console.log("dragStart");
 // Change the source element's background color to signify drag has started
 ev.currentTarget.style.border = "none" ;//"dashed";
 // Add the id of the drag source element to the drag data payload so
 // it is available when the drop event is fired
 ev.dataTransfer.setData("text", ev.target.id);
 // Tell the browser both copy and move are possible
 ev.effectAllowed = "copyMove";
}
function dragover_handler(ev) {
 console.log("dragOver");
 // Change the target element's border to signify a drag over event
 // has occurred
 ev.currentTarget.style.background =" none";//"lightblue";
 ev.preventDefault();
 }
function drop_handler(ev) {

  console.log("Drop");
  ev.preventDefault();
  // Get the id of drag source element (that was added to the drag data
  // payload by the dragstart event handler)
  var id = ev.dataTransfer.getData("text");
  // Only Move the element if the source and destination ids are both "move"
  //if (class == "box_move" && ev.target.class == "cas_move")
   // ev.target.appendChild(document.getElementById(class));
  //  Copy the element if the source and destination ids are both "copy"
 if (ev.target.id === "cas_copy") {
   var nodesToCopy = document.getElementsByClassName("box_copy");
   var newNode = document.createElement("div");
   newNode.classList.add("newId");

   for (var i = 0; i < nodesToCopy.length; i++) {
      var nodeCopy = nodesToCopy[i].cloneNode(true);
      nodeCopy.classList.add("newId");
      newNode.appendChild(nodeCopy);
   }

   ev.target.appendChild(newNode);
}

    if (id == "module" && ev.target.id == "case_copy") {
   var nodeCopy = document.getElementById(id).cloneNode(true);
   nodeCopy.class = "newId";
   ev.target.appendChild(nodeCopy);
                
  }

}function dragend_handler(ev) {
  console.log("dragEnd");
  // Restore source's border
  //ev.target.style.border = "solid black";
  // Remove all of the drag data
  ev.dataTransfer.clearData();
}         
                
}
function allowDrop(ev)
{
ev.preventDefault();
}
function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}
function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
var el = document.getElementById(data);
el.parentNode.removeChild(el);
}
   





































window.onload = function () {
  document.getElementById("download").addEventListener("click", () => {
    const invoice = this.document.getElementById("targetTable");
    console.log(targetTable);
    console.log(window);
    var opt = {
      filename: 'ma_liste.pdf',
      image: { type: 'jpeg', quality: 1, dpi: 300 },
      html2canvas: { scale: 1 },
      jsPDF: { unit: 'mm', format: 'legal', orientation: 'l' }
    };
    html2pdf().from(targetTable).set(opt).save();
  })
}

document.querySelector('.addRow').addEventListener('click', function () {
  var table = document.getElementById('targetTable');
  var newRow = table.insertRow();
  var cell1 = newRow.insertCell();
  cell1.className = 'cas_copy';
  cell1.setAttribute('ondrop', 'drop_handler(event);');
  cell1.setAttribute('ondragover', 'dragover_handler(event);');

  var cell2 = newRow.insertCell();
  cell2.className = 'case_copy';
  cell2.setAttribute('ondrop', 'drop_handler(event);');
  cell2.setAttribute('ondragover', 'dragover_handler(event);');
});

var draggedItem;

function dragstart_handler(ev) {
  console.log("dragStart");
  ev.currentTarget.style.border = "none";
  ev.dataTransfer.setData("text/plain", ev.target.id);
  ev.effectAllowed = "move";

  // Cloner l'élément en cours de déplacement
  var clonedItem = ev.target.cloneNode(true);
  clonedItem.classList.add("dragged-item");
  ev.dataTransfer.setDragImage(clonedItem, 0, 0);

  // Stocker la référence de l'élément cloné
  draggedItem = clonedItem;
}
function drop_handler(ev) {
  console.log("Drop");
  ev.preventDefault();

  var id = ev.dataTransfer.getData("text/plain");

  // Récupérer les données de l'élément déposé
  var text = ev.target.innerText;
  var module = ev.target.parentNode.cells[1].innerText;
  var professeur = ev.target.parentNode.cells[0].innerText;

  // Effectuer une requête AJAX pour insérer les données dans la base de données
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "insert_data.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send("data=" + encodeURIComponent(text) + "&professeur=" + encodeURIComponent(professeur) + "&module=" + encodeURIComponent(module));

  // Attacher l'élément cloné à l'élément cible
  var clonedItem = draggedItem.cloneNode(true);
  clonedItem.classList.remove("dragged-item");
  ev.target.appendChild(clonedItem);

  // Remettre l'élément original à sa position initiale
  returnToOriginalPosition(document.getElementById(id));
}

function dragover_handler(ev) {
  console.log("dragOver");
  // Change the target element's border to signify a drag over event has occurred
  ev.currentTarget.style.background = "none"; //"lightblue";
  ev.preventDefault();
}

/*function drop_handler(ev) {

  console.log("Drop");
  ev.preventDefault();

  var id = ev.dataTransfer.getData("text/plain");

  // Attacher l'élément cloné à l'élément cible
  var clonedItem = draggedItem.cloneNode(true);
  clonedItem.classList.remove("dragged-item");
  ev.target.appendChild(clonedItem);

  // Remettre l'élément original à sa position initiale
  returnToOriginalPosition(document.getElementById(id));
}

document.getElementById('dropdiv').addEventListener('click', function() {
  // Supprimer l'élément parent du bouton (la cellule de la table)
  var cell = this.parentNode;
  cell.parentNode.removeChild(cell);
});



function drop_handler(ev) {
  console.log("Drop");
  ev.preventDefault();

  var id = ev.dataTransfer.getData("text/plain");

  // Attacher l'élément cloné à l'élément cible
  var clonedItem = draggedItem.cloneNode(true);
  clonedItem.classList.remove("dragged-item");

  // Créer le bouton "Supprimer"
  var deleteButton = document.createElement("button");
  
 deleteButton.style. background="blue";
 deleteButton.style.width="100px";
 deleteButton.style.color="white";

   

  deleteButton.textContent = "Supprimer";
  deleteButton.addEventListener("click", function() {
    // Supprimer l'élément parent du bouton (l'élément cloné)
    var parent = this.parentNode;
    parent.parentNode.removeChild(parent);
  });

  // Ajouter l'élément cloné et le bouton "Supprimer" à la cellule de la table
  ev.target.appendChild(clonedItem);
  ev.target.appendChild(deleteButton);

  // Remettre l'élément original à sa position initiale
  returnToOriginalPosition(document.getElementById(id));
}
*/
function allowDrop(ev) {
  ev.preventDefault();
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("Text");
  var el = document.getElementById(data);
  el.parentNode.removeChild(el);
}

