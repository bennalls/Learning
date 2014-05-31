
<?php

class FileEncryptor {

    private $Plaintext;
    private $NumFullChunks; //Full Chunks are 16 bytes
    private $RemainNumChunks;
    private $LastChunkSize;
    private $FileInput;
    private $FileSize;
    private $FileOutput;
    private $Key;
    private $KeyLength = 16; // 16 byte string (128bit - MD5)
    private $FileInputHandle;
    private $FileOutputHandle;

    public function __construct($InputFilePath, $OutputFilePath, $Password) {
        $this->FileInput = $InputFilePath;
        $this->FileOutput = $OutputFilePath;
        $this->FileSize = filesize($InputFilePath);
        $this->NumFullChunks = $this->FileSize / $this->KeyLength;
        $this->RemainNumChunks = $this->NumFullChunks;
        $this->LastChunkSize = $this->FileSize % $this->KeyLength;
        $this->FileInputHandle = fopen($InputFilePath, "r");
        $this->FileOutputHandle = fopen($OutputFilePath, "w");
        $this->Key = md5($Password); // Initial Key for first chunk
        $this->encrypt();
    }

    private function encrypt() {

        $ChunkLength;

// Encrypt file in Chunks equal to keysize or remaining bytes in file if less.
        while ($this->RemainNumChunks > 0) {
            if ($this->RemainNumChunks > 1) {
                $ChunkLength = $this->KeyLength;
            } else {
                $ChunkLength = $this->LastChunkSize;
            }
            $String = fread($this->FileInputHandle, $ChunkLength);
            $this->EncryptChunk($String, $ChunkLength);
            $this->Key = md5($this->Key);
            $this->RemainNumChunks --;
        }

      
        fclose($this->FileInputHandle);
        fclose($this->FileOutputHandle);
    }

    private function EncryptChunk($Chunk, $ChunkLength) {
        $this->Key = hex2bin($this->Key);
        $Plaintext = $Chunk;
        for ($i = 0; $i < $ChunkLength; $i++) {
            $A = ord($this->Key[$i]);
            $B = ord($Plaintext[$i]);
            $C = chr($A ^ $B);
            fputs($this->FileOutputHandle, $C);
        }
    }

}
