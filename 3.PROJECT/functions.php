
<?php
    // User Functions
    function getOnebaitaplon($id){
        global $conn;
        $sql = "SELECT * FROM xethocba WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $baitaplon = mysqli_fetch_assoc($result);
        return $baitaplon;
    }
    function deletebaitaplon($id){
        global $conn;
        $sql = "DELETE FROM xethocba WHERE id = '$id'";
        if(mysqli_query($conn,$sql))
            return TRUE;
        else
            return FALSE;
    }

    function getAllbaitaplon(){
        global $conn;
        $sql = "SELECT * FROM xethocba";
        $result = mysqli_query($conn,$sql);
        $users = mysqli_fetch_all($result);
        return $users;
    }

    
    
    

?>