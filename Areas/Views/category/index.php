
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Danh sách Loại sản phẩm </h4>
                    <a href="/category/create"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th class="serial">STT</th>
                                <th>Tên Loại</th>
                                <th>Tên kiểu</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($categories as $i=>$category){?>
                            <tr>
                                <td class="serial"><?php echo $i?></td>
                                <td> <?php echo $category['CategoryName']?> </td>
                                <?php foreach($types as $type){?>
                                <?php if($category['TypeId']==$type['TypeId']){?>
                                    <td> <span class="name"><?php echo $type['TypeName']?></span> </td>
                                <?php }?>
                                <?php }?>
                                <td>
                                    <a href=<?php echo "/category/update?id=".$category['CateId']?>><button type="button" class="btn btn-info">Sửa</button></a>
                                    <a onclick="return deleteajax(<?php echo $category['CateId']?>,'category')" href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
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