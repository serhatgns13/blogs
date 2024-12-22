<?php if (isset($_SESSION['success_message']) || isset($_SESSION['error_message']) || isset($_SESSION['warning_message'])): ?>

    <script>
        <?php if (isset($_SESSION['success_message'])): ?>
            showSuccessMessage("<?php echo $_SESSION['success_message']; ?>");
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            showErrorMessage("<?php echo $_SESSION['error_message']; ?>");
        <?php endif; ?>

        <?php if (isset($_SESSION['warning_message'])): ?>
            showWarningMessage("<?php echo $_SESSION['warning_message']; ?>");
        <?php endif; ?>
    </script>

    <?php unset($_SESSION['success_message'], $_SESSION['error_message'], $_SESSION['warning_message']); ?>
<?php endif; ?>