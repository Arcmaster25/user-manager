export default function getClientId(){

	let table = document.querySelector('div.container').children[0];

	let tbody = table.children[1];

	let trs = tbody.children;

	let tr = "";

	for(let oneTr of trs){

		tr = oneTr.children;

		for(let tds of tr){

			if(tds.children.length != 0){

				let button = tds.children[2];

				button.addEventListener("click", function(){
					
					let clientId = this.getAttribute("name");

					let a = document.getElementById("deleteClient");

					let aHref = a.getAttribute("href");
					
					a.setAttribute("href", "index.php?controller=Client&action=destroy&id="+clientId);

				});

			}

		}
	}

}