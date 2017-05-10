<!doctype html>

<?php

include 'db.php';

$sql = "SELECT * FROM tasks";

$rows = $db->query($sql);

//var_dump($rows);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center; text-transform: uppercase">To Do List</h1>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Task Name</label>
                                    <input type="text" required name="task" class="form-control">
                                </div>
                                <input type="submit" name="send" value="send" class="btn btn-success">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-success">Add Task</button>
                    <button type="button" style="float: right" class="btn btn-default">Print</button>
                    <hr>
                    <br>

                    <thead>
                    <tr>
                        <th>ID.</th>
                        <th>Task</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $x=<<<tab
                        <td><a href="" class="btn btn-success">Edit</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
tab;

                    ?>

                        <?php

                        while ($row = $rows->fetch_assoc()){
                        echo"<tr><td>{$row['id']}</td><br><td>{$row['name']}</td> $x";

                        };?>

                    <?php $endwhile ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
