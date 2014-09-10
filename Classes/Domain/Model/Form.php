<?php
namespace In2code\Powermailextended\Domain\Model;

/**
 * Class Form
 * @package In2code\Powermailextended\Domain\Model
 */
class Form extends \In2code\Powermail\Domain\Model\Form {

	/**
	 * pages
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\Powermailextended\Domain\Model\Page>
	 */
	protected $pages;

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $pages
	 * @return void
	 */
	public function setPages($pages) {
		$this->pages = $pages;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getPages() {
		return $this->pages;
	}
}