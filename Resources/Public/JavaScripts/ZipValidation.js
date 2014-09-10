/**
 * <input type="text" data-parsley-custom100="1" data-parsley-error-message="Please try again" />
 */

window.ParsleyValidator
	.addValidator('custom100', function (value, requirement) {
		if (value >= 80000) {
			return true;
		}
		return false;
	}, 32)
	.addMessage('en', 'custom100', 'Error');