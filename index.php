<?php
include("simple_html_dom.php");
$html = file_get_html('https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm');
// echo $html;
//lấy phần đọc nhiều

echo "ĐỌC NHIỀU";
echo '<br>';
for($i = 0; $i < 3; $i ++){
    $lot = $html->find(".article-lot .article-item",$i);
    $thumb = $lot->find(".article-thumb img",0)->getAttribute("data-src");
    $title = $lot->find(".article-title a",0)->text();
    $url = $lot->find(".article-title a",0)->getAttribute("href");
    echo "<img src ='".$thumb."'>";
    echo '<br>';
    $url = "https://dantri.com.vn".$url;
    echo "<a href='".$url."' target='_blank'>".$title."</a>";
    echo '<br>';
    // $thumb = $lot->find(".article-title");
    // echo $lot;
}
echo "TIN LIÊN QUAN";
echo '<br>';
for($i = 0; $i < 3; $i ++){
    $related = $html->find('.article-related .article-item',$i);
    // $thumb = $lot->find(".article-title");
    $thumb = $related->find(".article-thumb img",0)->getAttribute("data-src");
    $title = $related->find(".article-title a",0)->text();
    $description = $related->find(".article-excerpt",0)->text;
    $url = $related->find(".article-title a",0)->getAttribute("href");
    echo "<img src ='".$thumb."'>";
    echo '<br>';
    $url = "https://dantri.com.vn".$url;
    echo "<a href='".$url."' target='_blank'>".$title."</a>";
    echo '<br>';
    echo "<p>".$description."</p>";
}
echo "ĐANG ĐƯỢC QUAN TÂM";
for($i = 0; $i < 3; $i ++){
    $care = $html->find('.article-care .article-item',$i);
    // $thumb = $lot->find(".article-title");
    $thumb = $care->find(".article-thumb img",0)->getAttribute("data-src");
    $title = $care->find(".article-title a",0)->text();
    $url = $care->find(".article-title a",0)->getAttribute("href");
    echo "<img src ='".$thumb."'>";
    echo '<br>';
    $url = "https://dantri.com.vn".$url;
    echo "<a href='".$url."' target='_blank'>".$title."</a>";
    echo '<br>';
    echo "<p>".$description."</p>";
}
// $html ->load($html ->save());
//     $tieude = $html->find('.article-thumb');
//     $noidung = $html->find('article_title');

// $html = $html->find('.article-lot.line',0);
// var_dump($html);


?>