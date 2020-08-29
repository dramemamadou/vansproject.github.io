<?php
// fonction de sécurisation

  function securiserDatas($dataASecuriser){

    $dataASecuriser = trim($dataASecuriser);//retire les espaces inutiles
    $dataASecuriser = stripslashes($dataASecuriser);//retire les slashes
    // $donneeASecuriser = htmlspecialchars($donneeASecuriser);//traduit les caractères html
    $dataASecuriser = strip_tags($dataASecuriser);// supprime les caractères html

    return $dataASecuriser;
  }
?>
