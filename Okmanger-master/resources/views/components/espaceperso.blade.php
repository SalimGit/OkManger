<div class="card">
    <div class="tags has-addons">
        <span class="tag is-info is-light is-large">Mes points</span>
        <span class="tag is-info is-large">0000pts</span>

    </div>
</div>

<div class="container" style="max-width: 927px; margin-left:25%">
    <div class="notification is-info" id="compte">
        <center><strong>Mon compte</strong></center>
    </div>
    <hr>

    <div class="box">
        <div class="field">
            <label class="label">Nom</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Nom">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>

            </div>
        </div>

        <div class="field">
            <label class="label">Prénom</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Prénom">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label class="label">Adresse</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="1 place de la République">
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label class="label">Ville</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Paris">
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Code Postal</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="75003">
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </div>
        </div>
       <center> <div>
            <h1>
                Désactiver Mon Compte
            </h1>
            <br>
            <div style="margin-left: 30%">
                <center><p align="left">
                    Pour désactiver votre compte, vous devez saisir votre mot de passe. <br>

                Si vous avez oublié votre mot de passe ou que vous n'en avez pas, vous <br> pouvez  <a href={{('reset')}} style="color: #1e9ced;"> créer un nouveau mot
                        de passe.</a> </center>
                </p>
            </div></center>
            <br>
            <div class="field">
                <label class="label">Mot de passe</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="password" placeholder="*********">
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="boutonModif">
            <div class="control">
                <button class="button is-info">Enregistrer les modifications</button>
            </div>

        </div>
    </div>
</div><br><br>


<style>
    .notification {
        width: 100%;
        text-align: center;
    }

    .box {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }

    .field {
        width: 50%;
        margin: auto;
    }

    .boutonModif {
        display: flex;
        justify-content: center;
        margin-top: 5%;
    }

    .card {
        position: fixed;
        display: flex;
        margin-left: 1%;
        margin-top: 5%;
        padding: 5px;
    }
    .contanier{}

</style>
