<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close="data-micromodal-close">
        <div class="modal__container" role="dialog" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <h2 class="modal__title" id="modal-1-title"><?php echo esc_html($modalData['modal_title']); ?></h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close="data-micromodal-close"></button>
            </header>
            <main class="modal__content" id="modal-1-content"><?php echo $modalData['modal_content']; ?></main>
            <footer class="modal__footer">
                <a class="modal__btn modal__btn-primary" href="<?php echo esc_url($modalData['cta_link_url']); ?>"><?php echo esc_html($modalData['cta_link_text']); ?></a>
                <button id="js-dismiss-alert" class="modal__btn" aria-label="Dismiss this alert for 5 days" data-micromodal-close="data-micromodal-close">Dismiss Alert For 5 Days</button>
            </footer>
        </div>
    </div>
</div>