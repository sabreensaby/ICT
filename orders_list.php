<table class="table" id="order_list">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders_list as $key => $order) { ?>
        <tr>
            <td><a href="my-account.php?content=orders_detail&id=<?php echo $order['id'];?>">#<?php echo $order['id'];?></a></td>
            <td>₹ <?php echo $order['amount'];?></td>
            <td><?php echo $order['created_at'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>