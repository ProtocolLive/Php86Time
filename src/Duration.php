<?php
/**
 * @author Protocol Corporation Ltda.
 * @link https://github.com/ProtocolLive/PhpTools
 * @version 2026.11.24.00
 * @php-min-ver 7.0
 * @php-max-ver 8.5
 */

namespace Time;

abstract class Duration{
  public static function fromDays(
    int $days
  ):int{
    return $days * 24 * 60 * 60;
  }

  public static function fromHours(
    int $hours
  ):int{
    return $hours * 60 * 60;
  }

  public static function fromMinutes(
    int $minutes
  ):int{
    return $minutes * 60;
  }
}