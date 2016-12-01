<?php include 'header.php';?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
                                   
                        </div>

                </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="widgets.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li><a href="forms.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
                <div class="row">
                    <div class="col-lg-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                VENDORS
                            </div>
                            <form method="post" id="uploadForm" action="imageupload.php" enctype="multipart/form-data">
                            <div class="panel-body" style="height: 280px; overflow-y: scroll;">
                                
                                <label >Product Image</label><input name="files[]" id="files1" type="file" multiple="true" onchange="previewFile()"><br>
                                </br>
                            </div>
                            <div class="panel-footer">
                                <input type="submit" value="Submit"  />
                            </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
		
	</div>	<!--/.main-->
        <script>
            $(document).ready(function() {
                var numFiles = $("input:file")[0].files.length;
                
                if(window.File && window.FileList && window.FileReader && numFiles<=3) {
                   
                    $("#files1").on("change",function(e) {
                        
                        var files = e.target.files, 
                        filesLength = files.length ;
                       
                            for (var i = 0; i < filesLength ; i++) {
                                var f = files[i]
                                var fileReader = new FileReader();
                                fileReader.onload = (function(e) {
                                    var file = e.target;
                                    $("<img ></img>",{
                                        class : "imageThumb",
                                        src : e.target.result,
                                        width: 100,
                                        height:100,
                                        title : file.name
                                    }).insertAfter("#files1");
                                });
                                fileReader.readAsDataURL(f);
                            }
                        
                    });
                   
                }else {
                    alert("Your browser doesn't support to File API") 
                }
            });
            
        
           $(document).ready(function(){
             if(filesLength<=3){
               $('#uploadForm').on('submit',function(e){
                   e.preventDefault();
                   $.ajax({
                       url:"imageupload.php",
                       type:"POST",
                       data:new FormData(this),
                       contentType:false,
                       processData:false,
                       success:function(data){
                           alert(data);
                       }
                   });
               });
            }
            else{
                alert("Please select less than 3");
            }
           });
                
                
               
        
        </script>
		  
<?php include 'footer.php';?>