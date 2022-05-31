<?php

class MailModel{

    private $db;
    
    function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;' . 'dbname=turnofacil;charset=utf8', 'root', '');
    }

    


    private function enviarEmail($nombre, $mail, $asunto, $mensaje){
  
        setlocale(LC_TIME, "spanish");
        $from = "prueba@bpsistemas.com";
        $to = $mail;
        $title = $asunto;
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Congreso Unicen '.$from.''. "\r\n";
    
        $this->load->library('email');
        $config = array(
             'mailtype'  => 'html',
             'charset' => 'utf-8',
             'protocol' => 'smtp',
             'smtp_host' => 'ssl://mail.bpsistemas.com',
             'smtp_user' => 'prueba@bpsistemas.com',
             'smtp_pass' => '123ASDqwe!',
             'smtp_port' => '465',
             'newline' => "\r\n",
    
        );
        $this->email->initialize($config);
    
        $this->email->to($to);
    
        $this->email->from($from, 'Congreso Unicen');
    
        $this->email->subject($title);
        $this->email->message($mensaje);
        $result = $this->email->send();
        //var_dump($this->email->print_debugger());
    
        if($result)
           return true;
        else
           return false;
    }

    private function getBodyContent($title, $body,$header=NULL, $footer=NULL){

        $message =  '<html>
        <head>
          <title>' . $title . '</title>
        </head>
        <body style="background-color:#010440">
          <table width="100%" cellspacing="0" cellpadding="0" align="center">
          <tbody><tr >
          <td align="center" valign="top" >
            <table cellpadding="0" cellspacing="0" style="width:690; border:0 ; background-color:#FFFFFF; margin:auto" width="690">
              <tr><td>
              <img style="margin: auto; width: 90px;" src="'. $header .'">
              </td></tr>
              <tr><td><div style="text-align: right; margin: 10px; font-size:14px; font-family:arial">
                 <p style="font-size: 12px">' . strftime("%d")  . ' de ' . strftime("%B") . ' de ' . strftime("%Y") . '</p>
              </div></td></tr>
              <tr><td style="font-size: 18px;padding:20px; font-family:arial">
                ' . $body. '
              </td></tr>
              <tr><td>
              //  <img style="margin: auto; width: 90px;" src="'. $footer .'">
    
              </td></tr>
              </table></td></tr>
           </table>
        </body>
        </html>';
     
        return  $message;
    
      }

}