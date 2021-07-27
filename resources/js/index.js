/*Bootstrap Script's*/

import '../../node_modules/bootstrap/dist/js/bootstrap.js';

/*Bootstrap Style's*/

import '../sass/main.scss';

/*Custom scripts*/

import getClientId from './getClientIdForDelete.js';

//getClientId();

setInterval(function(){

	if(window.location.search == "?controller=Client&action=index"){
		getClientId();
	}

}, 1000);