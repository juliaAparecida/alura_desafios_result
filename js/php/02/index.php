<?php
$url = ('https://randomuser.me/');
$saida = json_decode(file_get_contents($url));
?>

<ul class="list-group mt-3">
    <?php foreach ($saida['results'] as $key => $user):?>
    <li class="list-group-item">
        <img src="<?= $user['picture']['medium']?>" alt="Photo">
        <h5><?= $user['name']['first']?></h5>
        <p class="m-0"><?= $user['location']['city']?></p>
        <p class="m-0"><?= $user['email']?></p>
    </li>
</ul>
<?php endforeach;?>