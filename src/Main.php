<?php
declare(strict_types=1);
namespace NhanAZ\AntiPoggitStaffs;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
	private array $conflictingPlugins = ["AllPlayersArePoggitStaff"];
	private array $poggitStaffs = ["adeynes", "awzaw", "Botty McBotface", "BobBorrington21", "brandon15811", "brandon15812", "brandon15813", "Cakey Bot", "cortexpe", "coEthaniccc", "cthulhu", "dktapps", "egirlonvalorant", "ElonMusk", "Epicthic", "ethaniccc", "fuyutsuki", "ifera", "intyre", "IronSophie", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "Jackthehack21", "MagicalHourglass", "matcracker", "mctestDylan", "MrsCakeSlayer", "MrsPoggit", "NhanAZ", "NoDanaOnlyZuul", "Notch", "PEMapModder", "poggit-bot", "PotterHarry98", "robske110", "sandertv", "SenpaiJason", "SenpaiJason2.0", "shogchips", "shoghicp", "sof3", "SpaceLostC9909", "Spike", "thedeibo", "thunder33345", "xavier69420", "XxBillGatesxX", "#BlameShoghi"];
	// TODO: Connet to poggit.pmmp.io and get all staffs
	// Or even better, use https://api.github.com/orgs/poggit/members

	public function onEnable(): void {
		foreach ($this->poggitStaffs as $poggitStaff) {
			$this->getServer()->getNameBans()->addBan($poggitStaff, "Is Poggit Staff!", null, $poggitStaff);
		}
		$this->getLogger()->emergency("The following Poggit Staff have been banned:§e " . implode("§b, §e", $this->poggitStaffs));
		$this->disableConflictingPlugins();
	}

	private function disableConflictingPlugins() {
		foreach ($this->conflictingPlugins as $conflictingPlugin) {
			if ($this->getServer()->getPluginManager()->getPlugin($conflictingPlugin) !== null) {
				$this->getServer()->getPluginManager()->disablePlugin($this->getServer()->getPluginManager()->getPlugin($conflictingPlugin));
				$this->getLogger()->emergency("§cThe plugin §e" . $conflictingPlugin . "§c is conflicting with this plugin. Disabled it!");
			}
		}
	}
}
