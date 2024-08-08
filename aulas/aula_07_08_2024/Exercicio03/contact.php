<?php include 'index.php' ?>

<div>
    <h2>Contato</h2>
    <form>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>
        <label type="submit" value="Enviar" href="header.php">
        <a href="index.php">Enviar</a>
    </form>
</div>
<?php require 'footer.php' ?>