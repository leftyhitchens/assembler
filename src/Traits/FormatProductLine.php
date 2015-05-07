<?php
namespace Indatus\Assembler\Traits;

use Indatus\Assembler\Formatter;
use Indatus\Assembler\Tasks\FormatProductLineTask;

trait FormatProductLine
{
    public function taskFormatProductLine($productLine, Formatter $formatter)
    {
        return new FormatProductLineTask($productLine, $formatter);
    }
}
