<?php
echo
"
<nav class='navbar navbar-expand-lg'> <!--Code between nav tags is for the navbar-->
    <div class='container-fluid'> <!--Causes the navbar to expand to fit the width of the viewport-->
        <a class='navbar-brand' href='#'>VisuRank</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
            <!--The 'navbar-toggler' button expands/contracts the navbar when clicked-->
        </button>

        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav ms-auto'> <!--Aligns the buttons to the right-->
                <li class='nav-item'>
                    <a href='list.php' class='nav-link btn' id='list-button'>The List</a>
                </li>

                <li class='nav-item'>
                    <a href='edit.php' class='nav-link btn' id='edit-button'>Edit List</a>
                </li>

                <li class='nav-item'>
                    <a href='games.php' class='nav-link btn' id='games-button'>Games</a>
                </li>

                <li class='nav-item'>
                    <a href='about.php' class='nav-link btn' id='about-button'>About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
?>       