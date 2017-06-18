<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 17/06/17
 * Time: 13:15
 */

namespace Resonance;


/**
 * Interface BeatInterface
 * @package Resonance
 */
interface BeatInterface
{
    /**
     * Channel for publish the music
     * @return mixed
     */
    public function getChannel();

    /**
     * Event for pusblish the music
     * @return mixed
     */
    public function getEvent();

    /**
     * The music
     * @return mixed
     */
    public function getMusic();
}

