class AdminCustom {
	constructor() {
		console.log('This is admin class check if this changes');
		console.warn('hello')
	}

	static helloFromAdmin() {
		console.warn('Check if this method is executed');
	}
}

$(document).ready(function () {
	$('#categorySelector').select2();
	$('input[name=news_date]').daterangepicker({
		timePicker: true,
		singleDatePicker: true,
		autoApply: false,
		autoUpdateInput: true,
		locale: {
			format: 'YYYY-MM-DD HH:mm'
		}
	});

	$('#news_keywords').tagsInput();
});
