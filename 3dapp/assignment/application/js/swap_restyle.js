// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectModel();

	function selectModel() {

		$('#fantaX3d').click(function(){
			$('#fantaVideo').show();
			$('#spriteVideo').hide();
			$('#oasisVideo').hide();
		});

		$('#spriteX3d').click(function(){
			$('#fantaVideo').hide();
			$('#spriteVideo').show();
			$('#oasisVideo').hide();
		});

		$('#oasisX3d').click(function(){
			$('#fantaVideo').hide();
			$('#spriteVideo').hide();
			$('#oasisVideo').show();
		});
	}


});

function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('theme').style.backgroundColor = '#abc4a1';
            document.getElementById('top').style.backgroundColor = '#bbdb9b';
            document.getElementById('footer').style.backgroundColor = '#9db4ab';
            break;
        case 2:
            document.getElementById('theme').style.backgroundColor = '#FFFFFF';
            document.getElementById('top').style.backgroundColor = '#451f55';
            document.getElementById('footer').style.backgroundColor = '#724e91';
            break;
        case 3:
            document.getElementById('theme').style.backgroundColor = '#e8ffb7';
            document.getElementById('top').style.backgroundColor = '#53a2be';
            document.getElementById('footer').style.backgroundColor = '#1d84b5';
            break;
        case 4:
            document.getElementById('theme').style.backgroundColor = '#e2dbbe';
            document.getElementById('top').style.backgroundColor = '#d5d6aa';
            document.getElementById('footer').style.backgroundColor = '#9dbbae';
            break;
        case 5:
            document.getElementById('theme').style.backgroundColor = '#e5d9f2';
            document.getElementById('top').style.backgroundColor = '#f5efff';
            document.getElementById('footer').style.backgroundColor = '#cdc1ff';
        break;
        case 6:
            counter = 0;
            document.getElementById('theme').style.backgroundColor = '#fab3a9';
            document.getElementById('top').style.backgroundColor = '#c6ad94';
            document.getElementById('footer').style.backgroundColor = '#7fb285';
        break;
    }
}

function changeBack() {
    document.getElementById('theme').style.backgroundColor = 'rgba(182, 231, 243, 1.0)';
    document.getElementById('top').style.backgroundColor = 'rgba(175,0,0,1)';
    document.getElementById('footer').style.backgroundColor = 'rgba(175,0,0,1)';
}