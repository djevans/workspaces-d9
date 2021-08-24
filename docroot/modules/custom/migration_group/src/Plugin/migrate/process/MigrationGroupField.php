<?php

namespace Drupal\migration_group\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Provides a 'MigrationGroupField' migrate process plugin.
 *
 * @MigrateProcessPlugin(
 *  id = "migration_group_field"
 * )
 */
class MigrationGroupField extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    // Plugin logic goes here.
  }

}
