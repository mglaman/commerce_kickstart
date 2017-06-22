<?php

namespace Drupal\lightning\Tests\Functional;

use Drupal\Core\Entity\Entity\EntityViewMode;
use Drupal\Tests\BrowserTestBase;
use Drupal\user\Entity\Role;
use Drupal\user\Entity\User;

/**
 * Ensures the integrity and correctness of Commerce Kickstart's bundled config.
 *
 * @group commerce_kickstart
 */
class ConfigIntegrityTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $profile = 'commerce_kickstart';

  public function testConfig() {
    // Ensure uid 1 has inherited `administrator` role from Standard
    $user = User::load(1);
    $this->assertTrue(in_array('administrator', $user->getRoles()));
  }

}
