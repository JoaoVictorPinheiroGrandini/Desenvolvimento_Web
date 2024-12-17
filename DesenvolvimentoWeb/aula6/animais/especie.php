<?php
    $animais = array(
        "M" => array("Homo sapiens sapiens", "Canis lupus familiaris", "Felis catus domesticus"),
        "A" => array(" Balaeniceps rex", "Anodorhynchus hyacinthinus", "Melopsittacus undulatus"),
        "B" => array("Lactobacillus", "Escherichia coli", " Mycobacterium tuberculosis")
    );
 
    if(!(empty($_POST["animal"]))){
        echo json_encode($animais[$_POST["animal"]]);
    }
?>