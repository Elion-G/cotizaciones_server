window.valueValidation = function valueValidation(){
    let div = document.getElementById('minValues')
    let tds = div.getElementsByTagName('td');
    let section = document.getElementById("cotizaciones_section")
    let total_tds = section.getElementsByTagName("td")
    for (let i = 0; i < tds.length; i++) {
        const minValue = tds[i];
        for (let j = 0; j < total_tds.length; j++) {
            const element = total_tds[j];
            if (element.textContent == minValue.textContent) {
                element.style.background = '#008000';
                element.style.color = "#fff";
            }
        }
        
        // if (element.textContent == '6.780') {
        //     element.style.color = '#f00';
        // }
    }
    // $('td').each(function(i, item) {
    //     $(item).css('color', '#f00');
    // });
}