
alert('Click ok if u want to put some content.');

//prompt()displays a window with a text input

var alphabet = '';

while (!alphabet) {
	alphabet = prompt('put alphabet here?');
}


console.log(alphabet);

//writes some text or HTML into the <body>

if (alphabet) {
	for (var i = 0; i < 10; i++) {
document.write( alphabet +'<br>');
	}
}