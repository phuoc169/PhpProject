<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">Thêm loại</div>
               <div class="card-body card-block">
               <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                  <label for="company" class=" form-control-label">Tên loại</label>
                  <input name="CategoryName" type="text" id="company" class="form-control"></div>
                  <div class="form-group">
                  <select name="TypeId" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <?php foreach($types as $type){?>
                     <option value=<?php echo $type['TypeId']?>><?php echo $type['TypeName']?></option>
                  <?php }?>
                  </select>
                  </div>
                  <button type="submit" name="btncreatecategory" value="btncreatecategory" class="btn btn-primary">Thêm Loại</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>