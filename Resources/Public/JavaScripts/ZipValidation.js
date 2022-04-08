/**
 * <input type="text" data-powermail-custom100="80000" data-powermail-error-message="Please try again" />
 */
const forms = document.querySelectorAll('.powermail_form');
forms.forEach(function(form) {
	let formValidation = form.powermailFormValidation;

	formValidation.addValidator('custom100', function(field) {
		if (field.hasAttribute('data-powermail-custom100')) {
			return field.value < parseInt(field.getAttribute('data-powermail-custom100'));
		}
		return false;
	});
});
