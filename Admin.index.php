<?php
    $conHandler = mysqli_connect("mysql5.gear.host","akrmblog","Dr246rafHi_~","akrmblog");
?>

<!DOCTYPE html>
<html>
    
<body>
    <br><br><br>
    <div>
        <table class="table table-striped table-responsive">
            <tr class="success">
                <th>User</th>
                <th>Subscription</th>
                <th>Options</th>
            </tr>
            <tr>
                <td>User</td>
                <td>5$/mo</td>
                <td>
                    <div class="btn btn-info" disabled="disabled">Message</div>
                    <div class="btn btn-danger" disabled="disabled">Ban</div>
                </td>
            </tr>
            <tr>
                <td>lorem</td>
                <td>0.5$/mo</td>
                <td>
                    <div class="btn btn-info" disabled="disabled">Message</div>
                    <div class="btn btn-danger" disabled="disabled">Ban</div>
                </td>
            </tr>
            <tr>
                <td>ipesum</td>
                <td>9$/mo</td>
                <td>
                    <div class="btn btn-info" disabled="disabled">Message</div>
                    <div class="btn btn-danger" disabled="disabled">Ban</div>
                </td>
            </tr>
        </table>
    </div>
</body>
    
</html>
