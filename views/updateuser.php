<div class="modal fade" id="editUser<?php echo $rows['id_user']?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Update Informations</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <input type="text" name="nom" value="<?php echo $rows['nom']?>"><br>
                            <input type="text" name="prenom" value="<?php echo $rows['prenom']?>"><br>
                            <input type="text" name="tel"><br>
                            <input type="text" name="email"><br>
                            <input type="text" name="num_passport"><br>

                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" name="updateUser" class="btn btn-primary" value="Save changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>