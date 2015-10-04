<html>
    
    <body>
    <div class="head" >
        <?php
        	session_start();
            include "navigation.php";
        ?>
    </div>

    
    <div class="container">
        <form method="get">
            
        <center>
            <input type="submit" name="audi" value="Auditorium">
            <input type="submit" name="ground" value="Ground">
        </center>
        </form>
        <div class="panel panel-red margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Booking History</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            
                            

        <?php
            
            $roll_no=$_SESSION['roll_no'];
            mysql_connect("localhost","root","");
            mysql_select_db("permission_manager");
            
            if(isset($_GET["ground"]))
            {
            $query="select * from ground_booking where roll_no='$roll_no'";
            ?>
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Event Name</th>
                                    <th>Ground</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Cordinator</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
            <?php                
            $rs=mysql_query($query);
                
            while($arr=mysql_fetch_array($rs))
            {
                $event=$arr["event"];
                $event_name=$arr["event_name"];
                $ground=$arr["ground"];
                $from=$arr["date_from"];
                $to=$arr["date_to"];
                $cordinator=$arr["cordinator"];
                $status=$arr["status"];
                ?>
                <tbody>
                <tr>
                <td><?php echo $event; ?></td>
                <td><?php echo $event_name; ?></td>
                <td><?php echo $ground; ?></td>
                <td><?php echo $from; ?></td>
                <td><?php echo $to; ?></td>
                <td><?php echo $cordinator; ?></td>
                <td><?php echo $status; ?></td>
                <?php 
                    if($status == 'pending')
                    {
                    ?>
                <td><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button></td>
                    <?php
                    }
                        
            }
            }

            if(isset($_GET["audi"]))
            {
            $query="select * from audi_booking where roll_no='$roll_no'";
            ?>
                            <thead>
                                <tr>
                                    <th>Auditorium</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Purpose</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
            <?php                
            $rs=mysql_query($query);
                
            while($arr=mysql_fetch_array($rs))
            {
                $audi=$arr["auditorium"];
                $from=$arr["date_from"];
                $to=$arr["date_to"];
                $purpose=$arr["purpose"];
                $status=$arr["status"];
                ?>
                <tbody>
                <tr>
                <td><?php echo $audi; ?></td>
                <td><?php echo $from; ?></td>
                <td><?php echo $to; ?></td>
                <td><?php echo $purpose; ?></td>
                <td><?php echo $status; ?></td> 
                <?php 
                    if($status == 'pending')
                    {
                    ?>
                <td><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button></td>
                    <?php
                    }
            }
            }
        ?>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
        
    </div>
    </body>
</html>