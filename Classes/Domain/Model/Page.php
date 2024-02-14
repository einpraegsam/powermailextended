<?php
namespace In2code\Powermailextended\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Page
 * @package In2code\Powermailextended\Domain\Model
 */
class Page extends \In2code\Powermail\Domain\Model\Page
{

    /**
     * Powermail Fields
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\Powermailextended\Domain\Model\Field>
     */
    protected $fields = null;

    /**
     * @param ObjectStorage $fields
     * @return void
     */
    public function setFields(ObjectStorage $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * @return ObjectStorage
     */
    public function getFields(): ObjectStorage
    {
        return $this->fields;
    }
}
