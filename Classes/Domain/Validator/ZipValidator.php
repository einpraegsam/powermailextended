<?php
namespace In2code\Powermailextended\Domain\Validator;

/**
 * ZipValidator
 */
class ZipValidator
{

    /**
     * Check if given number is higher than in configuration
     *
     * @param string $value
     * @param string $validationConfig
     * @return bool
     */
    public function validate100($value, $validationConfig)
    {
        return is_numeric($value) && $value >= $validationConfig;
    }
}
