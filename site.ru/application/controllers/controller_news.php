<?php

/**
 * Class Controller_News
 * 
 */
class Controller_News extends Controller
{
    function __construct()
    {
        $this->model = new Model_news();
        $this->view = new View();
    }

    function action_all()
    {
        $data = $this->model->get_all();
        $this->view->generate('all_view.php', 'template_view.php',$data);
    }

    function action_view($id = null)
    {
        $data = $this->model->get_view($id);
        $this->view->generate('id_view.php', 'template_view.php',$data);
    }
}