<?php

namespace interconnected\ic;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine

class Main extends PluginBaseBase implements Listener {
    public function onEnable() {
        $this->getLogger()->("Enabled Interconnected v1.");
    }

    public function onChat(PlayerChatEvent $event) {

    }

}

?>
