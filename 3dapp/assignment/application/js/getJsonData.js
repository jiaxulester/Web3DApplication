$(document).ready(function(){

    //AJAX service request to get the main text data from the json data store
    $.getJSON("../application/model/data.json", function(jsonObj) {
       console.log(jsonObj);
       //Get the home page main text data
       $('#title_fanta').html('<h1>' + jsonObj.pageTextData[0].title + '</h1>');
       $('#subTitle_fanta').html('<p>' + jsonObj.pageTextData[0].subTitle + '</p>');
       
        //Get the home page left column text data
       $('#title_sprite').html('<h1>' + jsonObj.pageTextData[1].title + '</h1>');
       $('#subTitle_sprite').html('<p>' + jsonObj.pageTextData[1].subTitle + '</p>');
       
       //Get the home page centre column text data
       $('#title_oasis').html('<h1>' + jsonObj.pageTextData[2].title + '</h1>');
       $('#subTitle_oasis').html('<p>' + jsonObj.pageTextData[2].subTitle + '</p>');
       
       //Get the home page right column text data
       $('#brand_title_fanta').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>');
       
       //Get the home page right column text data
       $('#brand_title_sprite').html('<h2>' + jsonObj.pageTextData[4].title + '</h2>');

       //Get the home page right column text data
       $('#brand_title_oasis').html('<h2>' + jsonObj.pageTextData[5].title + '</h2>');

       //Get the home page right column text data
       $('#brand_title_more').html('<h2>' + jsonObj.pageTextData[6].title + '</h2>');
    });
});