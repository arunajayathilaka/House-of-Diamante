<?php
    require 'init.php';
    if(isset($_POST['searchcri'])){
        $sqltablese = "SELECT * FROM quotation WHERE item_type = '{$_POST['searchcri']}'";
        $restablese = mysql_query($sqltablese);
        $count = mysql_num_rows($restablese);
        $searchres = null;
        while($rowtablese= mysql_fetch_array($restablese)){
            $searchres[] = $rowtablese;
        }
        if($count>0){
            foreach($searchres as $searchitems){
                $tab = '<table class="table table-hover">
                            <tr id="'.$searchitems['id'].'" >
                                <th class="tableheader" data-field="state" data-checkbox="true" data-formatter="starsFormatter" style="width:200px;">
                                    <input class="chk2" type="checkbox" onclick="check();" name="item2" value="'.$searchitems["id"].'"/>
                                </th>
                                <td class="tableheader" style="width:400px;">Qutaion for :'.$searchitems['full_name'].'</td>
                                <td style="width:40px;"><button class="btn btn-primary" value="'.$searchitems['id'].'" onclick="viewquota('.$searchitems['id'].'); readmodal('.$searchitems['id'].');"  data-toggle="modal" data-target="#read">View  </button></td>
                                <td style="width:40px;"><button class="btn btn-primary">Accept</button></td>
                                <td style="width:40px;"><button class="btn btn-primary">Reject</button></td>
                            </tr>
                        </table>';
            $table = "{$tab}";
            echo $table;
            } 
        }
        
        
    }
?>