<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<?php
session_start();
include_once 'FormHelper.php';
include_once 'FileUploader.php';

$FileUploadNameField = "List";
$FileUploadDestinationPath = dirname(__FILE__) . '/uploads/';
$thisPhpScript = $_SERVER['PHP_SELF'];

if (!isset($_POST['token'])) {
    $form1 = new FormHelper("form1", $thisPhpScript, "elegant-aero");
    $form1->Heading("Contact Form", "Please fill in all fields");
    $form1->FileUpload($FileUploadNameField);
    $form1->Submit();
    $form1->Close();
} else {

    $FU = new FileUploader($FileUploadNameField, "Uploaded");
    $FU->MoveFile($FileUploadDestinationPath);
    echo file_get_contents($FU->SavedPath());
}

