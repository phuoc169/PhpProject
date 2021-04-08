
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Danh sách sản phẩm </h4>
                    <a href="/products/create"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th class="serial">STT</th>
                                <th class="avatar">Hình ảnh</th>
                                <th>Hình hảnh 2</th>
                                <th>Tên sản phẩm</th>
                                <th>Loại</th>
                                <th>Ngày tạo</th>
                                <th>Giá</th>
                                <th>Mô tả sản phẩm</th>
                                <th>Giảm giá</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($products as $i=>$prod){?>
                            <tr>
                                <td class="serial"><?php echo $i?></td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src=<?php echo $prod['ProductImage']?> alt=""></a>
                                    </div>
                                </td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src=<?php echo $prod['ProductImage2']?> alt=""></a>
                                    </div>
                                </td>
                                <td> <?php echo $prod['ProductName']?> </td>
                                <?php foreach($categories as $category){?>
                                <?php if($prod['CateId']==$category['CateId']){?>
                                    <td> <span class="name"><?php echo $category['CategoryName']?></span> </td>
                                <?php }?>
                                <?php }?>
                                <td> <span class="product"><?php echo $prod['CreateDate']?></span> </td>
                                <td><span class="count"><?php echo $prod['ProductPrice']?></span></td>
                                <td> <?php echo $prod['Description']?> </td>
                                <td><?php echo $prod['Discount']?></td>
                                <td>
                                    <a href=<?php echo "/products/update?id=".$prod['ProductId']?>><button type="button" class="btn btn-info">Sửa</button></a>
                                    <a onclick="return deleteajax(<?php echo $prod['ProductId']?>,'products')" href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>