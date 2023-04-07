<?php
header("Access-Control-Allow-Origin: *");

$medicine = array(
    array(
        "brand" => "Robitussin",
        "treatment" => "Cough",
        "generic"=> "Guaifenesin",
        "manufacturer"=> "Gsk Consumer Healthcare",
        "formulation"=> "Syrup",
        "dosage" => array("Dose1" => "100mg", "Dose2" => "50mg", "Dose3" => "25mg","Dose4" => "10mg"),
        "image" => "https://gfjules.com/wp-content/uploads/2011/10/Max-strength-robitussin.bmp"
    ),

    array(
        "brand" => "Biogesic",
        "treatment" => "Fever",
        "generic"=> "Paracetamol",
        "manufacturer"=> "Unilab",
        "formulation" => "Tablet",
        "dosage" => array("Dose1" => "500mg", "Dose2" => "250mg", "Dose3" => "100mg", "Dose4" => "50mg"),
        "image" => "https://ph-live-01.slatic.net/p/203c984ba51d8e8b6621fc1b1c6174c3.jpg"
    ),

    array(
        "brand" => "Advil",
        "treatment" => "Headache",
        "generic"=> "Ibuprofen",
        "manufacturer"=> "Wyeth Pharmaeuticals Company",
        "formulation"=>"Tablet",
        "dosage" => array("Dose1" => "800mg", "Dose2" => "400mg", "Dose3" => "200mg", "Dose4" => "100mg"),
        "image" => "https://images.wagwalkingweb.com/media/articles/dog/advil-poisoning/advil-poisoning.jpg"
    ),

    array(
        "brand" => "Tylenol",
        "treatment" => "Toothache",
        "generic"=> "Acetaminophen",
        "manufacturer"=> "Johnson & Johnson ",
        "formulation"=> "Coated Tablet",
        "dosage" => array("Dose1" => "500mg", "Dose2" => "250mg", "Dose3" => "100mg", "Dose4" => "50mg"),
        "image" => "https://api.time.com/wp-content/uploads/2014/07/tylenol-overdose.jpg?quality=85&w=4256"
    ),

    array(
        "brand" => "Buscopan",
        "treatment" => "Stomachache",
        "generic"=> "Hyoscine Butylbromide",
        "manufacturer"=> "Boehringer-Ingelheim",
        "formulation" => "Tablet",
        "dosage" => array("Dose1" => "40mg", "Dose2" => "20mg", "Dose3" => "10mg", "Dose4" => "5mg"),
        "image" => "https://detommasis.it/image/cache/catalog/product/h0000410-429x547.png"
    ),
);

echo json_encode(array("medicine" => $medicine));
?>