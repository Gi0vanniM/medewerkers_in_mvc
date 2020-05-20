<?php
// maak een overzicht lijst van ALLE personen

if (isset($employees)) $employees = $employees;

?>
<h1>Overzicht van personen</h1>
<ul>
    <?php foreach ($employees as $employee) { ?>
        <li>
            <!--<span>Karel is 12 jaar</span>-->
            <?php
            // de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
            // het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
            // Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
            // Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
            $employeeString = "[" . $employee['id'] . "] " . $employee['name'] . " is " . $employee['age'] . " jaar.";
            ?>
            <span><?= $employeeString ?></span>
            <a href="<?= URL ?>employee/edit/<?= $employee['id'] ?>">Wijzigen</a> <a
                    href="<?= URL ?>employee/delete/<?= $employee['id'] ?>">Verwijderen</a>
        </li>
    <?php } ?>
</ul>