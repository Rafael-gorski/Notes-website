<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-semibold mb-4">All my notes:</h2>
                <ul>
                    <?php foreach ($notes as $note): ?>
                        <li>
                            <a href="/note?id=<?= $note['id'] ?>" class="mt-06 text-grey-500 underline">
                                <?= htmlspecialchars($note['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <p class="mt-6">
                    <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
                </p>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
