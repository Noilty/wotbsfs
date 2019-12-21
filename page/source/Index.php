<?php
require_once '../../assets/require-one.php';
?>

<?php if( $_SESSION['UserLogged'] ): ?>
    <?php if( $_SESSION['ActivatedAccount'] ): ?>
    <!-- Выполнены два условия -->
    <?php else: ?>
        <div class="grid-content" style="display: block;">
            <div class="grid-content__item">
                <fieldset>
                    <legend>Внимание</legend>
                    Активируйте аккаунт!
                </fieldset>
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
<div class="grid-content" style="display: block;">
    <div class="grid-content__item">
        <fieldset>
            <legend>Внимание</legend>
            Чтобы продолжить, войдите в аккаунт!
        </fieldset>
    </div>
</div> 
<?php endif; ?>