<!DOCTYPE html>
<html lang="en">
<head>
    <?php snippet("html-head") ?>
</head>
<body>
    <div class="site" id="site">
        <header class="siteHeader"></header>

        <main class="siteMain">
            <h1><?= $page->title() ?></h1>
        </main>

        <footer class="siteFooter"></footer>
    </div>

    <?php snippet("html-footer") ?>
</body>
</html>
