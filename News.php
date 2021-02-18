<?php
namespace App\Models;

use App\Services\Database;

class News
{
    /**
     * @var Database
     */
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @param int $from
     * @param int $to
     *
     * @return array
     */

    public function getNews(int $from = 0, int $to = 20): array
    {
        return  $this->database->getAllDb("SELECT * FROM news LIMIT $from, $to");
    }
    
    public function getOneNews($id) {
        return $this->database->getOneDb("SELECT * FROM news WHERE id = $id");
    }
    public function updateNewsOne($id, $news_name, $short_description, $full_description) {
        return $this->database->updateToDb("UPDATE news SET news_name = '" . $news_name . "', short_description = '" . $short_description . "', full_description = '" . $full_description . "', date = '" . now() . "' WHERE id = '" . $id . "'");
    }

    public function addNewsOne($news_name, $short_description,  $full_description) {
        return $this->database->insertToDb("INSERT INTO news SET news_name = '" . $news_name . "', short_description = '" . $short_description . "', full_description = '" . $full_description . "', date = '" . now() . "' ");
    }

    public function delNewsOne($id) {
        return $this->database->deleteFromDb("DELETE FROM news WHERE id = '" . $id . "'");
    }
}



