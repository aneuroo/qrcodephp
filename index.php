<?php

    include('phpqrcode/qrlib.php');
    include('config.php');

    $url = "https://guttercrest.co.uk/newsletteremails/getQRCode.php?source=1";
    $user = "guttertest";
    $tempDir = EXAMPLE_TMP_SERVERPATH;
    $fileName = $user.'.png';
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = EXAMPLE_TMP_URLRELPATH.$fileName;        
    $codeText = 'DEMO - '.$url;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeText, $pngAbsoluteFilePath);
        echo 'File generated!';
        echo '<hr />';
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    
    echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying
    echo '<img src="'.$urlRelativeFilePath.'" />';
    