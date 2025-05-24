<?php require ('partials/header.php')?>
<?php require ('partials/nav.php') ?>
<?php require ('partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note) : ?>
                <p><?= $note['body'] ?></p>
            <?php endforeach; ?>
        </div>
    </main>
</div>

</body>
</html>