<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: PeiLei
 * Date: 01/02/2017
 * Time: 11:06 AM
 */
class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    function index() {
        // echo "this is working!";

        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);

        $this->data = array_merge($this->data, $record);

        $this->render();


    }

    function zzz() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}