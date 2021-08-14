<?php


function teamShow( ){

    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM team");
    $count=1;


    while($row = mysqli_fetch_array($query) ){

        
        if ($count <3){


            $id = $row['teamID'];
            $devname = $row['teamName'];
            $teamdesc = $row['teamDes'];

            
            $image = $row['teamImage'];


            echo "<div class='col'>";
            echo     "<div class='card h-100'>";
            echo     '<img class="card-img-top" src="data:image/jpeg;base64,' .base64_encode( $image ). '  alt="sdfg">';
            echo     "<div class='card-body'>";
            echo         "<h4 class='card-title'>{$devname}</h4>";
            echo        "<p class='card-text'>{$teamdesc}</p>";

            echo         "<section class='mb-4'>";
                
            echo             "<a class='btn btn-outline-light socialBtn btn-floating m-1' href='http://facebook.com' role='button'><i class='fab fa-facebook-f'></i></a>";
            echo             "<a class='btn btn-outline-light socialBtn btn-floating m-1' href='http://twitter.com' role='button'><i class='fab fa-twitter'></i></a>";
            echo             "<a class='btn btn-outline-light socialBtn btn-floating m-1' href='http://instagram.com' role='button'><i class='fab fa-instagram'></i></a>";
            echo             "<a class='btn btn-outline-light socialBtn btn-floating m-1' href='http://github.com' role='button'><i class='fab fa-github'></i></a>";

            echo         "</section>";
                    
            echo     "</div>";
            echo     "</div>";
            echo "</div>";
        
        }

        $count++;




        


        
    }
    
}

?>