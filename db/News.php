<?php

class News
{

    public $news;


    public function __construct($arr = NULL)
    {
        if ($arr == NULL) {
            $query = DB::query()->query('select * from test_task.news');
            $this->news = $query->fetchAll();
        } else {
            $this->news = [];
            $query = 'SELECT * FROM test_task.news WHERE id=:id';
            foreach ($arr as $key => $value)
                if (is_int($key)) {
                    $query_p = DB::query()->prepare($query);
                    $query_p->bindValue(':id', $value);
                    $query_p->execute();
                    $this->news[] = $query_p->fetch();
                }
        }
    }

}

