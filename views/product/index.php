<?php
/* @var $this yii\web\View */
?>
<h1>Lista de Produtos</h1>

<?php foreach ($produtos as $key => $produto):?>
<div class="col-md-4">
    <img src="<?php echo $produto->image ?>" class="img-responsive" />
    <h2><?php echo $produto->model ?></h2>
    <h3>R$ <?php echo number_format($produto->price,2,',','.'); ?></h3>
    <a href="index.php?r=product/view&id=<?php echo $produto->id?>">
        Ver Produto
    </a>
    
    
</div>


<?php endforeach; ?>


