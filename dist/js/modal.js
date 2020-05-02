document.addEventListener("DOMContentLoaded", function(event) {
    // Make a JS call to get modal content
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/wp-json/covid-modal/v1/content');
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Get the modal content from WordPress options page
            var modalData = JSON.parse(xhr.responseText);

            // Build the modal HTML structure
            var htmlContent = '';
            htmlContent += '<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">';
            htmlContent += '<div class="modal__overlay" tabindex="-1" data-micromodal-close="data-micromodal-close">';
            htmlContent += '<div class="modal__container" role="dialog" aria-labelledby="modal-1-title">';
            htmlContent += '<header class="modal__header">';
            htmlContent += '<h2 class="modal__title" id="modal-1-title">' + modalData['modal_title'] + '</h2>';
            htmlContent += '<button class="modal__close" aria-label="Close modal" data-micromodal-close="data-micromodal-close"></button>';
            htmlContent += '</header>';
            htmlContent += '<main class="modal__content" id="modal-1-content">' + modalData['modal_content'] + '</main>';
            htmlContent += '<footer class="modal__footer">';
            htmlContent += '<a class="modal__btn modal__btn-primary" href="' + modalData['cta_link_url'] + '">' + modalData['cta_link_text'] + '</a>';
            htmlContent += '<button id="js-dismiss-alert" class="modal__btn" aria-label="Dismiss this alert for 5 days" data-micromodal-close="data-micromodal-close">Dismiss Alert For 5 Days</button>';
            htmlContent += '</footer>';
            htmlContent += '</div>';
            htmlContent += '</div>';
            htmlContent += '</div>';

            var modal_html_container = document.createElement( 'div' );
            modal_html_container.innerHTML = htmlContent;

            var modal_body = document.getElementsByTagName("body")[0];
            modal_body.insertBefore( modal_html_container, modal_body.firstChild );

            var COLABCookies = Cookies.noConflict()
            var COLABcovidDismiss = document.getElementById('js-dismiss-alert');
            console.log('Cookie Status: ' + COLABCookies.get('dismiss-alert'));
            COLABcovidDismiss.onclick = function() {
                COLABCookies.set('dismiss-alert', true, { expires: 5 });
                console.log('Cookie Status: ' + COLABCookies.get('dismiss-alert'));
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
                console.log('Modal fired');
            }
        }
    };
    xhr.send();
});