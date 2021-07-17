<?php include_once("shared/header.php"); ?>

<?php
  spl_autoload_register(function($classname){
    include_once("../".$classname.".php");
  });

  use app\models\Place;
  use app\controllers\DBMainController;
  // use app\db\DBInterface;
  use app\db\MysqlDB;
  use app\db\PgsqlDB;

  $fields = ['Place_Name'=>'', 'Latitude'=>'', 'Longitude'=>'', 'Place_Ratings'=>'', 
              'Place_Details'=>'', 'Place_Tips'=>'', 'Submit_Type'=>'add'];

  $submitTypeKey = '';                
  $submitTypeVal = '';

  if($_SERVER['REQUEST_METHOD']=='POST'){
    foreach($_POST as $key=>$val){
      if($fields[$key]!='Submit_Type'){
        $fields[$key]=$val;
      }
    }

    $place = new Place();

    $place->setPlaceName($fields['Place_Name']);
    $place->setPlaceLat($fields['Latitude']);
    $place->setPlaceLong($fields['Longitude']);
    $place->setPlaceRatings($fields['Place_Ratings']);
    $place->setPlaceDetails($fields['Place_Details']);
    $place->setPlaceTips($fields['Place_Tips']);

    $db = new DBMainController(new MysqlDB());
    
    $db->add('place', $place);


    
  }
  

?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Add <?=$title?>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <form class="modal-content" action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add <?=$title?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach($fields as $key=>$val):?>
            <?php if($key=='Place_Details'){?>
            
                <div class="form-group">
                    <textarea class="form-control" name="<?=$key;?>" rows="2" placeholder="<?=$key?>"><?=$val;?></textarea>
                </div>
            
            <?php } else if($key!='Place_Details' && $key!='Submit_Type'){?>
                <div class="form-group">
                    <input type="text" class="form-control" name="<?=$key;?>" placeholder="<?=$key?>" value="<?=$val;?>">
                </div>

            <?php } else{
              $submitTypeKey = $key;
              $submitTypeVal = $val;
            }
            
            endforeach; ?>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="<?=$submitTypeKey;?>"><?=ucfirst($submitTypeVal);?></button>
      </div>
    </form>
  </div>
</div>

<section class="place-list">
  <ul class="list-items">
    
  </ul>

</section>


<?php include_once("shared/footer.php"); ?>