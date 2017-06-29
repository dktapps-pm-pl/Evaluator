<?php

declare(strict_types=1);

namespace dktapps\Evaluator;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{
	
	public function onEnable(){

	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
			case "eval":
				eval(implode(" ", $args));
				return true;
			default:
				return false;
		}
	}
}