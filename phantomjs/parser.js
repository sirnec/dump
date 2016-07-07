
var page = require('webpage').create();

page.onConsoleMessage = function (msg) {
    console.log(msg);
};

var link = 'https://www.google.ru/search?q=phantomjs&newwindow=1&espv=2&biw=1301&bih=613&source=lnms&tbm=isch&sa=X&ved=0ahUKEwilisOdoOHNAhWFfywKHXouCJ0Q_AUIBygC';

page.open(link, function (status) {

    if (status == 'success') {
        page.evaluate(function () {
            var images = document.getElementsByTagName('img');

            for (var i = 0; i < images.length - 1; i++) {
                console.log(images[i].src);
            }
        });

        page.render(Math.random() + '.png');
    }

    phantom.exit();
});