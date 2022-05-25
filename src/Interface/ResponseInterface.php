<?php
/**
 * Created By wujingfeng
 * time: 2022/5/25
 */
namespace Wujingfeng\HyperfServiceCommon\Interface;

use \Hyperf\Rpc\Contract\ResponseInterface as BaseResponseInterface;

interface ResponseInterface  extends BaseResponseInterface
{
    public function success($data = [], ?string $msg = ""): array;

    public function error($code, ?string $message = "", ?array $data = [], ?bool $realCOde = false): array;
}
