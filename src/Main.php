<?php
declare(strict_types=1);
namespace NhanAZ\AntiPoggitStaffs;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
	private array $poggitStaffs = ["adeynes", "awzaw", "Botty McBotface", "brandon15811", "brandon15812", "brandon15813", "Cakey Bot", "cortexpe", "cthulhu", "dktapps", "ElonMusk", "ethaniccc", "fuyutsuki", "ifera", "intyre", "IronSophie", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "MagicalHourglass" "matcracker", "MrsCakeSlayer", "MrsPoggit", "NhanAZ", "NoDanaOnlyZuul", "Notch", "PEMapModder", "poggit-bot", "PotterHarry98", "robske110", "sandertv", "shoghicp", "sof3", "Spike", "thedeibo", "thunder33345", "xavier69420", "XxBillGatesxX", "#BlameShoghi"];
	// TODO: Connet to poggit.pmmp.io and get all staffs
	// Or even better, use https://api.github.com/orgs/poggit/members

	public function onEnable(): void {
		foreach ($this->poggitStaffs as $poggitStaff) {
			$this->getServer()->getNameBans()->addBan($poggitStaff, "Is Poggit Staff!", null, "NhanAZ");
		}
		$this->getLogger()->info("The following Poggit Staff have been banned: " . implode("§b, §c", $this->poggitStaffs));
	}
}
