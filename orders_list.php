<table class="table" id="order_list">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Username</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders_list as $key => $order) {
             $records = get_user_name($order['user_id']);
             $username = $records['username'];
            ?>
        <tr>
            <td><a href="index.php?content=orders_detail&id=<?php echo $order['id'];?>">#<?php echo $order['id'];?></a></td>
            <td><a href="javascript:void();"><?php echo $username;?></a></td>
            
            <td>₹ <?php echo $order['amount'];?></td>
            <td><?php echo $order['created_at'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>