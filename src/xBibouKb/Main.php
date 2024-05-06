<?php

namespace xBibouKb;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->saveDefaultConfig();
    }

    public function OnHit(EntityDamageByEntityEvent $event)
    {
        $event->setAttackCooldown($this->getConfig()->get("attaque-cooldown"));
        $event->setKnockBack($this->getConfig()->get("knockback-force"));
    }
}