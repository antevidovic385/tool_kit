<?php
    use App\Helpers\Translate_helper;
?>
<main>
    <div class="container" style="margin:20px">
        <?php echo Translate_helper::translate('Thank you')?>
        <?php
            echo '<pre>';
            print_r($account);
            echo '</pre>';
        ?>
    </div>
</main>
