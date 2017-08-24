<?php

declare(strict_types=1);

namespace dktapps\Evaluator;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if($command->getName() === "eval"){
			eval(implode(" ", $args));

			return true;
		}

		return false;
	}
}