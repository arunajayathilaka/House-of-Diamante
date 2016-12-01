<?php include'header.php'?>
<?php include 'ProductDetails.php'?>
<?php include 'search.php'?>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><img src="img/logo2.png" class="img-responsive" style="height:100px; width:190px;margin-top: -15px;"></a>
                                <ul class="list-inline" style="float: right ;padding-top: 15px;">
                                    <li style="color: #E1E1E1;"><?php echo $_SESSION['login_user']?></li>
                         
                                </ul>     
                        </div>

                </div><!-- /.container-fluid -->
        </nav>
        
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Juwellery</a></li>
			<li><a href="tables.php"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg>Message</a></li>
			<li><a href="forms.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
			<li><a href="panels.php"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"></use></svg>Chat</a></li>
                       <li><a href="logout.php" style="text-decoration: none !important; cursor:pointer; margin-right:10px;" id="signin"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                </ul>
                
        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active">Juwelery</li>
                </ol>
            </div><!--/.row-->
            <br/>
            <br/>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-lg-3 hidden-xs" >
                                    <button  class="btn btn-lg btn-primary  glyphicon glyphicon-refresh" id="juwel" onclick="load();" ></button>
                                    <button class="btn btn-lg btn-primary glyphicon glyphicon-plus"data-toggle="modal" data-target="#add" ></button>
                                    <button class="btn btn-lg btn-primary glyphicon glyphicon-trash " name="del" id="del" onclick="deleteitem();"></button>
                                </div>
                                <div class="col-lg-3 visble-xs hidden-lg hidden-md hidden-sm" >
                                    <button  class="btn btn-sm btn-primary  glyphicon glyphicon-refresh" id="juwel " onclick="load();"></button>
                                    <button class="btn btn-sm btn-primary glyphicon glyphicon-plus"data-toggle="modal" data-target="#add" ></button>
                                    <button class="btn btn-sm btn-primary glyphicon glyphicon-trash "  name="del" onclick="deleteitem();" id="del" ></button>
                                </div>
                            
                            
                                <div class="col-lg-5 hidden-md hidden-sm hidden-xs" style="float:right; margin-top:5px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control searchtext"  placeholder="Search" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary  glyphicon glyphicon-search" id="search" type="button" onclick="search();" style="margin-top:-13px;"></button>
                                        </span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-xs-5 visble-xs hidden-lg " style="float:right; margin-top: -37px;">
                                    <div class="input-group" >
                                        <input type="text" class="form-control searchtext"  placeholder="Search" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary  glyphicon glyphicon-search search" id="search" type="button" onclick="search();"style="margin-top:-13px;"></button>
                                        </span>
                                    </div>
                                </div>
                            
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row" id="juwellery">
              
                <?php
                $sql7 = "SELECT vendor_name FROM vendor WHERE vendor_email= '{$_SESSION['login_user']}'";
                $res7 = mysql_query($sql7);
                $row7 = mysql_fetch_array($res7,MYSQLI_ASSOC);
                
                $sql2 = "SELECT * FROM product_items  WHERE vendor_username = '{$row7['vendor_name']}'";
                $res2 = mysql_query($sql2);
                $product1 = null;
                while($row2=mysql_fetch_array($res2)){
                     $product1[]=$row2;
                }
               
                
                ?>
               
                <?php 
                 if(count($product1)>0){
                     
                foreach ($product1 as $productdetails): ?>
                    
                <div class="col-sm-5" id="<?php echo $productdetails["item_id"];?>">
                       
                    <div class="thumbnail" style="border:1px solid #30a5ff">
                            <div class="row" id="item">
                                <div class="col-lg-6">
                                    <img alt="images" src="<?php echo "{$productdetails['image_url']}"; ?>" style="width:175px ;height:150px;" class="img-responsive"/><br/>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4><?php echo "{$productdetails['product_name']}" ?></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><?php echo "{$productdetails['product_type']}" ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><?php echo "{$productdetails['product_dec']}" ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>Rs.<?php echo "{$productdetails['product_price']}" ?>.00</p>
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-12"  >
                                    <button class="btn btn-primary pul-left updateitemdetails" style="float:right;" data-toggle="modal"  value="<?php echo $productdetails["item_id"];?>" data-target="#updatedetails">Update</button>
                                    <input class="chk" type="checkbox"  name="item_id[]" value="<?php echo $productdetails["item_id"];?>" style="float:left;"/>
                                    <?php echo $productdetails["item_id"];?>
                                </div>
                            </div>
                        </div>

                    </div>
                 <?php endforeach; }
                 else{
                     echo 'YOU CAN ADD JUWELLERY ITEMS USING  "+"'  ;
                 }?>
            </div> 
            
            
        </div>	<!--/.main-->
        <script>
            function search(){
                var sname=$('#searchtext').val();
                alert(sname);

                $.ajax({
                    url:'search.php',
                    method:'POST',
                    data:{se: sname},
                    success:function(data){
                        $('#searchtext').val("");
                        $('#juwellery').html(data);
                        alert("done");
                        check();
                    }
                });
           
            }
        </script>
        
            
        <script type="text/javascript">
                
                
                
                function deleteitem(){
                    $(document).ready(function(){
                       
                            if(confirm("Are you sure you want to delete these items")){
                                var id =[];
                                $(':checkbox:checked').each(function(i){
                                    id[i]= $(this).val();
                                });

                                if(id.length === 0){    
                                }else{   
                                    var jsonString = JSON.stringify(id);
                                    $.ajax({
                                        url:'ProductDetails.php',
                                        method:'POST',
                                        data:{id:jsonString},
                                        success:function(){
                                            for(var i=0; i<id.length ;i++){
                                                $('div#'+id[i]+'').fadeOut('slow');
                                                $('#del').attr('disabled',true);
                                            }
                                        }
                                    });
                                }
                            }else{
                                return false;
                            }
                        
                    });
                    
                    
                    
                }
               
                
                $(document).ready(function(){
                    $('.updateitemdetails').click(function(){
                        var updateitem= $(this).val(); 
                        alert(updateitem);
                        $.ajax({
                            url:'updateitem.php',
                            method:'POST',
                            data:{updateitem:updateitem},
                            success:function(data){
                                $('#updatemodal').html(data);
                            }
                        });
                        
                    });
                });
                function check(){
                    $(document).ready(function(){
                        $('#del').prop("disabled", true);
                        $('input:checkbox').click(function() {
                            if ($(this).is(':checked')) {
                                $('#del').prop("disabled", false);
                            } else {
                            if ($('.chk').filter(':checked').length < 1){
                                $('#del').attr('disabled',true);}
                            }
                        });
                    });
                    
                }
                check();
                
                function load(){
                    $(document).ready(function(){
                            $("#juwellery").load('charts.php #juwellery');
                            location.reload();  
                     });

                }
                
                function readURL(input,ci) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                          $('#'+'itemimage'+ci)
                            .attr('src', e.target.result);

                        };
                        reader.readAsDataURL(input.files[0]);
                  }
                }
                
                
               
        </script>
        
        <!--  modal for add button-->

        <div class="modal fade" role="dialog" data-toggle="modal" id="add" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <span class="glyphicon glyphicon-envelope"></span>
                        <h4>Upload Items</h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-3">Product Name</div>
                                <div class="col-lg-6">
                                    <input class="form-control"type="text" name="proname"/>
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-lg-3">Product Type</div>
                                <div class="col-lg-5">
                                    <select class="form-control" name="protype">
                                        <option value="ring">Ring</option>
                                        <option value="Neckles" >Necklaces</option>
                                        <option value="Bangle" >Bangle</option>
                                        <option value="Braselet">Bracelet</option>
                                    </select>
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-lg-3">Product price</div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">Rs</div>
                                          <input class="form-control"type="text" name="proprice"/>
                                          <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-lg-3">Product Discription</div>
                                <div class="col-lg-6">
                                    <textarea class="form-control"type="text" name="prodis"></textarea>
                                </div>
                            </div>
                            </br>
                            <div >
                                <label >Product Image</label><input name="proimage" type="file" onchange="previewFile()"><br>
                                <div><img src="" height="200" id="itemimage"alt="Image preview..."></div>        
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="upload" value="upload">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--end  modal for add button-->
        <!--modal for update button -->
        <div class="modal fade" role="dialog" data-toggle="modal" id="updatedetails" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <span class="glyphicon glyphicon-envelope"></span>
                        <h4>Upload Items</h4>
                    </div>
                    <div class="modal-body" >

                        <form method="post" action="ProductDetails.php" enctype="multipart/form-data">
                            <div id="updatemodal">
                                <!--content of this model is added using ajax and those details are in updateitem.php -->
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--end  modal for update button-->
        <script >
            document.getElementById("myText").placeholder = document.getElementById("myText");
            
        </script>
        
        <script>
            function previewFile(){
                var preview = document.querySelector('#itemimage'); //selects the query named img
                var file    = document.querySelector('input[type=file]').files[0]; //sames as here
                var reader  = new FileReader();

                reader.onloadend = function () {
                    preview.src = reader.result;
                }

                if (file) {
                    reader.readAsDataURL(file); //reads the data as a URL
                } else {
                    preview.src = "";
                }
            }

            previewFile();  //calls the function named previewFile()
        </script>
<?php include 'footer.php'?>