<?php

class NewsController
{
    public function actionIndex()
    {
        echo '<br>Список новостей';
        return true;
    }
    
    public function actionView($category, $id)
    {
        echo 'Просмотр оной новости';
        return true;
    }
}
