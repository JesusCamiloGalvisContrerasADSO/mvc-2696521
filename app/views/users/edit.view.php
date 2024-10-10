<form action="POST">
  <div>
    <label for="email">email</label>
    <input type="text" id="email" name="email" value="<?= $data['user']["email"] ?>">
  </div>
  <div>
    <label for="username">usuario</label>
    <input type="text" id="username" name="username" value="<?= $data['user']["username"] ?>">
  </div>
  <div>
    <label for="password">email</label>
    <input type="password" id="password" name="password" >
  </div>
  <button type="submit">Actualizar</button>
</form>