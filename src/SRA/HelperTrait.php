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

namespace SRA;

use Discord\Builders\MessageBuilder;
use Discord\Parts\Channel\Message\AllowedMentions;

trait HelperTrait
{
    /**
     * Creates a new instance of MessageBuilder.
     *
     * Optionally prevents mentions in the message by setting allowed mentions to none.
     *
     * @param bool $prevent_mentions Whether to prevent mentions in the message. Defaults to false.
     *
     * @return MessageBuilder
     *
     * @since 0.1.0
     */
    public static function createBuilder(bool $prevent_mentions = false): MessageBuilder
    {
        $builder = MessageBuilder::new();
        if ($prevent_mentions) {
            $builder->setAllowedMentions(AllowedMentions::none());
        }

        return $builder;
    }
}
