 <?php
  

function send_LINE($msg){
 $access_token = '8M37lIqLTD/uBPFUFe9UWVnnBsnpMLQcHU+KLSFSrTnGohlQ5Ntig62piP6A4KRPSHBMAXvswen2VzLPWcWwUWdGMX2UTRcmUfszgoIoI3wQfaTlQhdxwV7sO6jq4v3hVYKYKgiPo0C5bPJhrx3yPQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        //'to' => 'Uac04d1fab5cf8227f91631360badb121',
       'to' => 'puntip2019',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
