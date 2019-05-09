<?php
include './libs/medoo.php';

include './libs/Curl/CaseInsensitiveArray.php';
include './libs/Curl/Curl.php';
include './libs/Curl/MultiCurl.php';

include './libs/DiDom/Document.php';
include './libs/DiDom/Element.php';
include './libs/DiDom/Query.php';


use Curl\Curl;

use DiDom\Document;
use DiDom\Element;
$tennganhang = $_POST['txtTenNganHang'];

define('BASE_URL','https://www.laisuatnganhang.com.vn/');

define('Name_Bank',$tennganhang);
//$id = $_POST['txtID'];
$link = $_POST['txtLink'];

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'db_web_homestay',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);

$url = $link;

if(get_data($url, $content)){
    get_interest_bank($content);
}else{
    echo 'Cannot get data for this page !!!!'.PHP_EOL;;
}

function get_interest_bank($content){
    //$name ="";
    $dom = new Document();
    $dom->load($content);
    $item_chapters = $dom->find('div[id=bang1]')[0]->find('table[id=guibank]')[0]->find('thead')[0]->find('tr')[0]->find('th');
    $item_chapters1 = $dom->find('div[id=bang1]')[0]->find('table[id=guibank]')[0]->find('tbody')[0]->find('tr')[0]->find('td');
    $item_chapters3 = $dom->find('div[class=date]')[0]->find('p')[0]->text();
    if(isset($item_chapters) && count($item_chapters) > 0){
        for($i = 1; $i < count($item_chapters);++$i){
            //echo $item_chapters[$i];
            $item_chapter = $item_chapters[$i];
            $item_chapter1 = $item_chapters1[$i];

            //$name_banks = $item_chapter1->find('a')[0]->find('img')[0]->getAttribute('src');
            //echo $name_banks;
            
            $name_interest_banks = $item_chapter->text();
            //echo  $name_interest_banks;
            $name_banks = Name_Bank;
            $values = $item_chapter1->text();
            //echo $values;
        

            $date = $item_chapters3;

            $bank = array();
            $bank['ten_ngan_hang'] = $name_banks;
            $bank['ten_lai_suat'] = $name_interest_banks; 
            $bank['gia_tri'] = $values; 
            $bank['ngay_nhap_lai']= $date;
            insert_interest_bank($bank);
        }
    }
}
function insert_interest_bank($bank){
    $name_bank = $bank['ten_ngan_hang'];
    $name_interest = $bank['ten_lai_suat'];
    $value_interest = $bank['gia_tri']; 
    $date_import_interest = $bank['ngay_nhap_lai'];
    //var_dump($bank);
     $sql = "INSERT INTO tbl_lai_suat_tiet_kiem(ten_ngan_hang,ten_lai_suat,gia_tri,ngay_nhap_lai)".
      " SELECT '$name_bank', '$name_interest','$value_interest','$date_import_interest' FROM DUAL";

      //var_dump($sql);
      global $database;
    
      $database->query($sql);
      
    //   $data = $database->query("SELECT * FROM tbl_ngan_hang WHERE link = '$link'")->fetch();
        
    //   return $data;
    //save_interest($id,$content);
      
}

function download_file($url, $path){
    $curl = new Curl();
    
    echo 'Start download: ' .$url.PHP_EOL;
    
    $curl->setConnectTimeout(60);
    $curl->setTimeout(60);
    
    $re = $curl->download($url, $path);
    
    if($re){
        echo 'End download: ' .$url . ' Sucess !!!' .PHP_EOL;
    }else{
        echo 'End download: ' .$url . ' Failt !!!' .PHP_EOL;
    }
    
    $curl->close();
}

function get_data($url, &$content){
    $curl = new Curl();
    
    echo 'Start craw: ' .$url.PHP_EOL;
    
    $curl->setConnectTimeout(60);
    $curl->setTimeout(60);
    
    $curl->get($url);
    
    if(!$curl->error){
        $content = $curl->response;
        echo 'End craw: ' .$url.' Success !!!'.PHP_EOL;
    }else{
        echo 'End craw: ' .$url.' Failt!!!'.PHP_EOL;
    }
    
    $curl->close();
    
    return !$curl->error;
}
?>