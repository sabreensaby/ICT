<h1>Packages</h1> 

<table class="table" id="order_list">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Package</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders_packages as $key => $order) { ?>
        <tr>
            <td><a href="javascript:void();">#<?php echo $order['id'];?></a></td>
            <td><?php echo $order['package_name'];?></td>
            <td>₹ <?php echo $order['price'];?></td>
            <td><?php echo $order['created_at'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>