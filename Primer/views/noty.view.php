<?php if(hasFlash('noty')): ?>
    <?php
    $data = getFlash('noty');
    ?>
    <script>
        swal("<?= $data['title'] ?>", "<?= $data['message'] ?>", "<?= $data['type'] ?>");
    </script>
<?php endif; ?>