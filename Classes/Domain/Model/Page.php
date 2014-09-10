<?php
namespace In2code\Powermailextended\Domain\Model;

/**
 * Class Page
 * @package In2code\Powermailextended\Domain\Model
 */
class Page extends \In2code\Powermail\Domain\Model\Page {

	/**
	 * Powermail Fields
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\Powermailextended\Domain\Model\Field>
	 */
	protected $fields = NULL;

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $fields
	 * @return void
	 */
	public function setFields($fields) {
		$this->fields = $fields;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getFields() {
		return $this->fields;
	}
}