<?php

declare(strict_types=1);

namespace NhanAZ\AntiPoggitStaffs;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	private array $poggitStaffs = ["adeynes", "awzaw", "brandon15811", "cortexpe", "dktapps", "intyre", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "sandertv", "sof3", "matcracker", "ethaniccc", "fuyutsuki", "ifera", "thunder33345"];
	// Todo: Connet to poggit.pmmp.io and get all staffs

	public function onEnable(): void {
		foreach ($this->poggitStaffs as $poggitStaff) {
			$this->getServer()->getNameBans()->addBan($poggitStaff, "Is Poggit Staff!", null, "NhanAZ");
			// TODO: Add a message to the console
		}
	}
}
