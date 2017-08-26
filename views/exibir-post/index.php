<?php
/* @var $this yii\web\View */
?>
<h1>Exibir post</h1>

<?php foreach ($exibirPost as $key => $post):?>
<div class="col-md-4">
    <h2><?php echo $post->title ?></h2>
    <p><?php echo $post->description ?> </p>
    
    
    
</div>


<?php endforeach; ?>
