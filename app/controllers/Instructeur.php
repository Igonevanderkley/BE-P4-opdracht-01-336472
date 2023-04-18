<?php

class Instructeur extends BaseController
{


    public function index()

    {
        $data = [
            'title' => 'Het werkt!'
        ];

        $this->view('instructeur/index', $data);
    }
}
