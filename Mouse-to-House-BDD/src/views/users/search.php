<h1><?= $data['title'] ?? 'Users' ?></h1>
<ul>
    <?php foreach ($data['users'] as $user): ?>
        <li><?= $user['name'] ?></li>
    <?php endforeach; ?>
</ul>
