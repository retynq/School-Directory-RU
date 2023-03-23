<?php
    include_once "mysqlConnect.php";
    function generation_head_menu ($mysqli) {
        $sql = "SELECT * FROM `topic`";
        $resSQL = $mysqli -> query($sql);
        ?>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">Navbar</a>
                <ul class="navbar-nav mr-auto">
                    <?php
                        while ($rowTopic = $resSQL -> fetch_assoc()) {
                            echo '<li class="nav-item"><a class="nav-link" href="./topic.php?id_topic='. $rowTopic["id"] .'">'. $rowTopic['name'].'</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </header>
        <?php
    }