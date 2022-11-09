<?php

class News
{

    public static function getNewsItemById($id)
    {

        $id = intval($id);

        if ($id) {

            // Запрос к БД        
            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();
            return $newsItem;
        }
    }

    public static function getNewsList()
    {
        // Запрсос к БД
        $db = Db::getConnection();

        $newslist = array();

        $result = $db->query('SELECT id, title, date, short_content '
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $newslist[$i]['id'] = $row['id'];
            $newslist[$i]['title'] = $row['title'];
            $newslist[$i]['date'] = $row['date'];
            $newslist[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newslist;       
    }
}
