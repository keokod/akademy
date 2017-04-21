//fichier pour récupérer le REST de l'api dailymotion

$(function () {
    $('#charger').click(function () {
        $.getJSON('https://api.dailymotion.com/videos?fields=id,&search=videogames&limit=5', function (donnees) {
            var chaineHtml = '';
            for (var i = 0; i < donnees.list.length; i++) {
                chaineHtml += '<a href="detail.php\?idDaily=' + donnees.list[i]["id"] + '"><img src="http://www.dailymotion.com/thumbnail/video/' + donnees.list[i]["id"] + '"></a><hr/>';
                //  console.log(chaineHtml);
                //chaineHtml+='	<img src="www.dailymotion.com/thumbnail/video/'+donnees.list[i]["id"]+"/>';
            }
            ;

            localStorage.setItem('chaineHtml', chaineHtml);
            //$('#miniature').append(chaineHtml);
        });

    });


});

//console.log(localStorage.getItem('chaineHtml'));
document.write(localStorage.getItem('chaineHtml'));