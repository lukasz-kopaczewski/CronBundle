<?php

namespace ColourStream\Bundle\CronBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation()
 * @Target("CLASS")
 * @Attributes({
 *   @Attribute("startDate", type = "string"),
 *   @Attribute("startTime", type = "string")
 * })
 */
class CronJob extends Annotation
{
    public $value;
    public $startDate;
    public $startTime;
}
