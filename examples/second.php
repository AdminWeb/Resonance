<?php
require '../vendor/autoload.php';

use Resonance\Bell;
use Resonance\BeatInterface;

class Soar implements BeatInterface{

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return 'admin';
    }

    /**
     * @return mixed
     */
    public function getMusic()
    {
       return 'Eu to aqui';
    }

    public function getEvent()
    {
        return 'Soar';
    }
}

$bell = new Bell();

$bell->touch(new Soar());