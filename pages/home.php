<?php 
include("controller/home.controller.php");

?>

<div class="row">
<?php 
foreach($products as $product):
?>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
                <img src="img/<?= $product["image_product"] ?>">
            </div>
            <div class="card-content">
                <span class="card-title"><?= $product["name_product"] ?></span>
                <h5>$<?= $product["price_product"] ?></h5>
            </div>
            <div class="card-action">
                <form action="" method="post">
                <input type="hidden" name="image" value="<?= $product["image_product"] ?>">
                <input type="hidden" name="name" value="<?= $product["name_product"] ?>">
                <input type="hidden" name="price" value="<?= $product["price_product"] ?>">
                    <input type="text" name="quantity" value="1">
                    <button type="submit" class="btn btn-pink" name="add">Add to card</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
endforeach;

?>
</div>