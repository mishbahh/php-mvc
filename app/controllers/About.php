<?php

class About
{

    public function index($nama = 'Mishbah', $pekerjaan = 'Programmer', $umur = 26)
    {
        $this->view('about/index');
    }
    public function page()
    {
        echo 'About/page';
    }
}
