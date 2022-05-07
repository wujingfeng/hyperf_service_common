<?php
/**
 * Created By wujingfeng
 * time: 2022/5/7
 */

namespace App\Constants;

use Hyperf\Constants\Annotation\Constants;

#[Constants]
class BaseConstants
{
    /**
     * @Message("找不到内容")
     */
    const NOT_FOUND = 404;
}