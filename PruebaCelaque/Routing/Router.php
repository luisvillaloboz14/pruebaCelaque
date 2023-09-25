<?php
    namespace Routing;
    class Router
    {
        public function __construct()
        {
            $page = new \App\Controllers\PruebaController();
            $page->index();
        }
    }
?>