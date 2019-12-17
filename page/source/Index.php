<?php
require_once '../../assets/require-one.php';
?>

<?php if( $_SESSION['UserLogged'] ): ?>
    <?php if( $_SESSION['ActivatedAccount'] ): ?>
    <!-- Выполнены два условия -->
    <?php else: ?>
        <div class="grid-content" style="display: block;">
            <div class="grid-content__item"><p style="text-align: center;">Активируйте аккаунт!</p></div>
        </div>
    <?php endif; ?>
<?php else: ?>
<div class="grid-content" style="display: block;">
    <div class="grid-content__item"><p style="text-align: center;">Чтобы продолжить, войдите в аккаунт!</p></div>
</div> 
<?php endif; ?>