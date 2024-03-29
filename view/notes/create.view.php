<?php require base_path('view/partial/head.php') ?>
<?php require base_path('view/partial/nav.php') ?>
<?php require base_path('view/partial/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <form method="post" action="/note">
                <label for="body"> Body </label>

                <div>
                    <textarea id="body" name="body" required> <?= $_POST['body'] ?? ''; ?></textarea </textarea>
                    <?php if(isset($errors['body'])) :  ?>
                        <p class="text-red-500 mt-2"> <?= $errors['body'] ?> </p>
                    <?php endif; ?>
                </div>

                <p>
                    <button type="submit"> Submit </button>
                </p>

            </form>

        </div>
    </main>
</div>

</body>
</html>

