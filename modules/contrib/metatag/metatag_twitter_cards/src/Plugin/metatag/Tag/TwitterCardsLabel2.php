<?php

namespace Drupal\metatag_twitter_cards\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;

/**
 * Provides a plugin for the 'twitter:label2' meta tag.
 *
 * @MetatagTag(
 *   id = "twitter_cards_label2",
 *   label = @Translation("Label 2"),
 *   description = @Translation("This field expects a string, and you can specify values for labels such as price, items in stock, sizes, etc."),
 *   name = "twitter:label2",
 *   group = "twitter_cards",
 *   weight = 502,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   trimmable = TRUE
 * )
 *
 * @deprecated in metatag:8.x-1.23 and is removed from metatag:2.0.0. No replacement is provided.
 *
 * @see https://www.drupal.org/node/3329072
 */
class TwitterCardsLabel2 extends MetaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
