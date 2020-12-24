<html>
<body>
<?php
    function data ($date = "2020-01-28")
    {
        return date("d.m.y", strtotime($date));
    }
    data ();
?>
</body>
</html>