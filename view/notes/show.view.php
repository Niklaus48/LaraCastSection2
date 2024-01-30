<?php require base_path('view/partial/head.php') ?>
<?php require base_path('view/partial/nav.php') ?>
<?php require base_path('view/partial/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <a href="/notes" class="text-blue-500 hover:underline"> go Back... </a>

              <p><?= htmlspecialchars($note['body']) ?></p>

            <form method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value=<?= $note['id'] ?>>
                <button type="submit" class="text-red-500 mt-6 hover:underline"> delete </button>
            </form>
        </div>
    </main>
</div>

</body>
</html>

