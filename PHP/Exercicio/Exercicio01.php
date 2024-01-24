<?php
function calculateIncomeTax($salary) {
    $taxBrackets = [
        1903.38 => 0,
        2826.66 => 7.5,
        3751.05 => 15,
        4664.68 => 22.5,
    ];

    $taxRateAbove4664 = 27;

    $taxAmount = 0;

    foreach ($taxBrackets as $upperLimit => $rate) {
        if ($salary <= $upperLimit) {
            $taxAmount += ($salary - key($taxBrackets)) * ($rate / 100);
            break;
        } else {
            $taxAmount += (key($taxBrackets) - key($taxBrackets, -1)) * ($rate / 100);
        }
    }

    
    if ($salary > 4664.68) {
        $taxAmount += ($salary - 4664.68) * ($taxRateAbove4664 / 100);
    }

    return $taxAmount;
}

$salary = 3000; 
$taxToPay = calculateIncomeTax($salary);
echo "For a salary of $salary, the income tax to be paid is: R$ " . number_format($taxToPay, 2, ',', '.');
?>
