<?php 
session_start();
$dbuserid=$_SESSION['sess_userid'];
?>
<!DOCTYPE html>
<html>
<head>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>
            eDocs Pan
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    <body>
        <main>
            <div class="container">
                <div class="row row_style">
                    <div class="col-xs-5 col-lg-offset-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2>PAN</h2>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning">Enter pan Id to access your document</p>
                                <form action="panUpdate.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" placeholder="Pan Number" class="form-control" name="pan_num" required>
                                    </div>
                                    <input type="submit" name="submit" value="Submit Pan" class="btn btn-primary">
                                    <div class="panel-footer">
                                    </div>
                                </form>    
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>