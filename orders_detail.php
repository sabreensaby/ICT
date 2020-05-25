<h1>Order Detail #<?php echo $id;?></h1> 
<table class="table" id="order_list">
    <thead>
        <tr>
            <th></th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=0; foreach ($orders_detail as $key => $order) { $i++; ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><a href="#"><?php echo $order['product_name'];?></a></td>
            <td>₹ <?php echo $order['price'];?></td>
            <td><?php echo $order['qty'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>