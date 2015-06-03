<?php

class engineIRBIS64 {

    var $login              = "irbisoft";
    var $pass               = "9f9@7Nuq";
    var $host               = "192.168.9.20";
    var $port               = "80";
    var $idBrowserClient    = "37331";

    var $answer;
    var $reqCounter = 0;

    function engineIRBIS64()
    {


    }

    function connectToIRBIS64($bdname)
    {
        $query = "A\r\nC\r\nA\r\n". $this->idBrowserClient. "\r\n". $this->reqCounter++. "\r\n.". $this->login. "\r\n".
                    $this->pass. "\r\n\r\n\r\n\r\n". $this->login. "\r\n". $this->pass. "\r\nIRBIS_END_REQUEST";
        $this->sendQuery($query);
    }

    function disconnectFromIRBIS64($bdname)
    {
        $query = "B\r\nC\r\nB\r\n". $this->idBrowserClient. "\r\n". $this->reqCounter. "\r\n". $this->login. "\r\n".
                    $this->pass. "\r\n\r\n\r\n\r\n". $this->login. "\r\nIRBIS_END_REQUEST";
        $this->sendQuery($query);
        $this->reqCounter = 0;
    }

    function sendQuery($query)
    {
        $connToIRBIS = fsockopen($this->host, $this->port, $errno, $errstr, 1);
        if (!$connToIRBIS) {
            echo "$errstr ($errno)<br />\n";
        }
        else
        {
            $out  = "POST /cgi-bin/irbis64r_91/WebToIrbisServer.exe HTTP/1.1\r\n";
            $out .= "User-Agent: GPNTB/Irbis64\r\n";
            $out .= "Host: ". $this->host. "\r\n";
            $out .= "Accept: *.*\r\n";
            $out .= "Content-length: ". (strlen($query)). "\r\n\r\n";
            $out .= $query;

            fwrite($connToIRBIS, $out);
            $this->reciveAnswer($connToIRBIS);
            fclose($connToIRBIS);
        }
    }

    private function reciveAnswer($connToIRBIS)
    {
        unset($this->answer);
        while (!feof($connToIRBIS))
        {
             $this->answer .= fgets($connToIRBIS, 1024);
        }
    }

}