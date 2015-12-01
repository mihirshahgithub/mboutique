<div class="header">
    <img class="logo" src="logo.png" alt="Mboutique Logo">
    <?php

    $menuArray= [
        'welcome'=>['text'=>'Welcome','url'=>'index.html','default'=>true],
        'macarons'=>['text'=>'Our Macarons','url'=>'our_macarons.html'],
        'gifts'=>['text'=>'Gifts & Parties','url'=>'gifts_parties.html'],
        'contact'=>['text'=>'Contact','url'=>'contact.php']
    ];
    ?>
    <ul id="nav">
        <?php

        foreach ($menuArray as $keys=>$values) {
            ?>

        <li><a href="index.php?page=<?=$keys;?>"><?=$values['text']?></a></li>
        <?php
        }
?>


    </ul>
</div>

