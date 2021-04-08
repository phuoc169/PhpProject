<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">Thêm sản phẩm</div>
               <div class="card-body card-block">
               <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                  <label for="company" class=" form-control-label">Tên sản phẩm</label>
                  <input name="ProductName" type="text" id="company" class="form-control"></div>
                  <div class="form-group">
                  <label for="vat" class=" form-control-label">Loại sản phẩm</label>
                  <select name="Category" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <?php foreach($categories as $category){?>
                     <option value=<?php echo $category['CateId']?>><?php echo $category['CategoryName']?></option>
                  <?php }?>
                  </select>
                  <div class="form-group">
                  <label for="street" class=" form-control-label">Giá sản phẩm</label>
                  <input type="number" name="ProductPrice" id="street" class="form-control"></div>
                  <div class="form-group">
                  <label for="street" class=" form-control-label">Giảm giá sản phẩm</label>
                  <input type="number" min="0" max="100" name="Discount" id="street" class="form-control"></div>
                  <div class="form-group">
                  <label for="country" class=" form-control-label">Hình ảnh sản phẩm</label>
                  <input id="imageSelector" type="file" name="ProductImage" id="country" class="form-control"></div>
                  <div id="imagepreview">
                  </div>
                  <div class="form-group">
                  <label for="country" class=" form-control-label">Hình ảnh sản phẩm 2</label>
                  <input id="imageSelector2" type="file" name="ProductImage2" id="country" class="form-control"></div>
                  <div id="imagepreview2">
                  </div>
                  <div class="form-group">
                  <label for="country" class=" form-control-label">Mô tả sản phẩm</label>
                  <input type="text" name="Description" id="country" class="form-control"></div>
                  <button type="submit" name="btncreateproduct" value="btncreatesanpham" class="btn btn-primary">Thêm sản phẩm</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>