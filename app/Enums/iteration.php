<?php

namespace App\Enums;

enum iteration_duration_type: string {
    case Daily = 'Every day';
    case Weekly = 'Every Week';
    case weekDay = 'Every Day X';
}
