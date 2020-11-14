// $('#un_autre_bouton').click(function(){
//     $('#cache').show();
//  });

function closeAll() {
    $('#terminal-command').hide();
    $('#texte1').hide();
    $('#texte2').hide();
    $('#texte3').hide();
}

$('#fichier1').click(() => {
	closeAll();
        $('#texte1').show();
    });
$('#close1').click( function () {
        $('#texte1').hide();
    });
$('#fichier2').click(() => {
	closeAll();
        $('#texte2').show();
    });
$('#close2').click( function () {
        $('#texte2').hide();
    });
$('#fichier3').click(() => {
	closeAll();
        $('#texte3').show();
    });
$('#close3').click( function () {
        $('#texte3').hide();
    });

$('#terminal').click(() => {
	closeAll();
        $('#terminal-command').show();
    });
$('#close-t').click( function () {
        $('#terminal-command').hide();
    });

hashCode = s => s.split('').reduce((a,b)=>{a=((a<<5)-a)+b.charCodeAt(0);return a&a},0);

$("#code").keyup(() =>{
if (hashCode($('#code').val()) == 109202173){
    $("#success").show()
}})
