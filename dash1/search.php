<?php
    require 'init.php';
   
    
    if(isset($_POST['se'])){
        $sqlsearch="SELECT *  FROM product_items WHERE  product_type LIKE '%{$_POST['se']}' ";
        $resultsearch=  mysql_query($sqlsearch);
        $count = mysql_num_rows($resultsearch);
        $searchitems = null;
        while($rowres=mysql_fetch_array($resultsearch)){
              $searchitems[]=$rowres;
        }
        if($count>0){
                     
                foreach ($searchitems as $searchdetails){
                    
                $se = '<div class="col-sm-5" id="'.$searchdetails["item_id"].'">
                       
                    <div class="thumbnail" style="border:1px solid #30a5ff">
                            <div class="row" id="item">
                                <div class="col-lg-6">
                                    <img alt="images" src="'.$searchdetails['image_url'].'" style="width:175px ;height:150px;" class="img-responsive"/><br/>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>'.$searchdetails['product_name'].'</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>'.$searchdetails['product_type'].'</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>'.$searchdetails['product_dec'].' </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>'.$searchdetails['product_price'].'</p>
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-12"  >
                                    <button class="btn btn-primary pul-left updateitemdetails" style="float:right;" data-toggle="modal"  value="'.$searchdetails["item_id"].'" data-target="#updatedetails">Update</button>
                                    <input class="chk" type="checkbox"  name="item_id[]" value="'.$searchdetails["item_id"].'" style="float:left;"/>
                                </div>
                            </div>
                        </div>

                    </div>';
                
                $sear = "{$se}";
                echo $sear ;
                }
           
        }
    }
    


?>