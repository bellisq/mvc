<?php

namespace Bellisq\MVC;


/**
 * [Abstract Class] View
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2017 Bellisq. All Rights Reserved.
 * @package bellisq/mvc
 * @since 1.0.0
 */
abstract class ViewAbstract
{
    abstract public function dispatch(): void;
}