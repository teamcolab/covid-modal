document.addEventListener("DOMContentLoaded", function(event) {
    // Make a JS call to get modal content
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/wp-json/covid-modal/v1/content');
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Get the modal content from WordPress options page
            var htmlContent = JSON.parse(xhr.responseText);

            var modal_html_container = document.createElement( 'div' );
            modal_html_container.innerHTML = htmlContent;

            var modal_body = document.getElementsByTagName("body")[0];
            modal_body.insertBefore( modal_html_container, modal_body.firstChild );

            var COLABCookies = Cookies.noConflict()
            var COLABcovidDismiss = document.getElementById('js-dismiss-alert');
            COLABcovidDismiss.onclick = function() {
                COLABCookies.set('dismiss-alert', true, { expires: 5 });
            }


            if (!COLABCookies.get('dismiss-alert')) {
                MicroModal.init({
                    // onShow: modal => console.info(`${modal.id} is shown`), // [1]
                    // onClose: modal => console.info(`${modal.id} is hidden`), // [2]
                    openTrigger: 'data-custom-open', // [3]
                    closeTrigger: 'data-custom-close', // [4]
                    disableScroll: true, // [5]
                    disableFocus: false, // [6]
                    awaitCloseAnimation: false, // [7]
                    debugMode: true // [8]
                });
                MicroModal.show('modal-1');
            }
        }
    };
    xhr.send();
});