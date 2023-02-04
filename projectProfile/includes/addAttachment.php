
<?php
  require '../../assets/setup/db.inc.php';


        if (isset($_POST['addA'])) {

            $FileNameNew = '_defaultUser.png';
            $file = $_FILES['avatar'];
            if (!empty($_FILES['avatar']['name'])){

                $fileName = $_FILES['avatar']['name'];
                $fileTmpName = $_FILES['avatar']['tmp_name'];
                $fileSize = $_FILES['avatar']['size'];
                $fileError = $_FILES['avatar']['error'];
                $fileType = $_FILES['avatar']['type']; 
    
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
    
                $allowed = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'xlsx');
                if (in_array($fileActualExt, $allowed)){
    
                    if ($fileError === 0){
    
                        if ($fileSize < 100000000){
    
                            $FileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = '../../assets/uploads/attachments/' . $FileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
    
                        }
                        else {
    
                            $_SESSION['ERRORS']['imageerror'] = 'image size should be less than 10MB';
                            header("Location: ../");
                            exit(); 
                        }
                    }
                    else {
    
                        $_SESSION['ERRORS']['imageerror'] = 'image upload failed, try again';
                        header("Location: ../");
                        exit();
                    }
                }
                else {
    
                    $_SESSION['ERRORS']['imageerror'] = 'invalid image type, try again';
                    header("Location: ../");
                    exit();
                }
                $sql = "INSERT INTO attachments (attachmentName) VALUES ('$FileNameNew')";
        
            $addProject = mysqli_query($conn, $sql);
        
            echo $sql;
        
            if ($addProject) {
                header("Location: ../");
            } else {
                header("Location: ../");
            }
            }
           
            
        } else {
            header("Location: ../");
        }