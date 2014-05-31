<?php

class FormHelper {

    private $FormOpen;
    private $FormName;
    private $FormId;
    private $Action;
    private $TextValue;
    private $ClassName;

    public function __construct($FormId, $Action, $ClassName = FALSE) {
        $this->FormId = "<form id=\"" . $FormId . "\" ";
        $this->FormName = $FormId;
        $this->Action = "action = \"" . $Action . "\" ";
        if ($ClassName) {
            $this->ClassName = "class=\"" . $ClassName . "\"";
        } else {
            $this->ClassName = "";
        }
        $this->Open();
    }

    //Create Form Token
    public function FormToken() {
        $token = md5(mt_rand() . microtime());
        $_SESSION[$this->FormName . '_token'] = $token;
        echo "<input type =\"hidden\" name=\"token\" value=\"" . $token . "\">";
    }

    //Form Header
    public function Open() {
        $this->FormOpen = $this->FormId . $this->ClassName . $this->Action;
        $this->FormOpen .= "method=\"post\" enctype=\"multipart/form-data\">";
        echo $this->FormOpen;
        $this->FormToken();
    }

    //Form Heading
    public function Heading($heading1, $heading2 = "") {
        echo "<h1>" . $heading1 . "<span>" . $heading2 . "</span></h1>";
    }

    //End Form
    public function Close() {
        echo "</form>";
    }

    //Include div wrapper open
    public function DivOpen($IncludeDivs) {
        if ($IncludeDivs) {
            echo "<div>";
        }
    }

    //Include div wrapper close
    public function DivClose($IncludeDivs) {
        if ($IncludeDivs) {
            echo "</div>";
        }
    }

    // Include text box element
    public function Text($FieldName, $Label = false, $Value = false, $IncludeDivs = TRUE) {

        $this->DivOpen($IncludeDivs);
        if ($Value) {
            $TextValue = "value=\"" . $Value . "\"";
        } else {
            $TextValue = "";
        }
        if ($Label) {
            echo "<label for=\"" . $FieldName . "\">" . $Label . "</label>";
        }
        echo "<input type=\"text\" name=\"" . $FieldName . "\"" . $TextValue . ">";
        $this->DivClose($IncludeDivs);
    }

    // Include Select Box element
    public function Select($array, $FieldName, $Label = false, $IncludeDivs = TRUE) {
        $this->DivOpen($IncludeDivs);

        if ($Label) {
            echo "<label for=\"" . $FieldName . "\">" . $Label . "</label>";
        }
        echo "<select name=\"" . $FieldName . "\">";
        foreach ($array as $key => $value) {
            echo "<option value=\"" . $key . "\">" . $value . "</option>";
        }
        echo "</select>";
        $this->DivClose($IncludeDivs);
    }

    // Include File Upload Element {Need to add file type, size, multiple attributes}
    public function FileUpload($FieldName, $Label = false, $IncludeDivs = TRUE) {
        $this->DivOpen($IncludeDivs);

        if ($Label) {
            echo "<label for=\"" . $FieldName . "\">" . $Label . "</label>";
        }
        echo "<input type=\"file\" name=\"" . $FieldName . "\">";

        $this->DivClose($IncludeDivs);
    }

    // Submit Button
    public function Submit($Label = "Submit", $IncludeDivs = TRUE) {
        $this->DivOpen($IncludeDivs);

        echo "<input type=\"submit\" value=\"" . $Label . "\">";

        $this->DivClose($IncludeDivs);
    }

}

// Form opening / Header
//  hidden form id
//  Options to exclude Divs
//  Input Sanitisation
//  Can FormHelper accept class rather than so many parameters in each method?