<?php
namespace MyCompany\MyProject;

use WeCodeMore\WpStarter\Step\Step;
use WeCodeMore\WpStarter\Util\Locator;

function sayHelloBeforeStarting(int $result, Step $step, Locator $locator) {
    $locator->io()->writeColorBlock('magenta', "Hello there!\n");
}