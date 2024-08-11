<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <header>
            <p class="mb-6"><a href="/notes" class="inline-block rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">go back...</a></p>
        </header>
        <div class="container mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-bold"><?= htmlspecialchars($note['title']); ?></h2>
                <p class="mt-6">
                    <?= nl2br(htmlspecialchars($note['body'])) ?>
                </p>


                <footer class="mt-6">
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
                        <form method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" value="<?= $note['id']; ?>" name="id" class="hidden">
                            <button class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
                        </form>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</main>


<?php require base_path('views/partials/footer.php') ?>