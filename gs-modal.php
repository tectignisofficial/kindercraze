<?php
include("config.php");
?>

<!doctype html>
<html lang="en">
    
<div class="modal fade" id="getstarted" tabindex="-1" role="dialog" aria-labelledby="getstartedLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="getstartedlLabel">Gate Started</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="row">
                <div class="col-6">
                        <div class="form-group">
                            <label for="inputName">First Name</label>
                            <input type="text" name="fname" class="form-control" id="inputfname"
                                placeholder="Enter Firm Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputName">Last Name</label>
                            <input type="text" name="name" class="form-control" id="inputName"
                                placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
              
                        <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail"
                                placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputPass">Mobile Number</label>
                            <input type="text" minlength="10" maxlength="10" class="form-control" name="number" id="number" placeholder="Mobile Number" required>
                        </div>
                    </div>
                                     
                    </div>                           
                </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
        </div>
            </form>
        </div>
       
    </div>
</div>
</div>

<!-- <script>
          $(document).ready(function(){
          $('.usereditid').click(function(){
            let dnk = $(this).data('id');

            $.ajax({
            url: '.php',
            type: 'post',
            data: {dnk: dnk},
            success: function(response1){ 
              $('.body1').html(response1);
              $('#getstarted').modal('show'); 
            }
          });
          });


          });
          </script> -->


</html>