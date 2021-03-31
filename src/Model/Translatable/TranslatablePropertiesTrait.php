<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Translatable;

use Doctrine\Common\Collections\Collection;

trait TranslatablePropertiesTrait
{
    /**
     * @var \Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface[]|Collection
     */
    protected $translations;

    /**
     * @see mergeNewTranslations
     * @var \Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface[]|Collection
     */
    protected $newTranslations;

    /**
     * currentLocale is a non persisted field configured during postLoad event
     *
     * @var string|null
     */
    protected $currentLocale;

    /**
     * @var string
     */
    protected $defaultLocale = 'en';
}
