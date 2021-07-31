/*Bootstrap Script's*/

import '../../node_modules/bootstrap/dist/js/bootstrap.js';

/*Bootstrap Style's*/

import '../sass/main.scss';

/*Custom scripts*/

import getClientId from './getClientIdForDelete.js';

import taxReturnType from './taxReturnChangeType.js';

setInterval(function(){

	let url = window.location.search;

	switch(url){

		case '?controller=Client&action=index':

			getClientId();

		break;

		case '?controller=Client&action=store':

			taxReturnType();

		break;

	}

}, 1000);