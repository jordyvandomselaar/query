<?php

namespace OneMustCode\Query\Tests\Builders\Eloquent\Filters;

use OneMustCode\Query\Builders\Eloquent\Filters\IsNotNullFilterHandler;
use OneMustCode\Query\Filters\IsNotNull;

/**
 * @covers OneMustCode\Query\Builders\Eloquent\Filters\IsNotNullFilterHandler
 */
class IsNotNullFilterHandlerTest extends AbstractFilterTest
{
    protected function getFilterHandler()
    {
        return new IsNotNullFilterHandler();
    }

    protected function getFilter()
    {
        return new IsNotNull('foo');
    }

    protected function getOperator()
    {
        return IsNotNull::OPERATOR;
    }

    protected function getWhere()
    {
        return [
            'type' => 'NotNull',
            'column' => $this->getFilter()->getField(),
            'boolean' => 'and',
        ];
    }
}