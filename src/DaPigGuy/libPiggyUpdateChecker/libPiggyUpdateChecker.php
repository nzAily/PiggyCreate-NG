<?php

declare(strict_types=1);

namespace DaPigGuy\libPiggyUpdateChecker;

use DaPigGuy\libPiggyUpdateChecker\tasks\CheckUpdatesTask;
use pocketmine\plugin\Plugin;
use pocketmine\Server;

class libPiggyUpdateChecker
{
    public static function init(Plugin $plugin): void
    {
        Server::getInstance()->getAsyncPool()->submitTask(new CheckUpdatesTask($plugin->getName(), $plugin->getDescription()->getVersion()));
    }
}