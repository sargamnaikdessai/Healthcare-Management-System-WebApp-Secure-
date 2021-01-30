<form method="post" enctype="multipart/form-data" action="#">
        Folder Name: <input type="text" name="foldername" /><br/>
        Choose Directory:  <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" mozdirectory=""><br/>
    <input class="button" type="submit" value="Upload" name="upload" />
</form>

<?php
if(isset($_POST['upload']))
{
        if($_POST['foldername']!="")
        {
                $foldername=$_POST['foldername'];
                echo "$foldername";
                if(!is_dir($foldername))
                        mkdir($foldername);
                foreach($_FILES['files']['name'] as $i=>$name)
                {
                        if(strlen($_FILES['files']['name'][$i]) > 1)
                        {
                                move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername.'/'.$name);
                        }
                }
                echo "Folder is uploaded successfully ..";
        }
        else
        echo "Folder uploaded Failed!!";
}
?>