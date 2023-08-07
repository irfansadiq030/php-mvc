<?php


class App
{
    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'home';
        return $URL = explode('/', $URL);
        return show($URL);
    }

    public function loadController()
    {
        $URL = $this->splitURL();
        $filename = "../controllers/" . ucfirst($URL[0]) . '.php';

        if (file_exists($filename)) {
            require_once($filename);
        } else {
            $filename = "../controllers/_404.php";
            require $filename;
        }
    }
}
