
<?php
author Apple3910\VipCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
      public function onEnable(){
          $this->saveDefaultConfig();
          $this->getLogger()->info("VipCommand has been enabled");
      }
      public function onCommand(CommandSender $sender, Command $command, $label, array $args){
           $cmd = strtolower($command);
           if($cmd == "vip") {
                   $sender->sendMessage($this->getConfig()->get("vipopis"));
            }
            if($cmd == "svip") {
                   $sender->sendMessage($this->getConfig()->get("svipopis"));
            }
            if($cmd == "uvip") {
                   $sender->sendMessage($this->getConfig()->get("uvipopis"));
            }
             if($cmd == "youtube") {
                   $sender->sendMessage($this->getConfig()->get("ytopis"));
            }
             if($cmd == "regulamin") {
                   $sender->sendMessage($this->getConfig()->get("regulaminopis"));
            }
      }
      public function onDisable(){
    
           $this->getLogger()->info("VipCommand has been disabled");
      }
}
