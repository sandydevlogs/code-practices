<?php
function threeSum($nums)
{
    $result = [];

    // Sort the array
    sort($nums);

    for ($i = 0; $i < count($nums) - 2; $i++) {
        // Skip duplicate elements
        if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
            continue;
        }

        $x = $nums[$i];
        $left = $i + 1;
        $right = count($nums) - 1;

        while ($left < $right) {
            $sum = $x + $nums[$left] + $nums[$right];

            if ($sum == 0) {
                // Found a triplet with sum zero
                $result[] = [$x, $nums[$left], $nums[$right]];

                // Skip duplicate elements
                while ($left < $right && $nums[$left] == $nums[$left + 1]) {
                    $left++;
                }
                while ($left < $right && $nums[$right] == $nums[$right - 1]) {
                    $right--;
                }

                $left++;
                $right--;
            } elseif ($sum < 0) {
                $left++;
            } else {
                $right--;
            }
        }
    }

    return $result;
}

$nums = [-1, 0, 1, 2, -1, -4];
$res = threeSum($nums);

// Print the result
print_r($res);
