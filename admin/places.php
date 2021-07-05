<?php include_once("shared/header.php"); ?>

<?php
    $placeName = '';

?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Add <?=$title?>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add <?=$title?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=$_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name of the place" value="<?=$placeName;?>">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include_once("shared/footer.php"); ?>