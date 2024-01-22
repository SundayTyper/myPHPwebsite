<?php

function go_to_page($filename)
{
    $uri = "http://localhost:8000/" . $filename;
    ?>

        <script type="text/javascript">
        window.location.href = "<?php echo $uri ?>";
        </script>  
    <?php
}

?>
