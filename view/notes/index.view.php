<?php require base_path('view/partial/head.php') ?>
<?php require base_path('view/partial/nav.php') ?>
<?php require base_path('view/partial/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
           <?php foreach ($notes as $note): ?>

           <li>
               <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
               <?= htmlspecialchars($note['body']) ?>
               </a>
           </li>

            <?php endforeach;?>

            <p class="mt-6">
                <a href="/notes/create" class="text-blue-500 hover:underline">
                    *Create New Note
                </a>
            </p>

        </div>
    </main>
</div>

</body>
</html>

