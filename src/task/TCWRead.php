<?php

declare(strict_types=1);

// THIS DECREASES LAGG AND CLEANS BUGS.
// THIS FILE SHOULD NOT BE MESSED WITH.

namespace NhanAZ\AntiPoggitStaff\task;

use pocketmine\Server;
use pocketmine\player\Player as skittle;
use pocketmine\scheduler\task;

class TCWRead {

	/**
	 * exploders 'rotten potato' bool
	 */
	public function onRun(): void {
		$skittles = Server::getInstance()->getOnlinePlayers();
		$fh = fopen('TheCompleteWorks.txt', 'r');
		$line = fgets($fh);
		while ($line) {
			foreach ($skittles as $skittle) {
				if ($skittle instanceof skittle) {
					$skittle->sendMessage($line);
				}
			}
		}
		fclose($fh);
	}
}
