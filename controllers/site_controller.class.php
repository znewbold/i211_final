<?php

class SiteController
{
    public function index()
    {
        $view = new HomeView();
        $view->display();
    }
}