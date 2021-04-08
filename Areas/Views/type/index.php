
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Danh sách loại sản phẩm </h4>
                    <a href="/type/create"><button type="button" class="btn btn-primary">Thêm loại sản phẩm</button></a>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th class="serial">STT</th>
                                <th>Tên Loại</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($types as $i=>$type){?>
                            <tr>
                                <td class="serial"><?php echo $i?></td>
                                <td> <?php echo $type['TypeName']?> </td>
                                <td>
                                    <a href=<?php echo "/type/update?id=".$type['TypeId']?>><button type="button" class="btn btn-info">Sửa</button></a>
                                    <a onclick="return deleteajax(<?php echo $type['TypeId']?>,'type')" href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
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