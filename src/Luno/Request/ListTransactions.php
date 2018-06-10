<?php declare(strict_types=1);

namespace Luno\Request;

class ListTransactions extends AbstractRequest
{
  /**
   * Account ID
   */
  protected $id;

  /**
   * Maximum of the row range to return (exclusive)
   */
  protected $max_row;

  /**
   * Minimum of the row range to return (inclusive)
   */
  protected $min_row;
  
  /**
   * @return string
   */
  public function getId(): string
  {
    if (!isset($this->id)) {
      return "";
    }
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id)
  {
    $this->id = $id;
  }

  /**
   * @return int
   */
  public function getMaxRow(): int
  {
    if (!isset($this->max_row)) {
      return 0;
    }
    return $this->max_row;
  }

  /**
   * @param int $maxRow
   */
  public function setMaxRow(int $maxRow)
  {
    $this->max_row = $maxRow;
  }

  /**
   * @return int
   */
  public function getMinRow(): int
  {
    if (!isset($this->min_row)) {
      return 0;
    }
    return $this->min_row;
  }

  /**
   * @param int $minRow
   */
  public function setMinRow(int $minRow)
  {
    $this->min_row = $minRow;
  }
}

// vi: ft=php
