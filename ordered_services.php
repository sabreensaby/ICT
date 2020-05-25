<h1>Services</h1> 

<table class="table" id="order_list">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Staff Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders_services as $key => $order) { ?>
        <tr>
            <td><a href="javascript:void();">#<?php echo $order['id'];?></a></td>
            <td><?php echo $order['staff_name'];?></td>
            <td><?php echo $order['staff_email'];?></td>
            <td><?php echo $order['staff_role'];?></td>
            <td>₹ <?php echo $order['price'];?></td>
            <td><?php echo $order['created_at'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>