<?php

namespace shoghicp\SkyGridGenerator;

use pocketmine\level\generator\GeneratorManager;
use pocketmine\plugin\PluginBase;

class Plugin extends PluginBase{
	/**
	 * Called when the plugin is enabled
	 */
	public function onEnable() : void{
		GeneratorManager::addGenerator(SkyGridGenerator::class, "skygrid");
	}
}
