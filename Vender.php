<?php require_once 'init.php';?>


<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vendor-Dashboard</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Bootstrap Core JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 

  <!-- Custom CSS -->
  <!--link href="css/thumbnail-gallery.css" rel="stylesheet"-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/vender.css">
  <style>
    body{
          background-image: url(img/bg5.jpg);
		  background-repeat:repeat;
      }
  </style>
</head>

          <?php include 'headnav.php';?>

        
            <!--end row 3-->
            <!-- row 4  -->
            <div class="row ">

              <div class="col-sm-2 s" id="profile-picture">
                <!-- profile picture-->
                <div class="row">
                  <div class="col-sm-12">
				  
                    <img class="img-responsive " style="border:1px solid black; margin-left:7px;margin-top:10px; height:30%;" alt="Cinque Terre" id="vender-picture" src="img/als-images/cjs.png" >
				 
                  </div>
                </div>
                <!--vendor facts -->

                <div class="row">
                  <div class="col-sm-12" id="vender-facts">
                    <?php
                      require_once 'init.php';
                      $sql = "SELECT * FROM vendor WHERE vendor_username='cji210'";
                      $result = mysql_query($sql);
                      while($row1 = mysql_fetch_array($result)){
						  $row=$row1;
					  }

                    ?>

                    <p>Name : <br><?php echo "{$row["vendor_username"]}";?></p><br><address> Address:<br><?php echo "{$row["vAddress"]}";?></address><br>
                    <p>Email:<br><?php echo "{$row["vendor_email"]}";?></p> <br> <p>Tel:<br><?php echo "{$row["telephone"]}";?></p><br><p></p>
                    
                  </div>
                </div>
              </div>


              <div class="col-sm-10" id="admin-panel">

                <ul class="nav nav-tabs ">
                  <li class="active"><a data-toggle="tab" href="#profile1">Profile</a></li>
                  <li><a data-toggle="tab" href="#chat1">Chat</a></li>
                  <li><a data-toggle="tab" href="#message1">Message <span class="badge">50</span></a></li>
                  <li><a data-toggle="tab" href="#add1">Add Items</a></li>
                  <li><a data-toggle="tab" href="#delete1">Delete Items</a></li>
                </ul>


                <div class="tab-content wrap">

                  <div id="profile1" class="tab-pane fade in active">
                   
                    <!-- file uploading -->
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                      <div>
                        <span class="btn btn-file"><input type="file"/></span> 
                      </div>
                    </div>

                    <!-- vendor details-->
                    <!-- row41-->
                    <div class="row">
                        <div class="col-sm-9">


                          <div class="panel panel-default psty">
                            <div class="panel-heading">
                              <a>Name <span data-toggle="modal" class="glyphicon glyphicon-pencil pull-right" data-target="#name0"></span></a>
                            </div>

                          </div>


                          <div id="name0" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                          <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    <h4 class="modal-title">Change Name</h4>
                                </div>

                                
                                  <form action="update.php" method="post">
                                    <div class="modal-body">
                                      <div class="form-group col-xsS-10">
                                       <lable  for="name1">New Name: <input name="name1"type="text" class="form-control" id="name1"/></label>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                     <input type="submit" name="submit" id="submit" class="btn btn-primary" value="update"/>
                                    </div>
                                  </form>
      
                              </div>
                            </div>

                          </div>
                        </div>
                    </div>  
                      <!-- end row41-->
                      <!-- row42-->
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="panel panel-default psty">
                          <div class="panel-heading">
                            <a>Password <span data-toggle="modal" class="glyphicon glyphicon-pencil pull-right" data-target="#password0"></span></a>
                          </div>

                        </div>


                        <div id="password0" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                          <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Change Password</h4>
                              </div>
                              <form action="update.php" method="post">
                                <div class="modal-body">
                                  <div class="form-group col-xsS-10">
                                    <lable  for="current-password">Current Password: <input type="password" class="form-control " id="current-password" name="current-password"></label>
                                  </div>

                                  <div class="form-group col-xsS-10">
                                    <lable  for="new-password">New Password: <input type="password" class="form-control " name="new-password" id="new-password"></label>
                                  </div>

                                  <div class="form-group col-xsS-10">
                                    <lable  for="confirm-password">Confirm Password: <input type="password" class="form-control " name="confirm-password" id="confirm-password"/></label> 
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <input type="submit" name="submit" id="submit" class="btn btn-primary" value="update"/>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>
         



                      </div>
                    </div>
                    <!--end  row42-->
                    <!-- row 43-->
                    <div class="row">
                        <div class="col-sm-9">


                          <div class="panel panel-default psty">
                            <div class="panel-heading">
                              <a>Address <span data-toggle="modal" class="glyphicon glyphicon-pencil pull-right" data-target="#address0"></span></a>
                            </div>

                          </div>


                          <div id="address0" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                          <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Address</h4>
                                  </div>
                                  <form action="update.php" method="post">
                                    <div class="modal-body">
                                       <div class="form-group col-xsS-10">
                                          <lable  for="address">Address: <textarea type="textarea" rows="10" cols="10" class="form-control " name="address" id="address"></textarea></label>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                      <input type="submit" name="submit" id="submit" class="btn btn-primary" value="update"/>
                                    </div>
                                  </form>
                                </div> 
                              </div>

                          </div>
                        </div>
                    </div>  


                    <!-- end row43-->
                    <!-- row 44-->
                      
                      <div class="row">
                        <div class="col-sm-9">


                          <div class="panel panel-default psty">
                            <div class="panel-heading">
                              <a>Email <span data-toggle="modal" class="glyphicon glyphicon-pencil pull-right" data-target="#email0"></span></a>
                            </div>

                          </div>


                          <div id="email0" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                          <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Email</h4>
                                  </div>
                                  <form action="update.php" method="post">
                                    <div class="modal-body">
                                       <div class="form-group col-xsS-10">
                                          <lable  for="email">Email: <input type="email" class="form-control " name="email" id="email"/></label>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                      <input type="submit" name="submit" id="submit" class="btn btn-primary" value="update"/>
                                    </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>  


                    <!--end row 44-->
                    <!-- raw 45-->

                      <div class="row">
                        <div class="col-sm-9">


                          <div class="panel panel-default psty">
                            <div class="panel-heading">
                              <a>Contact Number <span data-toggle="modal" class="glyphicon glyphicon-pencil pull-right" data-target="#contact0"></span></a>
                            </div>

                          </div>


                          <div id="contact0" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                          <!-- Modal content-->
                               <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Contact Number</h4>
                                  </div>
                                  <form action="update.php" method="post">
                                    <div class="modal-body">
                                       <div class="form-group col-xsS-10">
                                          <lable  for="contact">Contact Number: <input type="text" class="form-control " name="contact" id="contact"/></label>
                                       </div>  
                                    </div>
                                    <div class="modal-footer">
                                          <input type="submit" name="submit" id="submit" class="btn btn-primary" value="update"/>
                                    </div>
                                </form>
                                </div>
                            </div>

                          </div>
                        </div>
                      </div>


                    <!-- end raw 45-->
                  
                </div>


                <div id="chat1" class="tab-pane fade">

                  
                  <div class="row">

                    <div class="col-sm-8">
                      <div class="panel panel-primary psty">
                        <div class="panel-heading">

                          <span class="glyphicon glyphicon-comment"></span> Chat
                          <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                             <span class="glyphicon glyphicon-chevron-down"></span>
                            </button>
                            <ul class="dropdown-menu slidedown" id="dropdown1">
                              <li><a href="#"><span class="glyphicon glyphicon-refresh"></span>Refresh</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-ok-sign"></span>Available</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-remove"></span>Busy</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-time"></span>Away</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><span class="glyphicon glyphicon-off"></span>Sign Out</a></li>
                            </ul>
                          </div>

                        </div>
                        <div class="panel-body pre-scrollable" >
                          sjksdj
                        </div>

                        <div class="panel-footer">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type the meassage"/>
                            <span class="input-group-btn">
                              <button class="btn btn-primary" type="button">Send</button>
                            </span>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-sm-4" >
                      <div class="panel panel-default psty">
                        <div class="panel-heading">
                          <h4>Vendor List</h4>
                        </div>

                        <div class="panel-body">
                          ksjdkd
                        </div>
                      </div>
                    </div>


                  </div>
                  
                </div>

                <div id="message1" class="tab-pane fade">
                  
                  <div class="panel panel-default psty">
                    <div class="panel-heading" id="message-option">

                      <div class="col-sm-4">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                          </button>
                          <ul class="dropdown-menu slidedown" id="dropdown1">
                            <li><a href="#">None</a></li>
                            <li><a href="#">Read</a></li>
                            <li><a href="#">Unread</a></li>
                          </ul>                        
                        </div>

                        <button class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></button>

                        <button class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button>
                      </div>


                      <div class="col-sm-4">
                        <div class="input-group">
                          <input type="text" class="form-control " placeholder="Search"/>
                          <span class="input-group-btn">
                            <button class="btn btn-primary glyphicon glyphicon-search" type="button"></button>
                          </span>
                        </div>
                      </div>


                      <div class="col-sm-4">
                        <label id="pages">1-25</label>

                        <ul class="pager" id="pager1">
                          <li><a href="#"><span class="glyphicon glyphicon-menu-left"></span></a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></li>
                        </ul>
                      </div>

                    </div>
                  </div>


                  <div class="row">

                    <div class="col-sm-8" >
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#sent">Sent Quotation</a></li>
                        <li><a data-toggle="tab"href="#receive">Received Quotation</a></li>
                      </ul>
                      <div class="tab-content">
                        <br/>
                        <div class="tab-pane fade in active pre-scrollable"  id="sent">
                          <table class="table table-hover">
                            <tr>
                              <th class="tableheader" data-field="state" data-checkbox="true" data-formatter="starsFormatter">
                                <input type="checkbox"/>
                              </th>
                              <td class="tableheader">Raja Juwellers</td>
                              <td class="tableheader">This about </td>
                            </tr>
                          </table>
                        </div>

                        <div class="tab-pane fade pre-scrollable" id="receive">
                          
                          <table class="table table-hover">
                            <tr>
                              <th class="tableheader" data-field="state" data-checkbox="true" data-formatter="starsFormatter">
                                <input type="checkbox"/>
                              </th>
                              <td class="tableheader">Hacker Rank</td>
                              <td class="tableheader">dfjkdfj fkdjfk fkdjfkd fdkjfk</td>
                            </tr>
                          </table>
                        </div>

                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="panel panel-primary psty">
                        <div class="panel-heading">
                          <span class="glyphicon glyphicon-envelope"></span> Compose Message
                        </div>

                        <div class="panel-body">
                          <form class="form-horizontal" role="form">

                            <div class="form-group">
                              <div class="col-sm-2">
                                <label  for="email">To:</label>
                              </div>
                              <div class="col-sm-10">
                                <input id="email" type="email" class="form-control " placeholder="Recipient"/>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-2">
                                <label  for="email">Sub: </label>
                              </div>
                              <div class="col-sm-10">
                                <input id="subject" type="text" class="form-control " placeholder="Subject"/>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-12">
                                <label  for="mbody">Message: </label>
                              </div>
                              <div class="col-sm-12">
                                <textarea class="form-control pre-scrollable " rows="8"></textarea>
                              </div>
                            </div>

                          </form>
                        </div>

                        <div class="panel-footer">
                          <button class="btn btn-primary pull-right" type="button">Send</button>
                          <button class="btn btn-primary" type="button">Cancel</button>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div id="add1" class="tab-pane fade">
                  

                  <div class="panel panel-default psty">
                    <div class="panel-heading">
                      <h4>Upload Items</h4>
                    </div>
                    <div class="panel-body">

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="input-group">
                            <input type="text" class="form-control " disabled/>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-folder-open"></span> Browse
                              </button>
                              <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-upload"></span> Upload
                              </button>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="panel-footer">

                    </div>
                  </div>

                </div>

                <div id="delete1" class="tab-pane fade">
                  
                  <div class="row" id="del">
                    <div class="col-sm-11 pre-scrollable" >
                     
                      <!-- panel delete-->

                      <div class="row">

                        <div class="col-sm-4">
                          <div class="thumbnail" id="item">
                            <img src="img/ring1.png" style="width:175px ;height:150px;" class="img-responsive"/><br/>
                            <button class="btn btn-primary pul-left" >Update</button>
                            <button class="btn btn-primary pull-right">Delete</button>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumbnail" id="item">
                            <img src="img/ring2.png" style="width:175px ;height:150px;"class="img-responsive"/><br/>
                            <button class="btn btn-primary pul-left" >Update</button>
                            <button class="btn btn-primary pull-right">Delete</button>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="thumbnail" id="item">
                            <img src="img/ring3.png" style="width:175px ;height:150px;"  class="img-responsive"/><br/>
                            <button class="btn btn-primary pul-left" >Update</button>
                            <button class="btn btn-primary pull-right">Delete</button>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="thumbnail" id="item">
                            <img src="img/ring4.png" style="width:175px ;height:150px;"class="img-responsive"/><br/>
                            <button class="btn btn-primary pul-left" onclick="">Update</button>
                            <button class="btn btn-primary pull-right">Delete</button>
                          </div>
                        </div>


                      </div>

                    </div>

                    <div class="col-sm-4" >
                      
                    </div>
                  </div>
                </div>
              

            </div>


              <div class="row ">
               

              
                <div class="col-sm-8">


                </div>


              </div>



          </div>
        <!-- only not visible for small devices <<<= -->


</div>
</div>
        <!-- =>>> only visible for small devices  -->
          <!--<div class="container visibel-xs hidden-md hidden-sm hidden-lg">
            <div class="row ">

              <div class="col-xs-3" id="a">
                
                <ul class="nav nav-tabs nav-stacked">
                  <li><a href="#profile2" data-toggle="tab">Profile</a></li>
                  <li><a href="#chat2" data-toggle="tab">Chat</a></li>
                  <li><a href="#message2" data-toggle="tab">Meaasge<span class="badge">50</span></a></li>
                  <li><a href="#add2" data-toggle="tab">Add</a></li>
                  <li><a href="#delete2" data-toggle="tab">Delete</a></li>
                </ul>

              </div>


                
              <div class="col-xs-9" id="b">
                
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="profile2">
                    profile details
                  </div>
                  <div class="tab-pane fade" id="chat2">
                    chat room            
                  </div>
                  <div class="tab-pane fade" id="message2">
                    messages
                  </div>
                  <div class="tab-pane fade" id="add2">
                    adding items
                  </div>
                  <div class="tab-pane fade" id="delete2">
                    deleting items
                  </div>
                </div>

              </div>
            </div>
          </div>-->
           <!--  only visible for small devices  <<<= -->
          <!-- Footer -->
		  
    <footer class="container1">
		<?php include 'footer.php';?>		
	</footer>


   </body>

   </html>

