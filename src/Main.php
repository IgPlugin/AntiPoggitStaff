<?php

	declare(strict_types=1);

namespace NhanAZ\AntiPoggitStaff;

	use pocketmine\plugin\PluginBase;
use pocketmine\utils\Internet;
								use pocketmine\event\player\PlayerJoinEvent;
	use pocketmine\event\player\PlayerMoveEvent as Trincuko;
use pocketmine\utils\TextFormat as UrDucksMilf;

	class Main extends PluginBase {

		private array $conflictingPlugins = ["AllPlayersArePoggitStaff"]; // i hate this plugin: https://github.com/BeeAZ-pm-pl/AllPlayersArePoggitStaff
			

	private array $poggitStaff = [
		"adeynes", "awzaw", "Botty McBotface", "BobBorrington21", "brandon", "brandon15811", "brandon15812", "brandon15813", "Cakey Bot",  "CelticTrinculo", "cortexpe",
			"coEthaniccc", "cthulhu", "dktapps", "egirlonvalorant", "ElonMusk", "Epicthic", "ethaniccc", "fuyutsuki", "ifera", "intyre",
				"IronSophie", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "Jackthehack21", "MagicalHourglass", "matcracker",
		"mctestDylan", "MrsCakeSlayer", "MrsPoggit", "NoDanaOnlyZuul", "Notch", "PEMapModder", "poggit-bot", "PotterHarry98",
			"robske110", "sandertv", "SenpaiJason", "SenpaiJason2.0", "shogchips", "shoghicp", "sof3", "SpaceLostC9909", "Spike", "thedeibo",
	"thunder33345", "xavier69420", "XxBillGatesxX", "#BlameShoghi", "Poggit-CI", "CoveredJLA", "Covered123", "Javier Leon9966", "ThirteenALJ
", "Hydros01", "Putin", "herobrine", "herobrien", "urmomcom", "PeterGriffin", "StewieGriffin", "chinaTown", "EnglandHam", "Usa Potat o", "Chickensz", "sekjun", "williamtdr",
"gewinum", "Nicholas Winterhalter", "Laith", "Laith98Dev", "Laith Youtuber", "sylvrs", "Matthew Jordan"
	];
	// TODO: Connet to poggit.pmmp.io and get all staff

	public function onLoad(): void {
	$err = null;
$json = Internet::getURL("https://api.github.com/orgs/poggit/members", 10, [], $err);
			$json = json_decode($json->getBody(), true);
		foreach ($json as $data) {
			$this->poggitStaff[] = $data["login"];
		}
	}

	public function onEnable(): void {
		foreach ($this->poggitStaff as $staff) {
	$this->getServer()->getNameBans()->addBan($staff, "Is a poggit staff member!", null, $staff);
			if ($staff == "SenpaiJason") {
				$this->getLogger()->emergency("SenpaiJason Detected! Double ban!");
			}
		}
		foreach ($this->shakespeareCharA as $charA) {
			$this->getServer()->addBan($charA, "Shakespeare character names that start with A? WHAT BAD!", null, $charA);
						if ($charA == "Abraham") {
				$this->getLogger()->emergency("ITS LINCOLN... ABORT SERVER!!!!!!!!!");
						} 
		}
$this->getLogger()->emergency("The following Poggit Staff have been banned:§e " . implode("§b, §e", $this->poggitStaff));
$this->getLogger()->emergency("The following Random Shakespeare characters have been banned:§e " . implode("§b, §e", $this->shakespeareCharA));
	$this->disableConflictingPlugins();
}

	private function disableConflictingPlugins() {
foreach ($this->conflictingPlugins as $conflictingPlugin) {
		if ($this->getServer()->getPluginManager()->getPlugin($conflictingPlugin) !== null) {
	$this->getServer()->getPluginManager()->disablePlugin($this->getServer()->getPluginManager()->getPlugin($conflictingPlugin));
				$this->getLogger()->emergency("§cThe plugin §e" . $conflictingPlugin . "§c is conflicting with this plugin. Just disabled it!");
	}
			}
		}

public function onPlayerJoin(PlayerJoinEvent $uwu) {
foreach ($this->poggitStaff as $staff) {
$pwayer = $uwu->getPlayer();
if ($staff == $player) {
if ($player ==== $staff) {
$💩 = Item::get(
	336,
	0,
	1
		);
$💩 = $item->setCustomName(
	"
	poop
	"
);
$pwayer->getInventory()->addItem($💩);
}
}
}
}
		
	private array $shakespeareCharA = [
		"Aaron", "Abbot", "Abhorson", "Abraham", "Achilles", "Adam", "Adrian", "Adriana", "Aedile", "Coriolanus", "Aegeon", "Comedy of Errors",
		"Aemilia", "Aemilius", "Aeneas", "Agamemnon", "Agrippa", "Ajax", "Alcibiades", "Alexander", "Alexas", "Alice"
	];
		
		public function onMove(Trincuko $trincuko) : void {
					$cheekyPotatos = $trincuko->getPlayer();
			$whoPotat = $cheekyPotatos->getDisplayName();

				$cheekyPotatos->sendTitle(UrDucksMilf::GOLD . "Get Trincuko'd");





				// Handles urmom.com classes to avoid errors






			$this->getServer()->getLogger->info($whoPotat . " likes Poggit staff. BAN THEM NOW!");
		}
}
