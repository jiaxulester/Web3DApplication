

$(document).ready(function() {
    var xmlHttp = new XMLHttpRequest();

    var htmlCode = "";

    var response;

    var send = "scripts/php/hook.php";
    
    xmlHttp.open("GET", send, true);

    xmlHttp.send(null);

    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            // alert(xmlHttp.responseText);

            response = xmlHttp.responseText.split("~");

            for (var i=0; i<response.length; i++) {
                htmlCode += '<a href="'+'gallery_images'+ response[i] +'">';
                htmlCode += '<img src="gallery_images' + response[i] + '" class = "card-img-top img-thumbnail"/>';
                htmlCode += '</a>';
            }
            document.getElementById('gallery_coke').innerHTML = htmlCode;
        }
    }
});