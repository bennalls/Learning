<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FileUploader {

    private $DestinationPath;
    private $FileName;
    private $FullDestinationPath;
    private $ReqFileType = FALSE; //Currently Unused
    private $MaxFileSize = FALSE; //Currently Unused
    private $EnableErrorReporting = TRUE; //currently unused
    private $TempFile;

    public function __construct($FormInputName, $FileSaveName = FALSE) {
        if ($FileSaveName != FALSE) {
            $this->FileName = $FileSaveName;
        } else {
            $this->FileName = $this->RandomFileName();
        }

        $this->TempFile = $_FILES[$FormInputName]['tmp_name'];
        echo "<br />";
    }

    // Return Saved File Path
    public function SavedPath() {
        return $this->FullDestinationPath;
    }

    private function RandomFileName() {
        $randString = substr(md5(time()), 0, 8);
        $name = date("y.m.d") . '.' . $randString;
        return $name;
    }

    //Move File to Upload Destination
    public function MoveFile($DestinationPath) {
        //Check file was POSTED
        if (is_uploaded_file($this->TempFile)) {
            $this->DestinationPath = $DestinationPath;
            $this->FullDestinationPath = $this->DestinationPath . $this->FileName;
            $result = move_uploaded_file($this->TempFile, $this->FullDestinationPath);
            if ($result == 1) {
                return 1;
            }
        }
    }

    //Check File Type
    //Error Checking - Should display generic message - detail to log.
    // Uploading multiple files????? - Set number of files????
}
