<?php

class Model_news extends Model
{
    public function get_all()
    {
        include('connect_bd.php');
        $sql = 'SELECT * FROM news;';
        $data = mysqli_query($dbc, $sql);
        return $data;
        // todo
    }

    public function get_view($id = null)
    {
        include('connect_bd.php');
        $sql = 'SELECT * FROM news WHERE id = ' . $id . ';';
        $data = mysqli_query($dbc, $sql);
        return $data;
        // todo
    }
}
