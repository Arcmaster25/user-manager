export default function taxReturnType(){

	let select = document.getElementById("taxReturnType");

	let inputMonth = document.getElementById("monthTaxReturn");

	let inputYear = document.getElementById("taxReturnYear");

	let inputTri = document.getElementById("trimonthTaxReturn");

	let selectValue = select.addEventListener("click", function(){
		
		let val = this.value;

		switch(val){

		case 'D101-Renta General':

			inputMonth.setAttribute("class", "d-none");

			inputTri.setAttribute("class", "d-none");

			inputYear.setAttribute("class", "d-block col-12");

		break;

		case 'D104-Iva General':

			inputMonth.setAttribute("class", "d-block col-6");
			
			inputYear.setAttribute("class", "d-block col-6");

			inputTri.setAttribute("class", "d-none");

		break;

		case 'D105-Renta simplificado':

			inputMonth.setAttribute("class", "d-none");
			
			inputYear.setAttribute("class", "d-block col-6");

			inputTri.setAttribute("class", "d-block col-6");

		break;

		case 'D105-IVA simplificado':

			inputMonth.setAttribute("class", "d-none");
			
			inputYear.setAttribute("class", "d-block col-6");

			inputTri.setAttribute("class", "d-block col-6");

		break;

		case 'D-REA u otro tipo':

			inputMonth.setAttribute("class", "d-block col-6");
			
			inputYear.setAttribute("class", "d-block col-6");

			inputTri.setAttribute("class", "d-none");

		break;

	}

	});

}