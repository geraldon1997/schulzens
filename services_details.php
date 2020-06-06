<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/slider.php' ?>
<style>
    .details-img img{
        height: 500px;
    }
</style>
<?php require_once 'services/'.$_SERVER['QUERY_STRING'].'.php' ?>

<?php require_once 'layout/footer.php';
