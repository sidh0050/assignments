var tinytodos = document.getElementById('tinytodos');
var item = document.getElementById('item');

document.getElementsByTagName('form')[0].addEventListener('submit', function (e) {
	e.preventDefault();

	if (item.value != '') {
		var newItem = document.createElement('li');

		newItem.innerHTML = item.value;
		tinytodos.appendChild(newItem);
	}

	item.value = '';
}, false);

tinytodos.addEventListener('click', function (e) {
	if (e.target.className == 'deleted') {
		e.target.className = '';
	} else {
		e.target.className = 'deleted';
	}
}, false);
