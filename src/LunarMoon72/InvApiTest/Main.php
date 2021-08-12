<?php

namespace InvApiTest;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
	public function onEnabled(){
		$this->getServer()->getPluginManager()->getPlugin("InventoryAPI");

	}

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
		switch($command){
			case "test":
			  if ($sender instanceof Player){
			  	$this->openMyChest($sender);
			  }
			  break;
		}
		return true;
	}

	public funcion openMyChest(Player $player){
		$inventory = $this->inventoryApi->createChestGUI();
		$inventory->setName("Test Inventory");
		$inventory->setViewOnly();
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(0, 0, 0));
		$inventory->addItem(Item::get(0, 0, 0));
		$inventory->addItem(Item::get(0, 0, 0));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
		$inventory->addItem(Item::get(161, 14, 1));
        $inventory->setClickCallback([$this, "clickFuncion"]);
        $inventory->setClickCallback([$this, "closeFuncion"]);
        $inventory->send($player);

	}

	public function clickFunction(Player $player, Inventory $inventory){
		$this->getLogger()->info("yo lol");

	}

	public function closeFunction(Player $player, Inventory $inventory){
		$this->getLogger()->info("sadge");
	}
}
