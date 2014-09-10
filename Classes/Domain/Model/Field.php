<?php
namespace In2code\Powermailextended\Domain\Model;

/**
 * Class Field
 * @package In2code\Powermailextended\Domain\Model
 */
class Field extends \In2code\Powermail\Domain\Model\Field {

	/**
	 * New property text
	 *
	 * @var string $txPowermailextendedPowermailText
	 */
	protected $txPowermailextendedPowermailText;

	/**
	 * New property readonly
	 *
	 * @var string $txPowermailextendedPowermailReadonly
	 */
	protected $txPowermailextendedPowermailReadonly;

	/**
	 * @param string $txPowermailextendedPowermailReadonly
	 * @return void
	 */
	public function setTxPowermailextendedPowermailReadonly($txPowermailextendedPowermailReadonly) {
		$this->txPowermailextendedPowermailReadonly = $txPowermailextendedPowermailReadonly;
	}

	/**
	 * @return string
	 */
	public function getTxPowermailextendedPowermailReadonly() {
		return $this->txPowermailextendedPowermailReadonly;
	}

	/**
	 * @param string $txPowermailextendedPowermailText
	 * @return void
	 */
	public function setTxPowermailextendedPowermailText($txPowermailextendedPowermailText) {
		$this->txPowermailextendedPowermailText = $txPowermailextendedPowermailText;
	}

	/**
	 * @return string
	 */
	public function getTxPowermailextendedPowermailText() {
		return $this->txPowermailextendedPowermailText;
	}
}