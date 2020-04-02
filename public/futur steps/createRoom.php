<?php
include "header.php";

$errors = [];

$title = $image = $price = $stock = $isVisible = "";

if (!empty($_POST)) {
    // Verification inputs

    // Insertion en base
    $inOut = $_POST['inOut'];
    $type = $_POST['type'];
    $name =$_POST['name'];
    $infos =$_POST['infos'];
    $open =$_POST['open'];
    $webSiteName =$_POST['webSitename'];
    $webSite =$_POST['webSite'];
    $map =$_POST['Map'];
    $img =$_POST['img'];
    $altImg =$_POST['altImg'];
    $isVisible= $_POST['is_visible'];


    $isVisible = isset($_POST['isVisible']) ? 1 : 0;

    require_once "../../../connec.php";
    $pdo = new PDO(DSN, USER, PWD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO product (`title`, `image`, `price`, `stock`, `is_visible`) VALUES (:title, :image, :price, :stock, :is_visible)";
    $st = $pdo->prepare($query);

    $st->bindValue(":title", $title);
    $st->bindValue(":image", $image);
    $st->bindValue(":price", $price);
    $st->bindValue(":stock", $stock);
    $st->bindValue(":is_visible", $isVisible);

    $st->execute();
    header("Location: /admin/products/");
}


?>

<?php require_once '../_header.php'; ?>

<h2>New Product</h2>


<form action="" method="POST" novalidate>
    <div class="form-group">
        <label for="inputTitle">Title</label>
        <input name="title" value="<?= $title ?>" required type="text" class="form-control" id="inputTitle">
        <?php if (isset($errors['title'])) { ?>
            <small class="form-text text-error">
                <?php echo $errors['title'] ?>
            </small>
        <?php } ?>
    </div>
    <div class="form-group">
        <label for="inputImage">Image</label>
        <input name="image" value="<?= $image ?>" type="url" class="form-control" id="inputImage">
        <?php if (isset($errors['image'])) : ?>
            <small class="form-text text-error">
                <?= $errors['image'] ?>
            </small>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="inputPrice">Price</label>
        <input name="price" value="<?= $price ?>" step="any" type="number" class="form-control" id="inputPrice">
        <?php if (isset($errors['price'])) : ?>
            <small class="form-text text-error">
                <?= $errors['price'] ?>
            </small>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="inputStock">Stock</label>
        <input name="stock" value="<?= $stock ?>" type="number" class="form-control" id="inputStock">
        <?php if (isset($errors['stock'])) : ?>
            <small class="form-text text-error">
                <?= $errors['stock'] ?>
            </small>
        <?php endif; ?>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="checkVisible" name="isVisible">
        <label class="form-check-label" for="checkVisible">
            Display on website
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Create Product</button>
</form>

<?php require_once '../_footer.php'; ?>
