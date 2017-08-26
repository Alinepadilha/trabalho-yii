<?php
/* @var $this yii\web\View */
?>
<h1>Lista de Produtos</h1>


<div class="col-md-4">
    <img src="<?php echo $produto->image ?>" class="img-responsive" />
    <h2><?php echo $produto->model ?></h2>
    <h3>R$ <?php echo number_format($produto->price,2,',','.'); ?></h3>
    <a href="index.php?r=product/view&id=<?php echo $produto->id?>">
        Ver Produto
    </a>
    <p><?php echo $produto->quantity ?></p>
    <p><?php echo $produto->date_available ?></p>
    <p><?php echo $produto->weight ?></p>
    <p><?php echo $produto->date_added ?></p>
    
    <?php    echo $produto->viewd ?>
            
    
</div>
