<?php 

include("../controller/card.controller.php");

?>

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
    <td><img src="../img/<?= $card["image_card"] ?>" width="50px" alt=""></td>
        <td><?= $card["name_card"] ?></td>
        <td><?= $card["price_card"] ?></td>
        <td><?= $card["quantity_card"] ?></td>
        <td><?php echo $total = $card["price_card"] * $card["quantity_card"]; ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
        <td colspan=2></td>
        <td colspan=2>TOTAL</td>
        <td></td>
    </tr>
</table>