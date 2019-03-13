<?php
include('header.html');
?>

<!-- CONTENT START -->
<?php
include('navbar.php');
?>

<div class="container d-flex justify-content-center formulaire">
    <form class="mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="yellow" for="inputEmail4">Nom</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="">
            </div>

            <div class="form-group col-md-6">
                <label class="yellow" for="inputPassword4">Prénom</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
            </div>
        </div>

        <div class="form-group">
            <label class="yellow" for="inputAddress">Mail</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
        </div>

        <div class="form-group col-md-12 pForm">
            <label class="yellow" for="inputState">Ton personnage préferé</label>
            <select id="inputState" class="form-control">
                <option selected></option>
                <option>Darth Nihilus</option>
                <option>Darth Sion</option>
                <option>Darth Traya</option>
            </select>
        </div>
        <button type="submit" class="button">Envoyer</button>
    </form>
</div>
<?php
include('footer.html');
?>