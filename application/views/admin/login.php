<div id="form_login">
    <h3>Connexion</h3>
    <form action="{site_url('admin/admin/do_login')}" method="post">
        <input class="custom_tf" name="login" type="text" alt="Identifiant"/>
        <input class="custom_tf" name="password" type="password" alt="Mot de passe"/>
        <input class="custom_submit" type="submit" name="logon" value="Connexion"/>
    </form> 
    <p class="forgot_password"><a href="{site_url('admin/admin/forgot_password')}">J'ai oublié mon mot de passe</a></p>
</div>