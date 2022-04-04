<?php
class InventoryController
{
    public function index()
    {
        $view = new InventoryView();
        $view->display();
    }
}