<!-- app/Views/change_password.php -->
<h2>Change Password</h2>

<?php if (isset($errors) && !empty($errors)) : ?>
    <div class="errors">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo esc($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post" action="/change_password">
    <label for="current_password">Current Password:</label>
    <input type="password" name="current_password" id="current_password" />

    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" id="new_password" />

    <label for="confirm_new_password">Confirm New Password:</label>
    <input type="password" name="confirm_new_password" id="confirm_new_password" />

    <button type="submit">Change Password</button>
</form>
