<div class="modal" id="myModal2" >
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="center">
                    <h1>Modifier Professeurs</h1>
                    <p class="erreur_message">
                        <?php 
                        // si la variable message existe , affichons son contenu
                        if(isset($message)){
                            echo $message;
                        }
                        ?>
            
                    </p>
                    <form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
                        <div class="txt_field">
                            <input type="text" name="nom" value="<?=$row['nom']?>" required>
                            <span></span>
                            <label>Nom</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="prenom" value="<?=$row['prenom']?>" required>
                            <span></span>
                            <label>Prenom</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="profession" value="<?=$row['profession']?>" required>
                            <span></span>
                            <label>Profession</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="iprofession" value="<?=$row['iprofession']?>" required>
                            <span></span>
                            <label>Specialte</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="Nationalite" value="<?=$row['Nationalite']?>" required>
                            <span></span>
                            <label>Nationalite</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="ville" value="<?=$row['ville']?>" required>
                            <span></span>
                            <label>Ville</label>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Ajouter" name="edit" style="padding-top: 10PX;">
                        </div>
                    </form>
                    
                </div>
                
            </div>

        </div>
</div> 