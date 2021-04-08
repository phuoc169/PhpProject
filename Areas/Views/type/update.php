<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">Sửa loại sản phẩm</div>
               <div class="card-body card-block">
               <form method="post" id="updateform" enctype="multipart/form-data">
                  <div class="form-group">
                  <label for="company" class=" form-control-label">Tên sản phẩm</label>
                  <input name="TypeName" value='<?php echo $type['TypeName']?>' type="text" id="company" class="form-control"></div>
                  <button type="submit" name="btnupdatetype" value="btnupdatetype" class="btn btn-primary">Sửa loại sản phẩm</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>