<?= view('templates/header') ?>

<h1>User Accounts</h1>
<p>Below are the user records retrieved from the database.</p>

<table>
    <tr>
        <th>Username</th>
        <th>Full Name</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?= view('templates/footer') ?>
