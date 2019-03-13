<?php
// si le nom de la page est : contact.php
if(basename($_SERVER['PHP_SELF']) == "contact.php")
{
    echo "<body class='black contact'>";
}

else
{
    echo "<body class='black'>";
}
?>

<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-inverse black col-md-12 ">
            <div class="container">
                <a href="index.php" class="navbar-brand"><img src="./img/logo.png" alt="Logo Star Wars"></a>

                <ul class="nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="darthNihilus.php">DARTH NIHILUS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="darthSion.php">DARTH SION</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="darthTraya.php">DARTH TRAYA</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>