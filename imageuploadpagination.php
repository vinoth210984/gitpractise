<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <?php
        include_once('dbcon.php'); // Include the database connection that we created
////// FIRST WE SET UP THE TOTAL IMAGES PER PAGE & CALCULATIONS:
        $per_page = 3; // Number of images per page, change for a different number of images per page
// Get the page and offset value:
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $offset = $page * $per_page;
        }
// Otherwise we render the page and offset as non-existent:
        else {
            $page = 0;
            $offset = 0;
        }

// Count the total number of images in the table ordering by their id's ascending:
        $images = "SELECT count(id) FROM imageupload ORDER by id ASC";
        $result = mysqli_query($db, $images);
        $row = mysqli_fetch_array($result);
        $total_images = $row[0];

// Calculate the number of pages:
        if ($total_images > $per_page) {//If there is more than one page
            $pages_total = ceil($total_images / $per_page);
            $page_up = $page + 2;
            $page_down = $page;
            $display = ''; //leave the display variable empty so it doesn't hide anything
        } else {// Else if there is only one page
            $pages = 1;
            $pages_total = 1;
            $display = ' class="display-none"'; //class to hide page count and buttons if only one page
        }

////// THEN WE DISPLAY THE PAGE COUNT AND BUTTONS:

        echo '<h2' . $display . '>Page ';
        echo $page + 1 . ' of ' . $pages_total . '</h2>'; // Page out of total pages

        $i = 1; // Set the $i counting variable to 1

        echo '<div id="pageNav"' . $display . '>'; // our $display variable will do nothing if more than one page
// Show the page buttons:
        if ($page) {
            echo '<a href="imageuploadpagination.php"><button><<</button></a>'; // Button for first page [<<]
            echo '<a href="imageuploadpagination.php?page=' . $page_down . '"><button><</button></a>'; // Button for previous page [<]
        }

        for ($i = 1; $i <= $pages_total; $i++) {
            if (($i == $page + 1)) {
                echo '<a href="imageuploadpagination.php?page=' . $i . '"><button class="active">' . $i . '</button></a>'; // Button for active page, underlined using 'active' class
            }

// In this next if statement, calculate how many buttons you'd like to show. You can remove to show only the active button and first, prev, next and last buttons:
            if (($i != $page + 1) && ($i <= $page + 3) && ($i >= $page - 1)) {// This is set for two below and two above the current page
                echo '<a href="imageuploadpagination.php?page=' . $i . '"><button>' . $i . '</button></a>';
            }
        }

        if (($page + 1) != $pages_total) {
            echo '<a href="imageuploadpagination.php?page=' . $page_up . '"><button>></button></a>'; // Button for next page [>]
            echo '<a href="imageuploadpagination.php?page=' . $pages_total . '"><button>>></button></a>'; // Button for last page [>>]
        }
        echo '</div>'; // #pageNav end

        echo '<div id="gallery">'; // #gallery div to contain the gallery
// DISPLAY THE IMAGES:
// Select the images from the table limited as per our $offset and $per_page total:
        $result = mysqli_query($db, "SELECT * FROM imageupload ORDER by id ASC LIMIT $offset, $per_page");
        while ($row = mysqli_fetch_array($result)) {// Open the while array loop
// Define the image variable by retrieving the filename from the table:
            $image = $row['file_name'];

// Then we echo our HTML for each image:
            echo '<div class="img-container">';
            echo '<div class="img">';

            echo '<a href="Proposals/' . $image . '">';
            echo '<img src="Proposals/' . $image . '">';
            echo '</a>';

            echo '</div>'; // .img end
            echo '</div>'; // .img-container end
        }// Close the while array loop

        echo '</div>'; // #gallery end

        echo '<div class="clearfix"></div>'; // The clearfix
        ?>

    </body>
</html>