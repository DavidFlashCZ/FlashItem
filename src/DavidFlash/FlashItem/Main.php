<?php

declare(strict_types=1);

namespace DavidFlash\FlashItem;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\scheduler\Task;
use pocketmine\scheduler\SchedulerTask;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use DavidFlash\FlashItem\libs\jojoe77777\FormAPI\SimpleForm;
use pocketmine\item\ItemFactory;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }

		public function onInteraction(PlayerInteractEvent $event){
			
			$player = $event->getPlayer();
			$item = $this->getConfig()->get("item");
			$name = $this->getConfig()->get("name");

			if($event->getItem()->getId()==$item){
				if($event->getItem()->getCustomName() === $name){

					$form = new SimpleForm(function (Player $sender,  $data) {
						switch($data) {
						case 0:

						break;
						case 1:			
									$item = $this->getConfig()->get("item");
									$name = $this->getConfig()->get("name");

									$minigame1 = $this->getConfig()->get("minigame1");

									$command1 = $this->getConfig()->get("command1");
								
								$item = ItemFactory::get($item, 0, 1);
								$item->setCustomName("$name");
					
							$sender->getInventory()->removeItem($item);
							$sender->sendMessage("Transfering to $minigame1..");
							$this->getServer()->dispatchCommand($sender, $command1);

						break;
						case 2:
									$item = $this->getConfig()->get("item");
									$name = $this->getConfig()->get("name");

									$minigame2 = $this->getConfig()->get("minigame2");

									$command2 = $this->getConfig()->get("command2");
								
								$item = ItemFactory::get($item, 0, 1);
								$item->setCustomName("$name");
					
							$sender->getInventory()->removeItem($item);
							$sender->sendMessage("Transfering to $minigame2..");
							$this->getServer()->dispatchCommand($sender, $command2);
						break;
						case 3:
									$item = $this->getConfig()->get("item");
									$name = $this->getConfig()->get("name");

									$minigame3 = $this->getConfig()->get("minigame3");

									$command3 = $this->getConfig()->get("command3");
								
								$item = ItemFactory::get($item, 0, 1);
								$item->setCustomName("$name");
					
							$sender->getInventory()->removeItem($item);
							$sender->sendMessage("Transfering to $minigame3..");
							$this->getServer()->dispatchCommand($sender, $command3);
						break;
						case 4:
									$item = $this->getConfig()->get("item");
									$name = $this->getConfig()->get("name");

									$minigame4 = $this->getConfig()->get("minigame4");

									$command4 = $this->getConfig()->get("command4");
								
								$item = ItemFactory::get($item, 0, 1);
								$item->setCustomName("$name");
					
							$sender->getInventory()->removeItem($item);
							$sender->sendMessage("Transfering to $minigame4..");
							$this->getServer()->dispatchCommand($sender, $command4);
						break;
						case 5:
									$item = $this->getConfig()->get("item");
									$name = $this->getConfig()->get("name");

									$minigame5 = $this->getConfig()->get("minigame5");

									$command5 = $this->getConfig()->get("command5");
								
								$item = ItemFactory::get($item, 0, 1);
								$item->setCustomName("$name");
					
							$sender->getInventory()->removeItem($item);
							$sender->sendMessage("Transfering to $minigame5..");
							$this->getServer()->dispatchCommand($sender, $command5);
						break;
						case 6:
									$item = $this->getConfig()->get("item");
									$name = $this->getConfig()->get("name");

									$minigame6 = $this->getConfig()->get("minigame6");

									$command6 = $this->getConfig()->get("command6");
								
								$item = ItemFactory::get($item, 0, 1);
								$item->setCustomName("$name");
					
							$sender->getInventory()->removeItem($item);
							$sender->sendMessage("Transfering to $minigame6..");
							$this->getServer()->dispatchCommand($sender, $command6);
						break;
						
						}
						});
							
							$minigame1 = $this->getConfig()->get("minigame1");
							$minigame2 = $this->getConfig()->get("minigame2");
							$minigame3 = $this->getConfig()->get("minigame3");
							$minigame4 = $this->getConfig()->get("minigame4");
							$minigame5 = $this->getConfig()->get("minigame5");
							$minigame6 = $this->getConfig()->get("minigame6");
						
						$form->setTitle("Minigames");
						$form->setContent("Choose minigame");
						$form->addButton("§l§cCLOSE");
						$form->addButton("$minigame1\n§7Click to teleport!");
						$form->addButton("$minigame2\n§7Click to teleport!");
						$form->addButton("$minigame3\n§7Click to teleport!");
						$form->addButton("$minigame4\n§7Click to teleport!");
						$form->addButton("$minigame5\n§7Click to teleport!");
						$form->addButton("$minigame6\n§7Click to teleport!");
						$form->sendToPlayer($player);
			
						return true;
					}
		}
	}
}