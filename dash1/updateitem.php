<?php
    require 'init.php';
    
    if(isset($_POST['updateitem'])){
        $sql10 = "SELECT * FROM product_items WHERE item_id='{$_POST['updateitem']}'";
        $result10 = mysql_query($sql10);
        $upitem = mysql_fetch_array($result10, MYSQL_ASSOC);
        
        $re ='
                <div class="row">
                    <input type="hidden" class="hidevalue" name="index" value="'.$upitem['item_id'].'"/>
                </div>
                <div class="row">
                    <div class="col-lg-3">Product Name</div>
                    <div class="col-lg-9">

                        <input class="form-control"type="text" name="pname" value="'.$upitem['product_name'].'"/>

                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-lg-3">Product Type</div>
                    <div class="col-lg-9">
                        <input class="form-control"type="text" name="ptype" value="'.$upitem['product_type'].'"/>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-lg-3">Product price</div>
                    <div class="col-lg-9">
                        <input class="form-control"type="text" name="pprice" value="'.$upitem['product_price'].'"/>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-lg-3">Product Discription</div>
                    <div class="col-lg-9">
                        <textarea class="form-control"type="text" name="pdis">'.$upitem['product_dec'].'</textarea>
                    </div>
                </div>
                </br>
                <div >
                    <label >Product Image</label><input name="pimage" type="file" onchange="readURL(this,'.$upitem['item_id'].');"><br>
                    <div><img src="'.$upitem['image_url'].'" height="200"  id="itemimage'.$upitem['item_id'].'" alt="Image preview..."></div>        
                </div>
                <div class="modal-footer">
                    <input type="submit" name="updateddetails" id="uploaddetails" value="upload">
                </div>
            ';
        
        $replace = "{$re}";
        echo $replace; 
    }
?>