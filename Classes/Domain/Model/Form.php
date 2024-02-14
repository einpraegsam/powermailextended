<?php
namespace In2code\Powermailextended\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Form
 * @package In2code\Powermailextended\Domain\Model
 */
class Form extends \In2code\Powermail\Domain\Model\Form
{

    /**
     * pages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\Powermailextended\Domain\Model\Page>
     */
    protected $pages;

    /**
     * @param ObjectStorage $pages
     * @return void
     */
    public function setPages(ObjectStorage $pages): void
    {
        $this->pages = $pages;
    }

    /**
     * @return ObjectStorage|array
     */
    public function getPages()
    {
        return $this->pages;
    }
}
