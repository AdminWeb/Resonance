<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 17/06/17
 * Time: 13:15
 */

namespace Resonance;


use Predis\Client;

/**
 * Class Bell
 * @package Resonance
 */
class Bell
{
    private $client = null;

    /**
     * Bell constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param BeatInterface $beat
     */
    public function touch(BeatInterface $beat){
        $band['event'] = $beat->getEvent();
        $band['music'] = $beat->getMusic();
        $this->client->publish($beat->getChannel(), json_encode($band));
    }
}

