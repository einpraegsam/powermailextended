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
     * @param string $validationConfiguration
     * @return bool
     */
    public function validate100($value, $validationConfiguration)
    {
        return is_numeric($value) && $value >= $validationConfiguration;
    }
}
