<h1>Packages</h1> 

<table class="table" id="order_list">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Username</th>
            <th>Package</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders_packages as $key => $order) {
            $records = get_user_name($order['user_id']);
            $username = $records['username'];
            ?>
        <tr>
            <td><a href="javascript:void();">#<?php echo $order['id'];?></a></td>
            <td><a href="javascript:void();"><?php echo $username;?></a></td>

            <td><?php echo $order['package_name'];?></td>
            <td>₹ <?php echo $order['price'];?></td>
            <td><?php echo $order['created_at'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>