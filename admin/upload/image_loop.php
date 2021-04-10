<?php
  function image_upload($image_file){
        if (!empty($image_file)) {
            $target_dir = "../uploads/";
            $image_name=basename($image_file["name"]);
            $image_basename=pathinfo($image_file['name'], PATHINFO_FILENAME);
            $image_temp=$image_file["tmp_name"];
            $imagefiletype = pathinfo($image_name,PATHINFO_EXTENSION);
            $image_file_size=$image_file["size"];
            $uploadOk = 1;
            if (!empty($image_temp)) {
              $check_mime = getimagesize($image_temp);
              if ($check_mime!==false) {
                $uploadOk=1;
              }
              else {
                $uploadOk=0;
              }
              if ($image_file_size>2000000) {
                $uploadOk=0;
              }
              if ($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif") {
                $uploadOk=0;
              }
              if (file_exists($target_dir.$image_name)) {
                $extension = $imagefiletype;
                $increment = '';
                while(file_exists($target_dir.$image_basename.$increment.'.'.$extension)) {
                  $increment++;
                }
                $image_name=$image_basename.$increment.'.'.$extension;
              }

            if ($uploadOk!=0) {
                if (move_uploaded_file($image_temp, $target_dir.$image_name)) {
                  $uploadOk=1;
                }
                else {
                  $uploadOk=0;
                }
              }
            }
            else {
              $uploadOk=0;
            }
          }
          else {
            $uploadOk=0;
          }
        if (!empty($uploadOk) & $uploadOk!=0) {
          return $image_name;
        }
  }
?>
