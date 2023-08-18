<?php
include("simple_html_dom.php");
$html = file_get_html('https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm');
// echo $html;
//lấy phần đọc nhiều

echo "đọc nhiều trong giáo dục";
for($i = 0; $i < 3; $i ++){
    $lot = $html->find(".article-lot .article-item",$i);
    // $thumb = $lot->find(".article-title");
    echo $lot;
}
echo "tin liên quan";
for($i = 0; $i < 3; $i ++){
    $related = $html->find('.article-related .article-item',$i);
    // $thumb = $lot->find(".article-title");
    echo $related;
}
echo "đang được quan tâm";
for($i = 0; $i < 3; $i ++){
    $care = $html->find('.article-care .article-item',$i);
    // $thumb = $lot->find(".article-title");
    echo $related;
}
// $html ->load($html ->save());
//     $tieude = $html->find('.article-thumb');
//     $noidung = $html->find('article_title');

// $html = $html->find('.article-lot.line',0);
// var_dump($html);


?>