//hide field by default
$('div[id="DDGO"]').hide();
$('div[id="SSDGO"]').hide();

//show it when the checkbox is clicked
$('input[id="DDY"]').on('click', function(){
    if ( $(this).prop('checked') ) {
        $('div[id="DDGO"]').fadeIn();
    }
    else {
        $('div[id="DDGO"]').hide();
    }
});

$('input[id="DDN"]').on('click', function(){
    if ( $(this).prop('checked') ) {
        $('div[id="DDGO"]').fadeOut();
    }
    else {
        $('div[id="DDGO"]').hide();
    }
});

$('input[id="SSDY"]').on('click', function(){
    if ( $(this).prop('checked') ) {
        $('div[id="SSDGO"]').fadeIn();
    }
    else {
        $('div[id="SSDGO"]').hide();
    }
});

$('input[id="SSDN"]').on('click', function(){
    if ( $(this).prop('checked') ) {
        $('div[id="SSDGO"]').fadeOut();
    }
    else {
        $('div[id="SSDGO"]').hide();
    }
});







// function dynInput(cbox) {
//         var input = document.createElement("input");
//         console.log(input);
//         input.type = "text";
//         // input.addClass("form-control");
//         var div1 = document.createElement("div");
//         var div2 = document.createElement("div");
//         var span = document.createElement("span");
//         // span.addClass("input-group-text");
//         span.innerText = "La capactité de votre " + cbox.name + " (en GO)";
//         // div1.addClass("input-group mb-3");
//         // div2.addClass("input-group-prepend");
//         div2.appendChild(span);
//         div1.appendChild(div2);
//         div1.appendChild(input);
//
//         document.getElementById("insertinputs").appendChild(div1);
//
// }
//
// function OutInput(cbox) {
//     var inputs=document.getElementById("insertinputs");
//     while (inputs.firstChild) {
//         inputs.removeChild(inputs.firstChild);
//     }
//
// }
