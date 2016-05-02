<?php $this->load->view('frontend/components/page_head'); ?>

    <?php
        if (isset($subview)) {
            $this->load->view($subview);
        }
    ?>

<?php $this->load->view('frontend/components/page_tail'); ?>