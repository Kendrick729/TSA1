<?= view('templates/header') ?>

<h1>Tasks for Today</h1>
<p>Here are the tasks scheduled for <?= esc(date('F j, Y')) ?>.</p>

<?php if (empty($tasks)): ?>
    <p>No tasks are scheduled for today.</p>
<?php else: ?>
    <table>
        <tr>
            <th>Title</th>
            <th>Status</th>
        </tr>

        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?= view('templates/footer') ?>