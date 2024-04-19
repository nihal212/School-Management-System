<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="ENSAH4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section>
	<div id="divc">
		<h1 id="legende">La liste des prof_module pour GI2</h1>
		<div id="divt">
			<div class="divh">
				<table id="targetTable" border="1">
					<tr>
						<th><h3>Professeur</h3></th>
						<th><h3>Module</h3></th>
					</tr>
					<tr>
                        <td class="cas_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" style="background: none;"></td>
						<td id="case_copy_1" ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
					</tr>
					<tr>
						<td class="case_copy" ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
						<td id="case_copy_2" ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
					</tr>
				</table>
				<div class="dr">
					<button class="addRow">Ajouter</button>
					<button id="dropdiv" ondrop="drop(event)" ondragover="allowDrop(event)">Supprimer</button>
					<button id="download">Télécharger</button>
				</div>
			</div>
		</div>
		<style>
			#targetTable {
				width: 100%;
			}
		</style>
		<script>
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

			function dragover_handler(ev) {
				console.log("dragOver");
				// Change the target element's border to signify a drag over event has occurred
				ev.currentTarget.style.background = "none"; //"lightblue";
				ev.preventDefault();
			}

            function drop_handler(ev) {
    console.log("Drop");
    ev.preventDefault();

    var id = ev.dataTransfer.getData("text/plain");

    // Attacher l'élément cloné à l'élément cible
    var clonedItem = draggedItem.cloneNode(true);
    clonedItem.classList.remove("dragged-item");
    ev.target.appendChild(clonedItem);
}



			function dragend_handler(ev) {
				console.log("dragEnd");
				ev.dataTransfer.clearData();

				// Supprimer l'élément cloné
				if (draggedItem && draggedItem.parentNode) {
					draggedItem.parentNode.removeChild(draggedItem);
				}
			}

			function allowDrop(ev) {
				ev.preventDefault();
			}

			function drop(ev) {
				ev.preventDefault();
				var data = ev.dataTransfer.getData("Text");
				var el = document.getElementById(data);
				el.parentNode.removeChild(el);
			}
		</script>
		<div id="divp">
			<div class="divg">
				<?php
				include_once "connexion.php";
				$req = mysqli_query($con, "SELECT nom ,prenom FROM prof");
				if (mysqli_num_rows($req) == 0) {
					echo "Il n'y a pas encore de professeur ajouté !";
				} else {
					while ($row = mysqli_fetch_assoc($req)) {
						?>
						<div class="div1">
                        
							<p class="box_copy" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">
								<?=$row['nom']?><?=$row['prenom']?>
							</p>
							<div class="cercle"> <img src="img.jpg" width="190px"> </div>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
		<div id="divm">
			<div id="div3">
				<form action="" class="search2">
					<input type="text" placeholder="Recherche" name="h">
					<button type="submit"><img src="search.jpg"></button>
				</form>
				</div>
				<div id="div2">
					<div class="module">
						<h4 id="module1" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">Module</h4>
					</div>
					<div class="module">
						<h4 id="module2" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">Module</h4>
					</div>
					<div class="module">
						<h4 id="module3" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">Module</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>

