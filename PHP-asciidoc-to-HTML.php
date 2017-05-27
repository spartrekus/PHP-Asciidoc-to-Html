
<?php
// VISUAL but it can be copied directly to a destination file (fileout)
// filein
$handle = fopen("webpage.asc", "r"); 
if ($handle) 
{
    while (($line = fgets($handle)) !== false) 
    {
        // clean a bit the vars
        fskip = 0;
        $charo="";
        $strout="";

        // process the line (read one, with lf)
	// header <h1>
	if ( fskip == 0 )
        if ( $line[0] == '=' ) 
        if ( $line[1] == '=' )
        if ( $line[2] == ' ' ) 
	{
	   echo "<h1>";
           for ($i=3; $i < strlen($line) ; $i++)
	   {
	       $charo = $line[$i]; //@didier: this PHP line is awful!!!! This might work in PHP but certainly never in C (shall snprintf!!)
               $strout = $strout . $charo;   
	   }
	   echo $strout; 
	   echo "</h1>";
	   echo "</br>";
	   // here you can print it to echo (stdout) or directly to fputs to a give HTML file ;) (@this is for didier)
	   fskip=1;
	}


	if ( fskip == 0 )
        if ( $line[0] == '>' ) 
        if ( $line[1] == '>' )
        if ( $line[2] == ' ' ) 
	{
	   echo "<b>";
           for ($i=3; $i < strlen($line) ; $i++)
	   {
	       $charo = $line[$i]; //@didier: this PHP line is awful!!!! This might work in PHP but certainly never in C (shall snprintf!!)
               $strout = $strout . $charo;   
	   }
	   echo $strout; 
	   echo "</b>";
	   echo "</br>";
	   // here you can print it to echo (stdout) or directly to fputs to a give HTML file ;) (@this is for didier)
	   fskip=1;
	}

        
    }

    fclose($handle);
} 
else 
{
    // error opening the file.
} 
?>

