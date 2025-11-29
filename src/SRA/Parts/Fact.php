<?php

declare(strict_types=1);

/*
 * This file is a part of the DiscordPHP-SRA project.
 *
 * Copyright (c) 2025-present Valithor Obsidion <valithor@discordphp.org>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace SRA\Parts;

use Discord\Builders\Components\Container;
use Discord\Builders\Components\MediaGallery;
use Discord\Builders\Components\TextDisplay;
use Discord\Parts\Part;

/**
 * A fact returned by the SRA API.
 *
 * @property string $fact The fact.
 */
class Fact extends Part
{
    protected $fillable = [
        'fact',
    ];

    /**
     * Converts the fact to a container with components.
     *
     * @return Container|null
     */
    public function toContainer(): ?Container
    {
        if (! isset($this->attributes['fact'])) {
            return null;
        }

        return Container::new()->addComponent(TextDisplay::new($this->fact));
    }
}
