<?php declare(strict_types=1);

namespace HochwarthPremiumArticles;

use Shopware\Core\Framework\DataAbstractionLayer\Indexing\InheritanceUpdater;
use Shopware\Core\Framework\DataAbstractionLayer\Indexing\MessageQueue\IndexerMessageSender;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;

class HochwarthPremiumArticles extends Plugin
{
    public function activate(ActivateContext $activateContext): void
    {
        $indexerMessageSender = $this->container->get(IndexerMessageSender::class);
        $indexerMessageSender->partial(new \DateTimeImmutable(), [InheritanceUpdater::class]);
    }
}