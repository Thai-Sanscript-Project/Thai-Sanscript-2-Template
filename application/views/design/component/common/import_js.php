
<script src="<?php echo_js() ?>/jquery.js"></script>
<script src="<?php echo_js() ?>/bootstrap.min.js"></script>
<script src="<?php echo_js() ?>/jquery.prettyPhoto.js"></script>
<script src="<?php echo_js() ?>/jquery.isotope.min.js"></script>
<script src="<?php echo_js() ?>/main.js"></script>
<script src="<?php echo_js() ?>/wow.min.js"></script>

<?php foreach ($js_file as $value) { ?>
    <script src="<?php echo_js($value); ?>"></script>
<?php } ?>

<?php foreach ($js_embed as $value) { ?>
    <?php $this->load->view($value); ?>
<?php } ?>
