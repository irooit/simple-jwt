<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/simple-jwt.
 *
 * @link     https://github.com/qbhy/simple-jwt
 * @document https://github.com/qbhy/simple-jwt/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/simple-jwt/blob/master/LICENSE
 */
namespace Irooit\SimpleJwt\Encoders;

use Irooit\SimpleJwt\Interfaces\Encoder;

class Base64Encoder implements Encoder
{
    public function encode(string $string): string
    {
        return base64_encode($string);
    }

    public function decode(string $string): string
    {
        return base64_decode($string);
    }
}
