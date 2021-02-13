<?php
class News extends Database{
    
    public function getNews($from, $to) {
        
        return  $this->getAllDb("SELECT * FROM news WHERE status = '1' LIMIT $from, $to");

    }
    
    public function getNewsLink($news_id) {
        $res = $this->getOneDb("SELECT alias FROM url_alias WHERE url = 'news_id=$news_id'");
        if(isset($res['alias']) && $res['alias']){
            return $res['alias'];
        }
        else{
            return '#';
        }
    }
    
    public function getOneNews($news_id) {
        return $this->getOneDb("SELECT * FROM news WHERE id = $news_id");
    }
}



