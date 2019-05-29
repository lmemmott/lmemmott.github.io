<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Update rptrraw.txt</title>
</head>
<body>
    By accessing this web page the rptrraw.txt data file is forced to updated from the master copy from 
	<a href="http://utahvhfs.org/rptrraw.txt">http://utahvhfs.org/rptrraw.txt</a>.
    <br /><br />
    <hr />
    Results:<br />
    <?php 
        $myVariable = "Hello World";
        echo "$myVariable";
        echo "<br />";

        $lastline = system('rm rptrraw.txt', $retval);
        echo "Deleted the existing rptrraw.txt<br />";
        echo "Last line:  $lastline <br />";
        echo "Return Value:  $retval <br /><br />";

        $lastline = system('wget http://utahvhfs.org/rptrraw.txt ~', $retval);
        echo "Dowloaded the latest version from utahvhfs.org<br />";
        echo "Last line:  $lastline <br />";
        echo "Return Value:  $retval <br /><br />";
		
		$lastline = system('touch rptrraw.txt', $retval);
		echo "Updated timestamp on file.<br />";
		echo "Last line:  $lastline <br />";
		echo "Return Value:  $retval <br />";
    ?>
</body>
</html>
