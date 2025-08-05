<style>
    table,td{
        border-collapse:collapse;
    }
    td{
        height:15px;
        width:15px;
    }
</style>
<?php 
    $flag=0;
    $n = $_POST['n'];
    echo "<table border=1>";
    for($i=1;$i<=$n;$i++){
        echo "<tr>";
        for($j=1;$j<=$n;$j++){
            if($flag==0){
                echo "<td style='background-color:black'></td>";
                $flag=1;
            }
            else{
                echo "<td style='background-color:white'></td>";
                $flag=0;
            }
            
        } 
        echo "</tr>";
        if($flag==1){
            $flag=0;
        }
        else{
            $flag=1;
        }
    }
    echo "</table>";
   

?>