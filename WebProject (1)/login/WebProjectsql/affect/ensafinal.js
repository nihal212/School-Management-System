//declearing html elements

const imgDiv = document.querySelector('.profile');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display= "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display= "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener('change', function(){
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        //Allright is done

        //please like the video
        //comment if have any issue related to vide & also rate my work in comment section

        //And aslo please subscribe for more tutorial like this

        //thanks for watching
    }
});



 
/*let addes = document.querySelector('#addRow');
let table = document.querySelector('table');


 addes.addEventListener('click', () => {

	let template = `
	<tr>
		<td></td>
		<td></td>
	</tr>`;

	table.innerHTML += template;
});*/

/*let drag=null;
let boxs=document.querySelectorAll('.box');
let boxn=document.querySelectorAll('.div1');
let cases=document.querySelectorAll('.cas');

	boxs.forEach(box=>{
		box.addEventListener('dragstart',function(){
			drag = box;
			box.style.opacity = '0.8';
		})

		box.addEventListener('dragend',function(){
			//drag = box;
		    box.style.opacity = '1';

		})

		boxn.forEach(div1=>{
			div1.addEventListener('dragover',function(e){
		e.preventDefault()

				this.style.background = '#090';
				this.style.color = "#fff";

			})
			div1.addEventListener('dragleave',function(){
				this.style.background = '#fff';
				this.style.color = "#000";

			})
		})
	})
		
		cases.forEach(cas=>{
			cas.addEventListener('dragstart',function(){
			drag = box;
			box.style.opacity = '0.8';
		})

		cas.addEventListener('dragend',function(){
			//drag = box;
		    box.style.opacity = '1';
		})

		cases.forEach(div1=>{
			cas.addEventListener('dragover',function(e){
		e.preventDefault()

				this.style.background = '#090';
				this.style.color = "#fff";

			})
			cas.addEventListener('dragleave',function(){
				this.style.background = '#fff';

				
               this.style.color = "#000";
				//this.style.background.nth-child(even)= 'white';
				//height: 50px;


	
	/*this.style:nth-child(2n+1){
		background-color: gray;
				//height: 50px;


	}*/

			//})
	
	/*	cas.addEventListener('drop',function(){
				cas.append(drag);
				this.style.background = '#fff';
				this.style.color = "#000";
			})
		*/
			//})
	//	})



    $('.addRow').on('click', function() {
        $('#targetTable > tbody:last-child').append('<tr><td id="cas_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);"></td><td id="case_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);"></td></tr>');
      });
    
    
      
      
  /*$(function() {
    function getBounds(el) {
      var p = $(el).position();
      p.right = p.left + $(el);
      p.bottom = p.top + $(el);
      return p;
    }
  
    function isOver(a, b) {
      var ap;
      if (typeof a == "object") {
        ap = a;
      } else {
        ap = getBounds(a);
      }
      var bp = getBounds(b);
      return (ap.left > bp.left && ap.right < bp.right) && (ap.top > bp.top && ap.bottom < bp.bottom);
      }
    $(".box").draggable({
      helper: "clone",
      cursor: "move",
      revert: "invalid"
    });
    $(".cas").droppable({
      accept: ".box",
      drop: function(event, ui) {
        var cl = ui.helper.clone();
        cl.appendTo(this).draggable({
          appendTo: "#targetTable",
          stop: function(e, ui) {
            if (isOver($.extend({}, ui.position, {
                right: ui.position.left + ui.helper,
               bottom: ui.position.top + ui.helper
                 }), $(".cas")) == false) {
              var a = getBounds($("#targetTable > .box"));
              ui.helper.animate({
                top: a.top,
                left: a.left
              }, function() {
                ui.helper.remove();
              });
            } else {
              console.log("Drop Inside");
            }
          }
        });
        ui.helper.remove();
      }
    });*/{
  function dragstart_handler(ev) {
   console.log("dragStart");
   // Change the source element's background color to signify drag has started
   ev.currentTarget.style.border = "dashed";
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
   ev.currentTarget.style.background = "lightblue";
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
    // Copy the element if the source and destination ids are both "copy"
    if (id == "box_copy" && ev.target.id == "cas_copy") {
     var nodeCopy = document.getElementById(id).cloneNode(true);
     nodeCopy.class = "newId";
     ev.target.appendChild(nodeCopy);
  
  
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
      
  
  /*function updateOrder(adata){
    $.ajax({
      url:'ajaxPost.php',
      data:{
        allData:adata},
        success:function(){
          alert("your change successfully saved");
        }
      
    });
  }*/
  /*var sPositions = localStorage.positions || "{}",
      positions = JSON.parse(sPositions);
  $.each(positions, function (id, pos) {
      $("#" + id).css(pos)
  })
  $("#module").draggable({
      containment: ".module",
      scroll: false,
      stop: function (event, ui) {
          positions[this.id] = ui.position
          localStorage.positions = JSON.stringify(positions)
      }
  });*/
  /* $(document).ready(function () {
              if(local.get('divOffset')){
                  $('#module').css(local.get('divOffset'))
              }
              $('#module').draggable();
              $('#module').on('click','#saveme',function(){
                  var $drag=$('#module'),
                  offset =$drag.offset();
                  local.set('divOffset',offset);
              });
          });
          function local (){
              return{
                  set : function (key,obj){
                      localStorage.setItem(key,JSON.stringify(obj));
                      return obj;
                  },
                  get : function (key){
                      var obj = {};
                      if(localStorage.getItem(key)!=='undefined'){
                          obj=JSON.parse(localStorage.getItem(key));
                      }
                      return obj;
                  },
                  clear :function(){
                      localStorage.clear();
                      return this;
                  },
                  remove : function(key){
                      localStorage.removeItem(key);
                      return this;
                  }
              };
          }
          var local = local();
  /*var positions = JSON.parse(localStorage.positions || "{}");
   $(function () {
     var d = $("[id=draggable]").attr("id", function(i) {
                  return "draggable_" + i
              })
   $.each(positions, function (id, pos) {
          $("#" + id).css(pos)
      })
  
    d.draggable({
          containment: "#div2",
          scroll: false,
          stop: function (event, ui) {
              positions[this.id] = ui.position
              localStorage.positions = JSON.stringify(positions)
          }
      });
  });
  /*
  function dragstart_handler(ev) {
   console.log("dragStart");
   // Change the source element's background color to signify drag has started
   ev.currentTarget.style.border = "dashed";
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
   ev.currentTarget.style.background = "lightblue";
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
    // Copy the element if the source and destination ids are both "copy"
    if (id == "module" && ev.target.id == "case_copy") {
     var nodeCopy = document.getElementById(id).cloneNode(true);
     nodeCopy.class = "newId";
     ev.target.appendChild(nodeCopy);
    }
  }function dragend_handler(ev) {
    console.log("dragEnd");
    // Restore source's border
    ev.target.style.border = "solid black";
    // Remove all of the drag data
    ev.dataTransfer.clearData();
  }
  */
  /*$(document).ready(function () {
              if(local.get('divOffset')){
                  $('cas_copy').css(local.get('divOffset'))
              }
              $('cas_copy').draggable();
              $('cas_copy').on('click','#saveme',function(){
                  var $drag=$('cas_copy'),
                  offset =$drag.offset();
                  local.set('divOffset',offset);
              });
          });
          function local (){
              return{
                  set : function (key,obj){
                      localStorage.setItem(key,JSON.stringify(obj));
                      return obj;
                  },
                  get : function (key){
                      var obj = {};
                      if(localStorage.getItem(key)!=='undefined'){
                          obj=JSON.parse(localStorage.getItem(key));
                      }
                      return obj;
                  },
                  clear :function(){
                      localStorage.clear();
                      return this;
                  },
                  remove : function(key){
                      localStorage.removeItem(key);
                      return this;
                  }
              };
          }
          var local = local();*/
  // Créer un objet vide pour stocker les positions des éléments
  /*var positions = {};
  
  // Écouter l'événement dragend sur les éléments draggable
  $('.draggable').on('dragend', function() {
    // Récupérer l'ID de l'élément draggable et sa position actuelle
    var id = $(this).attr('id');
    var x = $(this).position().left;
    var y = $(this).position().top;
    
    // Stocker la position dans l'objet des positions
    positions[id] = { x: x, y: y };
    
    // Enregistrer l'objet des positions dans localStorage ou sessionStorage
    localStorage.setItem('positions', JSON.stringify(positions));
  });
  // Récupérer l'objet des positions à partir de localStorage ou sessionStorage
  var savedPositions = localStorage.getItem('positions');
  
  if (savedPositions) {
    // Si des positions ont été enregistrées, les convertir en objet JavaScript
    var positions = JSON.parse(savedPositions);
    
    // Positionner chaque élément draggable à sa position enregistrée
    $('.draggable').each(function() {
      var id = $(this).attr('id');
      if (positions[id]) {
        $(this).css({ left: positions[id].x, top: positions[id].y });
      }
    });
  }*/// Récupérer tous les éléments draggable
  // Au moment du dragstart
  function dragstart_handler(ev) {
    // Enregistrer l'ID de l'élément source et sa position initiale
    ev.dataTransfer.setData("text/plain", ev.target.id);
    ev.dataTransfer.setData("text/initialIndex", getIndex(ev.target));
  }
  
  // Au moment du drop
  function drop_handler(ev) {
    ev.preventDefault();
    // Récupérer l'ID de l'élément source et sa position initiale
    var id = ev.dataTransfer.getData("text/plain");
    var initialIndex = parseInt(ev.dataTransfer.getData("text/initialIndex"));
    // Récupérer la nouvelle position de l'élément dans la liste ordonnée des éléments
    var newIndex = getIndex(ev.target);
    // Déplacer l'élément dans le DOM
    var node = document.getElementById(id);
    if (newIndex < initialIndex) {
      ev.target.parentNode.insertBefore(node, ev.target);
    } else {
      ev.target.parentNode.insertBefore(node, ev.target.nextSibling);
    }
    // Mettre à jour les positions des autres éléments
    updatePositions();
  }
  
  // Mettre à jour les positions des éléments
  function updatePositions() {
    var elements = document.querySelectorAll('.draggable');
    for (var i = 0; i < elements.length; i++) {
      // Enregistrer la nouvelle position de l'élément dans la liste ordonnée des éléments
      elements[i].setAttribute('data-index', i);
    }
    // Envoyer la nouvelle liste ordonnée des éléments à votre serveur (par exemple, en utilisant une requête AJAX)
    var positions = [];
    for (var i = 0; i < elements.length; i++) {
      positions.push(elements[i].id);
    }
    // envoyer les positions sur le serveur
  }
  // Fonction pour sauvegarder la disposition des éléments
  function saveLayout() {
    // Récupérer les positions des éléments et les stocker dans un tableau
    var positions = [];
    $(".module").each(function() {
      var pos = $(this).position();
      var id = $(this).attr("id");
      positions.push({ id: id, left: pos.left, top: pos.top });
    });
    // Convertir le tableau en chaîne JSON et le stocker dans le localStorage
    localStorage.setItem("layout", JSON.stringify(positions));
  }
  
  // Fonction pour charger la dernière disposition enregistrée
  function loadLayout() {
    // Récupérer la disposition depuis le localStorage
    var layout = localStorage.getItem("layout");
    if (layout) {
      // Convertir la chaîne JSON en tableau et positionner les éléments
      var positions = JSON.parse(layout);
      positions.forEach(function(pos) {
        $("#" + pos.id).css({ left: pos.left, top: pos.top });
      });
    }
  }
  
  // Fonction pour gérer l'événement dragend
  function dragend_handler(ev) {
    console.log("dragEnd");
    // Restaurer la bordure de la source
    //ev.target.style.border = "solid black";
    // Supprimer toutes les données de drag
    ev.dataTransfer.clearData();
  
    // Sauvegarder la disposition après chaque mouvement
    saveLayout();
  }
  
  // Ajouter un événement DOMContentLoaded pour charger la disposition enregistrée
  document.addEventListener("DOMContentLoaded", loadLayout);
  