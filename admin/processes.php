<?php 
session_start();
require "../includes/connect.php";
//include "../includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("Y_m_d_H_i_s");

if(isset($_POST["login"])){
    $_SESSION['chid'] = "1";
    $_SESSION['chname'] = "Kiliki Beekeepers";
    header("location:  dashboard.php");
}
elseif(isset($_POST["new-service"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $icon = mysqli_real_escape_string($conn, $_POST["icon"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
			

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $insert = "INSERT INTO service (name, slag, short_desc, long_desc, icon, image, date_created) VALUES ('$name',  '$slag', '$sdesc', '$ldesc', '$icon', '$new', '$date')";
    
    if ($conn->query($insert)===TRUE){
        $pk = $conn->insert_id;
          
          $_SESSION["success"] = "New Service Added Sucessfully.";
          header("location: edit-service.php?id=$pk");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location:  add-service.php");
      }
    }

    
elseif(isset($_POST["edit-service"])){
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $icon = mysqli_real_escape_string($conn, $_POST["icon"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    


    $insert = "UPDATE `service` SET `name`='$name',`slag`='$slag',`short_desc`='$sdesc' ,`long_desc`='$ldesc', `icon`='$icon',`status`='$status' WHERE service_id='$id'";
    
    if ($conn->query($insert)===TRUE){
        
          
          $_SESSION["success"] = "Service Updated Sucessfully.";
          header("location: edit-service.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-service.php?id=$id");
      }
    }
    
elseif(isset($_POST["edit-srv-img"])){
        $id = mysqli_real_escape_string($conn, $_POST["edit-srv-img"]);

        $image = $_FILES['photos']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
                

        $file_name = $_FILES["photos"]["name"];
        $_FILES["photos"]["type"];
        $tmp_file = $_FILES["photos"]["tmp_name"];
        
        $destination = "../uploads/" . $file_name;
        
        move_uploaded_file($tmp_file, $destination);
        $new = $filedate.$file_name;
        $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


        $insert = "UPDATE `service` SET `image`='$new' WHERE service_id='$id'";
        
        if ($conn->query($insert)===TRUE){
              
              $_SESSION["success"] = "Service Updated Sucessfully.";
              header("location: edit-service.php?id=$id");
              
          }else{
              $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
              header("location: edit-service.php?id=$id");
          }
}

elseif(isset($_POST["new-prof"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
   


    $insert = "INSERT INTO profile (name, description, date_created) VALUES ('$name', '$desc', '$date')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Profile Section Added Sucessfully.";
        header("location: profile.php");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: new-profile.php");
    }
}

elseif(isset($_POST["edit-prof"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
   


    $insert = "UPDATE `profile` SET `name`='$name',`description`='$desc',`date_created`='$date' WHERE profile_id='$id'";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Profile Section Updated Sucessfully.";
        header("location: edit-profile.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-profile.php?id=$id");
    }
}

elseif(isset($_POST["add-pkg-act"])){
        $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
        $act = mysqli_real_escape_string($conn, $_POST["name"]);
        $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
        $price = mysqli_real_escape_string($conn, $_POST["price"]);
       


        $insert = "INSERT INTO package_exp (package_id, experience_name, description, price) VALUES ('$id', '$act', '$desc', '$price')";
        
        if ($conn->query($insert)===TRUE){
              
            $_SESSION["success"] = "Package Updated Sucessfully.";
            header("location: edit-package.php?id=$id");
            
        }else{
            $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
            header("location: edit-package.php?id=$id");
        }
}


elseif(isset($_POST["add-pkg-acc"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $sprice = mysqli_real_escape_string($conn, $_POST["sprice"]);
    $dprice = mysqli_real_escape_string($conn, $_POST["dprice"]);
   


    $insert = "INSERT INTO package_acc (package_id, accommodation, acc_desc, double_p, single) VALUES ('$id', '$act', '$desc', '$sprice', '$dprice')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Package Updated Sucessfully.";
        header("location: edit-package.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-package.php?id=$id");
    }
}
elseif(isset($_GET["del_pkg_act"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_pkg_act"]);

    $qry = "DELETE FROM package_exp WHERE package_exp_id='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Package Item Deleted Sucessfully.";
        header("location: edit-package.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-package.php?id=$id");
    }
}

elseif(isset($_GET["del_pkg_acc"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_pkg_acc"]);

    $qry = "DELETE FROM package_acc WHERE package_acc_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Package Item Deleted Sucessfully.";
        header("location: edit-package.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-package.php?id=$id");
    }
}


elseif(isset($_POST["new-dest"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
   


    $insert = "INSERT INTO destination (destination_name, destination_desc, date_created) VALUES ('$name', '$desc', '$date')";
    
    if ($conn->query($insert)===TRUE){
          
        $id = $conn->insert_id;
        $_SESSION["success"] = "Destination Added Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

elseif(isset($_POST["edit-dest"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);

    $qry = "UPDATE destination SET destination_name='$name', destination_desc='$desc', destination_status='$status' WHERE destination_id='$id'";

    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}
elseif(isset($_POST["add-dest-act"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
   


    $insert = "INSERT INTO destination_activities (destination_id, act_name, act_desc, act_price) VALUES ('$id', '$act', '$desc', '$price')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

elseif(isset($_POST["add-dest-acc"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $sprice = mysqli_real_escape_string($conn, $_POST["sprice"]);
    $dprice = mysqli_real_escape_string($conn, $_POST["dprice"]);
   


    $insert = "INSERT INTO destination_accommodation (destination_id, acc_name, acc_desc, acc_single, acc_double) VALUES ('$id', '$act', '$desc', '$sprice', '$dprice')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

elseif(isset($_POST["add-trans-act"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
   


    $insert = "INSERT INTO destination_transport (destination_id, trans_name, trans_desc, trans_price) VALUES ('$id', '$act', '$desc', '$price')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}


elseif(isset($_GET["del_dest_trans"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_dest_trans"]);

    $qry = "DELETE FROM destination_transport WHERE dest_trans_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Item Deleted Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}


elseif(isset($_GET["del_dest_acc"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_dest_acc"]);

    $qry = "DELETE FROM destination_accommodation WHERE dest_acc_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Item Deleted Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}


elseif(isset($_GET["del_dest_act"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_dest_act"]);

    $qry = "DELETE FROM destination_activities WHERE dest_act_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Item Deleted Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

// Add new Blog
if(isset($_POST["add-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $cat_color = mysqli_real_escape_string($conn, $_POST["cat_color"]);
    
    $slag = str_replace(' ', '-', $tit);
    $tit = ucwords($tit);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);
		
    
    $cat_insert = "INSERT INTO blog(blog_title, blog_slag, blog_description, blog_content, blog_image, blog_category, blog_category_color, date_created) VALUES ('$tit',  '$slag', '$desc', '$content', '$new', '$cat', '$cat_color', '$date')";
    
    if ($conn->query($cat_insert)===TRUE){
          
          $last_id = $conn->insert_id;
          $_SESSION["success"] = "New Blog Created Sucessfully.";
          header('location: edit-blog.php?id='.$last_id);
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: new-insight.php');
      }
    
}
elseif(isset($_POST["edit-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $cat_color = mysqli_real_escape_string($conn, $_POST["cat_color"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $id = mysqli_real_escape_string($conn, $_POST["blog_id"]);
    $slag = str_replace(' ', '-', $tit);
    $slag = strtolower($slag);
    $tit = ucwords($tit);

    
    $updqry = "UPDATE blog SET blog_title='$tit', blog_slag='$slag', blog_description='$desc', blog_content='$content', blog_category='$cat', blog_category_color='$cat_color', blog_status='$status' WHERE blog_id  = '$id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Updated Sucessfully.";
          header("location: edit-blog.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$id");
      }
}elseif(isset($_POST["edit-blog-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-blog-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);
    
    $updqry = "UPDATE blog SET blog_image ='$new'  WHERE blog_id  = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Image Updated Sucessfully.";
          header("location: edit-blog.php?id=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$cat_id");
      }


}

elseif(isset($_POST["seo-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE blog SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE blog_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: edit-blog.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$id");
      }
    
}


elseif(isset($_GET['logout'])){
    session_destroy();

    session_start();
    $_SESSION['success'] = "Logged Out Successfully!";
    header('location: index.php');
}

elseif(isset($_POST["new-cat"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);

    $cat_insert = $conn->query("INSERT INTO category(category_name, cat_desc, date_created) VALUES ('$name', '$desc', '$date')");

    if ($cat_insert===TRUE){

          
        $_SESSION["success"] = "Category added Sucessfully.";
        header("location: categories.php");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: categories.php");
    }
  
}
elseif(isset($_POST["edit-cat"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
   


    $insert = "UPDATE `category` SET `category_name`='$name', `cat_desc`='$desc' WHERE category_id='$id'";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Category Updated Sucessfully.";
        header("location: edit-category.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-category.php?id=$id");
    }
}

elseif(isset($_POST["new-specialism"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
			

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $insert = "INSERT INTO specialism (name, slag, short_desc, long_desc, image, date_created) VALUES ('$name',  '$slag', '$sdesc', '$ldesc', '$new', '$date')";
    
    if ($conn->query($insert)===TRUE){
        $pk = $conn->insert_id;
          
          $_SESSION["success"] = "New Project Added Sucessfully.";
          header("location: edit-specialism.php?id=$pk");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location:  add-specialism.php");
      }
    }

    
elseif(isset($_POST["edit-specialism"])){
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    


    $insert = "UPDATE `specialism` SET `name`='$name',`slag`='$slag',`short_desc`='$sdesc' ,`long_desc`='$ldesc', `status`='$status' WHERE specialism_id='$id'";
    
    if ($conn->query($insert)===TRUE){
        
          
          $_SESSION["success"] = "Project Updated Sucessfully.";
          header("location: edit-specialism.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-specialism.php?id=$id");
      }
    }
    
elseif(isset($_POST["edit-spec-img"])){
        $id = mysqli_real_escape_string($conn, $_POST["edit-spec-img"]);

        $image = $_FILES['photos']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
                

        $file_name = $_FILES["photos"]["name"];
        $_FILES["photos"]["type"];
        $tmp_file = $_FILES["photos"]["tmp_name"];
        
        $destination = "../uploads/" . $file_name;
        
        move_uploaded_file($tmp_file, $destination);
        $new = $filedate.$file_name;
        $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


        $insert = "UPDATE `specialism` SET `image`='$new' WHERE specialism_id='$id'";
        
        if ($conn->query($insert)===TRUE){
              
              $_SESSION["success"] = "Project Updated Sucessfully.";
              header("location: edit-specialism.php?id=$id");
              
          }else{
              $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
              header("location: edit-specialism.php?id=$id");
          }
}
elseif(isset($_GET["complete"])){
    $id = mysqli_real_escape_string($conn, $_GET["complete"]);

    $qry = "UPDATE orders SET order_status=2 WHERE order_id='$id'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Order Completed Sucessfully.";
        header("location: order.php?order=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: order.php?order=$id");
    }
}


elseif(isset($_GET["cancel"])){
    $id = mysqli_real_escape_string($conn, $_GET["cancel"]);

    $qry = "UPDATE orders SET order_status=3 WHERE order_id='$id'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Order Cancelled Sucessfully.";
        header("location: order.php?order=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: order.php?order=$id");
    }
}
  ?>