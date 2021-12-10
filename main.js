document.body.onload = function () {

    setTimeout(function() {
        let preloader = documen.getElementById('page-preloader');
        if (!preloader.classList.contains('done')){
            preloader.classList.add('done');
        }
    }, 1000);
}