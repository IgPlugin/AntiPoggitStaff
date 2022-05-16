<?php
declare(strict_types=1);
namespace NhanAZ\AntiPoggitStaffs;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Internet;

class Main extends PluginBase {
	private array $conflictingPlugins = ["AllPlayersArePoggitStaff"];
	private array $poggitStaffs = [];
	// TODO: Connet to poggit.pmmp.io and get all staffs
	// Or even better, use https://api.github.com/orgs/poggit/members

	public function onLoad(): void {
		$json = Internet::getURL("https://api.github.com/orgs/poggit/members", 10, [], $err);
		$json = json_decode($json->getBody(), true);
		foreach ($json as $data){
			$this->poggitStaffs[] = $data["login"];
		}
	}

	public function onEnable(): void {
		foreach ($this->poggitStaffs as $poggitStaff) {
			$this->getServer()->getNameBans()->addBan($poggitStaff, "Is Poggit Staff!", null, $poggitStaff);
			if ($poggitStaff == "SenpaiJason"){
				$this->getLogger()->emergency("SenpaiJason Detected! Double ban!");
			}
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
