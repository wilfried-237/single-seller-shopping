<table class="table">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>

    
<?php foreach($cards as $card): ?>
    <tr>
    <td><?= $card["image_card"] ?></td>
        <td><?= $card["name_card"] ?></td>
        <td><?= $card["price_card"] ?></td>
        <td><?= $card["quantity"] ?></td>
        <td><?= $card["price_card"] * $card["quantity_card"] ?> ?></td>
    </tr>
    <?php endforeach; ?>
</table>