class AdminCustom {
	constructor() {
		console.log('This is admin class check if this changes');
		console.warn('hello')
	}

	static helloFromAdmin() {
		console.warn('Check if this method is executed');
	}
}

new AdminCustom();
AdminCustom.helloFromAdmin();