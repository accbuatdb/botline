<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'R/4T0g/FZRw9F67wwGL9TxB8/jE18eP6QAuosrPtgT8HEFzWOnAciZiwujnja3tNimFIVKk0v3QaxyhQabcL/wqq66aXqotEsiXUyt38ssvfTEH1EOFRXk0nqXC7pGHDlYSL1RpyC2+lQPsmc9GoBQdB04t89/1O/w1cDnyilFU='; //Your Channel Access Token
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
                                        'text' => '=== Broadcast By MonsterBot ===
      
         ðŸ’ˆMonster Panel MSMMðŸ’ˆ
 
ðŸ’ˆ Monster Panel :

â€¢ Panel 3in1 MSMM [183 Full Clean]
â€¢ Like Unlimited 10 Server
â€¢ Software API Premium 

          ðŸŒ Fitur Monster Panel ðŸŒ

â€¢ 10 Server Like Unlimited 
   Sumbit 10 link langsung dalam
   Satu web.
â€¢ Unlimited Comment Instagram Real 
  Indo
â€¢ 10 Server Software API Wordwide
   [ All Suplort Foll tertarget ]
â€¢ 6 Server Software API Real Indo
â€¢ View Snap Gram
â€¢ 1 orang 1 akun
â€¢ Request Username Password
â€¢ Masuk Group FH [ PUSAT ]
â€¢ Semua penggunaan fitur tanpa 
  Saldo , Coin,  Point
â€¢ Server Web Cepat
â€¢ All member bisa add member

ðŸ’ˆ Keterangan : 

â€¢ Unlimited Like hanya memerlukan
  Url Link photo
â€¢ Unlimited Comment Instagram
  Hanya memerlukan Url Link photo
â€¢ Penambahan Foll tidak 
  Memerlukan password.
â€¢ Tidak menambah Following
â€¢ Full Tutorial [ VIDEO ]
â€¢ Bisa request fitur ke owner
â€¢ Masuknya Like , Foll , Comment
   Instant prosses ( langsung masuk ) 
â€¢ Unlimited Like real indo gain
  900+ 1x sumbit
â€¢ Unlimited Comment Real Indo 
  gain 200+ dalam 1x sumbit
â€¢ Sumbit Software API berbagai
  Server dalam 1 web

ðŸ’ˆ Fitur Tanpa Jeda :

â€¢ Unlimited Like Real Indo
â€¢ Unlimited Comment Real Indo

ðŸ’ˆ Harga :

ðŸ’° 15 Hari = 20.000
ðŸ’° 30 Hari = 35.000
ðŸ’° 999 Hari = 50.000 [ PROMO ]

Untuk durasi 15,30 dikenakan iuran
Untuk durasi 999 tak dikenakan iuran

ðŸ’ˆ List Test Sumbit :

â€¢ Sumbit Comment Real Indo
â€¢ Sumbit Like Indo [ 3in1  MSMM ]
â€¢ Sumbit Like Unlimited Real Indo
â€¢ Sumbit View Snapgram

Bisa langsung Hubungi OA :

https://line.me/R/ti/p/%40jkj6350h ( fast respown )

Cek Vidio Test Monster Panel dibawah yah'
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
        'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Keyword Support',
        'text' => 'Ketuk opsi untuk memilih keyword',
        'defaultAction' => 
        array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://monsterpanel.xyz',
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
        'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
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
        'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
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
        'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
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
  'altText' => 'OWNER MonsterPanel',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Bayu Chandra',
    'text' => 'Pesan OWNER : Upload Testi yak :V',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://monsterpanel.xyz',
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
  'altText' => 'Keyword Monster Panel Support',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'List Payment',
    'text' => 'Untuk Saldo & Setor gunakan payment ini',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://monsterpanel.xyz',
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
        'text' => '0822-1787-3617',
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
  'altText' => 'Event Monster Panel',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Event',
    'text' => 'Event berlaku permanent',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://monsterpanel.xyz',
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
    'thumbnailImageUrl' => 'https://sclimb-panel.site/logo.JPG',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Link Login Monster Panel',
    'text' => 'Ketuk "LOGIN" untuk mengakses semua fitur Monster Panel',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'View detail',
      'uri' => 'http://monsterpanel.xyz',
    ),
    'actions' => 
    array (
      0 => 
      array (
      'type' => 'uri',
      'label' => 'Login',
      'uri' => 'http://monsterpanel.xyz',
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
