<?php
set_time_limit(0);

include 'libs/Curl/CaseInsensitiveArray.php'; 
include 'libs/Curl/Curl.php'; 
include 'libs/Curl/MultiCurl.php';

include 'libs/DiDom/Document.php';
include 'libs/DiDom/Query.php';
include 'libs/DiDom/Element.php';

include 'libs/medoo.php';

use \Curl\Curl;
use \DiDom\Document;
use \DiDom\Query;
use \DiDom\Element;

define('BASE_URL','http://cafef.vn');

// Initialize
// $database = new medoo([
//     'database_type' => 'mysql',
//     'database_name' => ' id9544152_dbwebbank',
//     'server' => 'localhost:8081',
//     'username' => 'root',
//     'password' => '',
//     'charset' => 'utf8'
// ]);

$root = 'http://cafef.vn/tai-chinh-ngan-hang.chn';

if(get_data($root,$content)){
    save_all_post($content);
}else{
    echo 'Cannot get data for this page ' . PHP_EOL;
}

function save_all_post($html){
    $dom = new Document();
    $dom->load($html);
    
    $block = $dom->find('ul[id=LoadListNewsCat]')[0];
    
    $newsItems = $block->find('li[class^=tlitem]');
    
    if(isset($newsItems) && count($newsItems) > 1){
            for($i = 1; $i < count($newsItems); ++$i){
            echo $newsItems[$i];
            $newsItem = $newsItems[$i];
            //echo $newsItem;
            $title = $newsItem->find('h3')[0]->find('a')[0]->getAttribute('title');
            //echo $title;
            $thumb = $newsItem->find('a[class^=avatar]')[0]->find('img')[0]->getAttribute('src');
            //echo $thumb;
            $link = BASE_URL . $newsItem->find('a[class^=avatar]')[0]->getAttribute('href');
            //echo $link;
            //$time = $newsItem->find('div[class=knswli-right]')[0]->find('p[class=time_cate]')[0]->find('span[class=time]')[0]->getAttribute('title');
            //echo $time;
            $content = get_content($link);
            //echo $content;

            // $post = array();  
            // $post['post_title'] = $title;
            // $post['post_thumb']  = $thumb;
            // $post['post_link'] = $link;
            // //$post['post_time'] = $time;
            // $post['post_content'] = $content;
            
            // insert_post($post); 
            
//            echo 'time: '.$time.' thumb: '.$thumb.' title: '.$title.' link: '.$link.'<br />';
//            echo 'content: '. htmlspecialchars($content);
        }
    }
    
    
    
}

function insert_post($post){
    $title = $post['post_title'];
    $thumb = $post['post_thumb'];
    $link = $post['post_link'];
    //$time = $post['post_time'];
    $content = $post['post_content'];
    
    $sql = "INSERT INTO tbl_tin_tuc (tieu_de, anh_minh_hoa, link, noi_dung)".
     " SELECT '$title', '$thumb', '$link',:html FROM DUAL".
     " WHERE NOT EXISTS (SELECT * FROM tbl_tin_tuc".
     " WHERE link = '$link') LIMIT 1";
     
    //echo $sql;
    
    global $database;
    
    $sth = $database->pdo->prepare($sql); 
    $sth->bindValue(':html', $content, PDO::PARAM_STR);
    $sth->execute();
    
    $data = $database->query("SELECT * FROM tbl_tin_tuc WHERE link = '$link'")->fetch();
    
    return $data;
}


function get_content($link){
    if(get_data($link, $content)){
         $dom = new Document();
         $dom->load($content);
         
         $html = $dom->find('div[class^=top5_news]')[0]->html();
         return $html; 
    }
    
    return '';
}



function get_data($link , &$content){
    $curl = new Curl();
    
    echo 'Start craw: ' .$link.PHP_EOL;
    
    $curl->setTimeout(60);
    $curl->setConnectTimeout(60);
    
    $curl->get($link);
    
    $error = $curl->error;
    
    if(!$error){
        $content = $curl->response;
        echo 'End craw: ' .$link.' Sucess !!!'.PHP_EOL;
    }else{
        echo 'End craw: ' .$link.' Failt !!!'.PHP_EOL;
    }
    
    $curl->close();
    
    return !$error;
}


?>