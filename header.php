<div class="header">
    <img class="logo" src="logo.png" alt="Mboutique Logo">
    <?php

    $mArray= [
        'welcome'=>['text'=>'Welcome','url'=>'index.html','default'=>true],
        'macarons'=>['text'=>'Our Macarons','url'=>'our_macarons.html'],
        'gifts'=>['text'=>'Gifts & Parties','url'=>'gifts_parties.html'],
        'contact'=>['text'=>'Contact','url'=>'contact.html']
    ];
    ?>
    <ul id="nav">
        <?php

        foreach ($mArray as $keys=>$values) {
            print("<li>".$values['text']."</li>");

        }
        ?>
    </ul>
</div>

