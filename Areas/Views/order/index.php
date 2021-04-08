
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
                                <th>Order Message</th>
                                <th>Order Datetime</th>
                                <th>Orderstatus</th>
                                <th>Shipping Address</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orders as $i=>$order){?>
                            <tr>
                                <td class="serial"><?php echo $i?></td>
                                <td> <span class="product"><?php echo $order['ordermessage']?></span> </td>
                                <td><?php echo $order['orderdatetime']?></td>
                                <td>
                                    <?php if($order['orderstatus']=='pending'){?>
                                        <span class="badge badge-pending"?><?php echo $order['orderstatus']?></span>
                                    <?php }else{?>
                                        <span class="badge badge-complete"?><?php echo $order['orderstatus']?></span>
                                    <?php }?>
                                </td>
                                <td><?php echo $order['ShippingAddress']?></td>
                                <td>
                                    <a href=<?php echo "/order/update?id=".$order['OrderId']?>><button type="button" class="btn btn-info">Xem đơn hàng</button></a>
                                    <a onclick="return deleteajax(<?php echo $order['OrderId']?>)" href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
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