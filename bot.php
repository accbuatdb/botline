<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'Hv6SEKmpDbO1Sg1xziKNgEoqluQOir2538+MdipsUd4ZKMWkP3c851694kG4dNkPimFIVKk0v3QaxyhQabcL/wqq66aXqotEsiXUyt38ssv/Wj3LkqjojH+2xcnU6FZcAVbQsgzN3UdIiPpt7T9icwdB04t89/1O/w1cDnyilFU='; //Your Channel Access Token
$channelSecret = '910a38fadb05b2c0036b7ee9b5d3feb2';//Your Channel Secret

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId   = $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp  = $client->parseEvents()[0]['timestamp'];
$message  = $client->parseEvents()[0]['message'];
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
  if($pesan_datang=='/claim')
  {
    
    
    $balas = array(
              'replyToken' => $replyToken,                            
              'messages' => array(
                array(
                    'type' => 'text',         
                    'text' => '🚨 Event Claim 🚨

📱 Hubungi Official Account Center 
📨 https://line.me/R/ti/p/%40jkj6350h

NB : Event Durasi Member Hanya Bisa Di Claim Saat Hari Tersebut'
                  )
              )
            );
        
  }

if($message['type']=='text')
{
  if($pesan_datang=='/memevent')
  {
    
    
    $balas = array(
              'replyToken' => $replyToken,                            
              'messages' => array(
                array(
                    'type' => 'text',         
                    'text' => '🚨 Member Event 🚨

Event Durasi :

⏩ Invite 1 member : 1  Hari
⏩ Invite 5 member : 7  Hari
⏩ Invite 10 member : 15 Hari

Event  UP Resseler :

⏩ Mendaftarkan member dengan  total Pembelian 100.000  ( penghitungan tidak di reset )

Setiap Pukul 00.00 penghitungan invite member di reset ( Claim Event Saat Hari Tersebut ) '
                  )
              )
            );
        
  }

if($message['type']=='text')
{
  if($pesan_datang=='/invmember')
  {
    
    
    $balas = array(
              'replyToken' => $replyToken,                            
              'messages' => array(
                array(
                    'type' => 'text',         
                    'text' => '🚨 Invite Member 🚨

⏩ Member 1 Hari = 3.000,-
⏩ Member 3 Hari = 7.000,-
⏩ Member 7 Hari = 12.000,-
⏩ Member 14 Hari = 20.000,-
⏩ Member 30 Hari = 30.000,-

Setelah Membayar Biaya Pendaftaran Member Buat Album di Note dengan format

Member // namauser
Contoh : Member // adminsclimb'
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
  'altText' => 'Key Support Social Climb',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
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
        'label' => 'CEO & Founder',
        'text' => '/ceosclimb',
      ),
      1 => 
      array (
        'type' => 'message',
        'label' => 'Link Login',
        'text' => '/login',
      ),
      2 => 
      array (
        'type' => 'message',
        'label' => 'payment',
        'text' => '/payment',
      ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
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
            'label' => 'Invite Member',
            'text' => '/invmember',
          ),
          1 => 
          array (
            'type' => 'message',
            'label' => 'Event',
            'text' => '/event',
          ),
          2 => 
          array (
            'type' => 'message',
            'label' => 'Claim Event',
            'text' => '/claim',
          ),
         ),
          ),
          2 => 
      array (
        'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
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
            'label' => 'Harga Saldo',
            'text' => '/pricedo',
          ),
          1 => 
          array (
            'type' => 'message',
            'label' => 'Iuran',
            'text' => '/iuran',
          ),
          2 => 
          array (
            'type' => 'message',
            'label' => 'Caption',
            'text' => '/caption',
         ),
          ),
         ),
         3 => 
      array (
        'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
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
            'label' => 'The Rule',
            'text' => '/rules',
          ),
          1 => 
          array (
            'type' => 'message',
            'label' => 'Lupa Password',
            'text' => '/forgetpass',
          ),
          2 => 
          array (
            'type' => 'message',
            'label' => 'Contact OA',
            'text' => '/oacenter',
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
  if($pesan_datang=='/ceosclimb')
  {
    
    
    $balas = array(
              'replyToken' => $replyToken,                            
              'messages' => array(
                array (
  'type' => 'template',
  'altText' => 'OWNER Social Climb Panel',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'CEO : @ridwan_sch12',
    'text' => 'Untuk Patner Bisnis Hubungi Email Di Bawah',
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
        'label' => 'Contact Email',
        'text' => '/businessemail',
      ),
    ),
  ),
)
              )
            );
  }
  if($pesan_datang=='/payment')
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
    'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'List Payment',
    'text' => 'Untuk Saldo & Penyetoran gunakan payment di bawah ini',
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
        'text' => '0877-2289-0150',
      ),
       1 => 
      array (
        'type' => 'message',
        'label' => 'TELKOMSEL (NONAKTIF)',
        'text' => 'Layanan Sementara Dimatikan',
      ),
    ),
  ),
)
              )
            );
      
  }
  if($pesan_datang=='/event')
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
    'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
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
        'label' => 'Member Event',
        'text' => '/memevent',
      ),
       1 => 
      array (
        'type' => 'message',
        'label' => 'Reseller Event',
        'text' => '/ressevent',
      ),
    ),
  ),
)
              )
            );
      
  }
if($pesan_datang=='/login')
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
    'thumbnailImageUrl' => 'https://httpsimage.com/v2/863a7e3f-1dab-4a75-9a85-0fb1c9867eb9.jpe',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Link Login SClimb Panel',
    'text' => 'Ketuk "LOGIN" untuk mengakses semua fitur Social Climb Panel',
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
