<?php

namespace HochwarthPremiumArticles\Resources\snippet\en_GB;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

class SnippetFile_en_GB implements SnippetFileInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'storefront.en-GB';
    }

    /**
     * @inheritDoc
     */
    public function getPath(): string
    {
        return __DIR__ . '/storefront.en-GB.json';
    }

    /**
     * @inheritDoc
     */
    public function getIso(): string
    {
        return 'en-GB';
    }

    /**
     * @inheritDoc
     */
    public function getAuthor(): string
    {
        return 'Hochwarth IT';
    }

    /**
     * @inheritDoc
     */
    public function isBase(): bool
    {
        return false;
    }
}