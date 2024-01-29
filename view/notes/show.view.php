<?php require 'view/partial/head.php' ?>
<?php require('view/partial/nav.php');?>
<?php require 'view/partial/banner.php' ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <a href="/notes" class="text-blue-500 hover:underline"> go Back... </a>

              <p><?= htmlspecialchars($note['body']) ?></p>
        </div>
    </main>
</div>

</body>
</html>

