$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '2041312891',
        limit: 8,
        resolution: 'standard_resolution',
        accessToken: '2041312891.1677ed0.176fffe4fb8e4413a211f01e1cf011d1',
        sortBy: 'most-recent',
        template: '<li><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></li>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});