<?php

namespace Mguinea\Criteria;

enum FilterOperator
{
    case EQUAL;
    case NOT_EQUAL;
    case GT;
    case GTE;
    case LT;
    case LTE;
    case CONTAINS;
    case NOT_CONTAINS;
}
