<form method="POST" action="<?php esc_url($_SERVER['REQUEST_URI']) ?>">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="prenom">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="message">Tapez votre message</label>
    <textarea name="message" id="" cols="30" rows="10"></textarea> <br>
    <button type="submit">Valider</button>
</form>