<form action="<?php echo APP_URL; ?>users/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $users["id"]; ?>">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $users["username"]; ?>">
    </p>
    <p>
        <label for="new_password">Password</label>
        <input type="password" name="new_password">
    </p>
    <p>
        <label for="rol">ROL:</label>
        <input type="text" name="rol" value="<?php echo $users["rol"]; ?>">
    </p>
    <p>
        <input type="submit" value="update">
    </p>
</form>
