<?php if ($iframe): ?>
    <figure<?= attr(['class' => $attrs->css()->value() . ' responsiveEmbed'], ' ') ?>>
        <?= $iframe ?>
        <?php if ($attrs->caption()->isNotEmpty()): ?>
            <figcaption><?= $attrs->caption() ?></figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>
