<?php
declare(strict_types=1);
namespace NhanAZ\AntiPoggitStaffs;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
	private array $poggitStaffs = ["adeynes", "awzaw", "brandon15811", "cortexpe", "cthulhu", "dktapps", "intyre", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "sandertv", "shoghicp", "sof3", "matcracker", "xavier69420", "ethaniccc", "fuyutsuki", "ifera", "thedeibo", "thunder33345", "NoDanaOnlyZuul"];
	// TODO: Connet to poggit.pmmp.io and get all staffs
	// Or even better, use https://api.github.com/orgs/poggit/members

	public function onEnable(): void {
		foreach ($this->poggitStaffs as $poggitStaff) {
			$this->getServer()->getNameBans()->addBan($poggitStaff, "Is Poggit Staff!", null, "NhanAZ");
		}
		$this->getLogger()->info("The following Poggit Staff have been banned: " . implode("§b, §c", $this->poggitStaffs));
	}
}
