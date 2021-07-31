<?php include('./dados/dados.php');?>
<section>
  <h2>Produtos</h2>
  <div>
    <?php foreach($produtos as $produto) : ?>
    <div>
      <div>
        <img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>">
      </div>
      <h3><?=$produto['nome']?></h3>
      <p><span>R$ </span><?=$produto['preco']?></p>
      <a href="<?=$BASE_URL.'produto.php?id='.$produto['id']?>">SAIBA MAIS</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>