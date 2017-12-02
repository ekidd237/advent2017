<?php
/**
 * Class CaptchaSolver - solves a reverse captcha
 */
class CaptchaSolver
{
    /**
     * Solve the Reverse Catpcha
     *
     * @param int $sequence Integer sequence of numbers
     * @return int $captcha_solution Answer to the problem.
     */
    public function solveCaptcha($sequence)
    {
        $sequence_string = str_split((string)$sequence);

        $sequence_total = 0;
        for ($j=0; $j<sizeof($sequence_string)-1 ; $j++){
            if($sequence_string[$j] === $sequence_string[$j+1]) {
                $sequence_total += intval($sequence_string[$j]);
            }
        }

        if(end($sequence_string) === $sequence_string[0]){
            $sequence_total += intval($sequence_string[$j]);
        }

        return $sequence_total;
    }
}

$sequence = 1212;
$captcha_solver = new CaptchaSolver();
$captcha_solution = $captcha_solver->solveCaptcha($sequence);
echo $captcha_solution . PHP_EOL;
