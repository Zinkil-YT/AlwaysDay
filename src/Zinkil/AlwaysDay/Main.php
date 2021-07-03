<?php

/*

███████╗ ██╗ ███╗  ██╗ ██╗  ██╗ ██╗ ██╗
╚════██║ ██║ ████╗ ██║ ██║ ██╔╝ ██║ ██║
  ███╔═╝ ██║ ██╔██╗██║ █████═╝  ██║ ██║
██╔══╝   ██║ ██║╚████║ ██╔═██╗  ██║ ██║
███████╗ ██║ ██║ ╚███║ ██║ ╚██╗ ██║ ███████╗
╚══════╝ ╚═╝ ╚═╝  ╚══╝ ╚═╝  ╚═╝ ╚═╝ ╚══════╝

CopyRight : Zinkil-YT :)
Github : https://github.com/Zinkil-YT
Youtube : https://www.youtube.com/channel/UCW1PI028SEe2wi65w3FYCzg
Discord Account : Zinkil#2006
Discord Server : https://discord.gg/2zt7P5EUuN

 */

declare(strict_types=1);

namespace Zinkil\AlwaysDay;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\EventPacket;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use Zinkil\AlwaysDay\Tasks\SetDayTask;

class Main extends PluginBase{

    private static $instance;

    public function onEnable(): void{

        self::$instance = $this;

        $this->setTasks();
    }

    public static function getInstance(): Main{
        return self::$instance;
    }

    public function setTasks(){
        $this->getScheduler()->scheduleRepeatingTask(new SetDayTask($this), 20);
    }
}
