<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">Sửa loạis</div>
               <div class="card-body card-block">
               <form method="post" id="updateform" enctype="multipart/form-data">
                  <div class="form-group">
                  <label for="company" class=" form-control-label">Tên sản phẩm</label>
                  <input name="CategoryName" value='<?php echo $category['CategoryName']?>' type="text" id="company" class="form-control"></div>
                  <div class="form-group">
                  <label for="vat" class=" form-control-label">Loại sản phẩm</label>
                  <select name="TypeId" class="form-select" aria-label="Default select example">
                  <option>Open this select menu</option>
                  <?php foreach($types as $type){?>
                    <?php if($category['TypeId']==$type['TypeId']){?>
                        <option selected value=<?php echo $type['TypeId']?>><?php echo $type['TypeName']?></option>
                    <?php }else{?>
                        <option value=<?php echo $type['TypeId']?>><?php echo $type['TypeName']?></option>
                  <?php }?>
                  <?php }?>
                  </select>
                  </div>
                  <button type="submit" name="btnupdatecategory" value="btnupdatecategory" class="btn btn-primary">Sửa sản phẩm</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>