<!-- Modal -->
<div class="modal fade" id="editAirline<?php echo $row['id_vol']?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" style="margin: 0 100px;">
                    <input type="text" name="nam" value="<?php echo $row['nom_vol']?>"/> <br>
                    <input type="text" name="depart" value="<?php echo $row['departure']?>"/> <br>
                    <input type="text" name="arrival"/> <br>
                    <input type="datetime-local" name="d_depart"/> <br>
                    <input type="datetime-local" name="d_arrival"/> <br>
                    <input type="number" name="prix"/> <br>
                    <input type="number" name="place"/> <br>
                    
                    <input type="submit" name="update" value="save change"/> <br>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>