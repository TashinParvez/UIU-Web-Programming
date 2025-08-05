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
    $n = $_POST['n'];
    echo "<table border=1>";
    for($i=1;$i<=$n;$i++){
        echo "<tr>";
        for($j=1;$j<=$n;$j++){
            if($i%2 == 1){
                if($j%2 == 1){
                    echo "<td style='background-color:black'></td>";   
                }
                else{
                    echo "<td style='background-color:white'></td>";     
                }
            }
            else{
                if($j%2 == 1){
                    echo "<td style='background-color:white'></td>";   
                }
                else{
                    echo "<td style='background-color:black'></td>";     
                }
            }
            
             
        } 
        echo "</tr>";
    }
    echo "</table>";
   

?>