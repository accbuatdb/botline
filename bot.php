<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = '4sqTj9fUkQLzAd1JZwOd4QLmCUlNWZryfnQzRninP6CikuccGbi4cZSlvGjVyjP7imFIVKk0v3QaxyhQabcL/wqq66aXqotEsiXUyt38sssIZ120F/S1dZKgiXZ/+Ax2XU8z0l5qK9wmVkkqNJciIQdB04t89/1O/w1cDnyilFU='; //Your Channel Access Token
$channelSecret = '8b9f489b60960c43853fb30ea699cf48';//Your Channel Secret

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId     = $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp  = $client->parseEvents()[0]['timestamp'];
$message    = $client->parseEvents()[0]['message'];
$messageid  = $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
function rudr_instagram_api_curl_connect( $api_url ){
    $connection_c = curl_init(); // initializing
    curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
    curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
    curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
    $json_return = curl_exec( $connection_c ); // connect and get json data
    curl_close( $connection_c ); // close connection
    return json_decode( $json_return ); // decode and return
}
function send($input, $rt){
    $send = array(
        'replyToken' => $rt,
        'messages' => array(
            array(
                'type' => 'text',                   
                'text' => $input
            )
        )
    );
    return($send);
}

function jawabs(){
    $list_jwb = array(
        'Ya',
        'Tidak',
        'Bisa jadi',
        'Mungkin',
        'Tentu tidak',
        'Coba tanya lagi'
        );
    $jaws = array_rand($list_jwb);
    $jawab = $list_jwb[$jaws];
    return($jawab);
}

if($message['type']=='text')
{
    $pesan_datang = strtolower($message['text']);
    $filter = explode(' ', $pesan_datang);
    if($filter[0] == 'apakah')
    {
     $balas = send(jawabs(), $replyToken);       
    }
    else {}
} else {}

if(isset($balas)){
    $client->replyMessage($balas); 
    $result =  json_encode($balas);
    file_put_contents($botname.'.json',$result);
}

if($message['type']=='text')
{
    $user_search = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/search?q=" . $username);
    $username = 'rudrastyh';
    $username = explode(' ', $pesan_datang);
    $pesan_datang = strtolower($message['text']);
    $filter = explode(' ',' ', $pesan_datang);
      if($filter[0] == 'instagram')
    {
        $user_id = $user_search->data[0]->id;
        $balas = send(rudr_instagram_api_curl_connect(), $replyToken); 
    }
}

if($message['type']=='text')
{
    if($pesan_datang=='caption')
    {
        
        
        $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array(
                                        'type' => 'text',                   
                                        'text' => ''
                                    )
                            )
                        );
                
    }
    if($pesan_datang=='key')
    {
        
        
        $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Keyword Support',
        'text' => 'Ketuk opsi untuk memilih keyword',
        'defaultAction' => 
        array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://sclimb-panel.site',
    ),
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'Owner',
        'text' => 'owner',
      ),
      1 => 
      array (
        'type' => 'message',
        'label' => 'Link Login',
        'text' => 'login',
      ),
      2 => 
      array (
        'type' => 'message',
        'label' => 'payment',
        'text' => 'payment',
      ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Keyword Support',
        'text' => 'Ketuk opsi untuk memilih keyword',
        'defaultAction' => 
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/222',
        ),
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Invite Member',
            'text' => 'invit member',
          ),
          1 => 
          array (
            'type' => 'message',
            'label' => 'Event',
            'text' => 'event',
          ),
          2 => 
          array (
            'type' => 'message',
            'label' => 'Claim Event',
            'text' => 'claim',
          ),
         ),
          ),
          2 => 
      array (
        'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Keyword Support',
        'text' => 'Ketuk opsi untuk memilih keyword',
        'defaultAction' => 
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/222',
        ),
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Harga Saldo',
            'text' => 'harga saldo',
          ),
          1 => 
          array (
            'type' => 'message',
            'label' => 'Iuran',
            'text' => 'iuran',
          ),
          2 => 
          array (
            'type' => 'message',
            'label' => 'Caption',
            'text' => 'caption',
         ),
          ),
         ),
         3 => 
      array (
        'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Keyword Support',
        'text' => 'Ketuk opsi untuk memilih keyword',
        'defaultAction' => 
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/222',
        ),
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Peraturan',
            'text' => 'peraturan',
          ),
          1 => 
          array (
            'type' => 'message',
            'label' => 'Lupa Password',
            'text' => 'forget pass',
          ),
          2 => 
          array (
            'type' => 'message',
            'label' => 'Contact OA',
            'text' => 'OA',
          ),
         ),
          ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
                            )
                        );
                
    }
    if($pesan_datang=='owner')
    {
        
        
        $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array (
  'type' => 'template',
  'altText' => 'OWNER Social Climb',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Bayu Chandra',
    'text' => 'Pesan OWNER : Upload Testi yak :V',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://sclimb-panel.site',
    ),
   
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'payment',
        'text' => 'payment',
      ),
    ),
  ),
)
                            )
                        );
    }
    if($pesan_datang=='payment')
    {
        
        $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array (
  'type' => 'template',
  'altText' => 'Keyword Social Climb Panel Support',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'List Payment',
    'text' => 'Untuk Saldo & Setor gunakan payment ini',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://sclimb-panel.site',
    ),
   
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'XL',
        'text' => '0878-2361-1283',
      ),
       1 => 
      array (
        'type' => 'message',
        'label' => 'TELKOMSEL',
        'text' => 'Layanan Telkomsel Sementara Di NON Aktifkan',
      ),
    ),
  ),
)
                            )
                        );
        
    }
    if($pesan_datang=='event')
    {
        
        $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array (
  'type' => 'template',
  'altText' => 'Event Social Climb TOP Panel',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Event',
    'text' => 'Event berlaku permanent',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://sclimb-panel.site',
    ),
   
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'Member Harian',
        'text' => 'member harian',
      ),
       1 => 
      array (
        'type' => 'message',
        'label' => 'Member Permanent',
        'text' => 'member permanent',
      ),
    ),
  ),
)
                            )
                        );
        
    }
    if($pesan_datang=='login')
    {
        
        
        $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array (
  'type' => 'template',
  'altText' => 'Link Login',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'http://sclimb-panel.site/logo.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Link Login Social Climb Top Panel',
    'text' => 'Ketuk "LOGIN" untuk mengakses semua fitur Social Climb TOP Panel',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://sclimb-panel.site',
    ),
    'actions' => 
    array (
      0 => 
      array (
      'type' => 'uri',
      'label' => 'Login',
      'uri' => 'http://sclimb-panel.site',
      ),
    ),
  ),
)
                            )
                        );
    }

}
 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
