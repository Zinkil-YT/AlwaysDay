<?php

declare(strict_types = 1);

namespace Zinkil\AlwaysDay\Tasks;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\scheduler\Task;
use Zinkil\AlwaysDay\Loader;

class SetDayTask extends Task{
	
	public function __construct(Loader $plugin){
		$this->plugin = $plugin;
	}
	public function onRun(int $currentTick) : void{
		foreach($this->plugin->getServer()->getWorld() as $world){
			$level->setTime(0);
			$level->stopTime();
		}
	}
}
