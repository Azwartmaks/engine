<?php

class Admin_Model extends Model{
    
    function autorization(){
        $login = $_POST['login'];
        $password = $_POST['password'];
        if($login==ADM_LOGIN && $password==ADM_PASS){
            Session::set('login','login');
            return true;
        }else{
            return false;
        }
    }
    
    function getMM(){
        $result = mysql_query("SELECT * FROM `ptype_mm`");
        $result = $this->db->assocAllResult($result);
        return $result;
    }
    
    function getM(){
        $result = mysql_query("SELECT * FROM `ptype_m`");
        $result = $this->db->assocAllResult($result);
        return $result;
    }
    
    function getProducts(){
        $result = mysql_query("SELECT * FROM `ptype`");
        $result = $this->db->assocAllResult($result);
        return $result; 
    }
    
    function getProductData($param){
        $result = mysql_query("SELECT * FROM `ptype` WHERE `id`='{$param}'");
        $result = $this->assocRowResult($result);
        return $result; 
    }
        
    function saveProduct(){
        $parent_id = $_POST['parent_id'];
        $rel_table = $_POST['rel_table'];
        $name = $_POST['name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = $_POST['text'];
        $pic = $_POST['pic'];
        
        $sql = sprintf("INSERT INTO `ptype` "
                . "(`parent_id`,`rel_table`,`name`,`alias`,`title`,`meta_description`,`meta_keywords`,`header`,`text`,`pic`) "
                . "VALUES ($parent_id,'{$rel_table}','{$name}','{$alias}','{$title}','{$meta_description}','{$meta_keywords}','{$header}','{$text}','{$pic}')");
        $result = mysql_query($sql) or die("Not added!".mysql_error());
        
        $result = mysql_query("SELECT id, name FROM  `ptype` ORDER BY id DESC LIMIT 1")or die("Cant find last id in PTYPE table");
        $result = $this->db->assocRowResult($result);

        $last_id = $result['id'];
        $ptype_name = $result['name'];

        mysql_query("INSERT INTO `ptype_mmy`(`ptype_id`,`ptype_name`) VALUES ($last_id,'$ptype_name')")or die("cannot add siblings 1".mysql_error());
        mysql_query("INSERT INTO `ptype_mm`(`ptype_id`,`ptype_name`) VALUES ($last_id,'$ptype_name')")or die("cannot add siblings 2".mysql_error());
        mysql_query("INSERT INTO `ptype_m`(`ptype_id`,`ptype_name`) VALUES ($last_id,'$ptype_name')")or die("cannot add siblings 3".mysql_error());
        if($result){
            header("Location:admin-products.html");
        }
    }
    
    function deleteProduct($ptype_id){
        $result = $this->getProductData($ptype_id);
        if(file_exists($result['pic'])){
            unlink($result['pic']);   
        }         
        $result = mysql_query("DELETE FROM `ptype` WHERE `id`= {$ptype_id}") or die("Cant delete");
        $result = mysql_query("DELETE FROM `ptype_mmy` WHERE `ptype_id`= {$ptype_id}") or die("Cant delete");
        $result = mysql_query("DELETE FROM `ptype_mm` WHERE `ptype_id`= {$ptype_id}") or die("Cant delete");
        $result = mysql_query("DELETE FROM `ptype_m` WHERE `ptype_id`= {$ptype_id}") or die("Cant delete");
        if($result){
            header("Location:admin-products.html");
        }
    } 
    
    function updateProduct($ptype_id){
        $parent_id = $_POST['parent_id'];
        $rel_table = $_POST['rel_table'];
        $name = $_POST['name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = str_replace(array("'"),array("&#39;"),$_POST['text']);
        $pic = $_POST['pic'];
                
        $sql="";
        
        if($pic!=""){
        $sql = sprintf(""
                . "UPDATE `ptype` SET "
                . "`parent_id`='{$parent_id}',`rel_table`='{$rel_table}',`name`='{$name}',`alias`='{$alias}',`title`='{$title}',`meta_description`='{$meta_description}',"
                . "`meta_keywords`='{$meta_keywords}',`header`='{$header}',`text`='{$text}',`pic`='{$pic}' "
                . "WHERE `id`=$ptype_id");            
        }else{
        $sql = sprintf(""
                . "UPDATE `ptype` SET "
                . "`parent_id`='{$parent_id}',`rel_table`='{$rel_table}',`name`='{$name}',`alias`='{$alias}',`title`='{$title}',`meta_description`='{$meta_description}',"
                . "`meta_keywords`='{$meta_keywords}',`header`='{$header}',`text`='$text' "
                . "WHERE `id`=$ptype_id"); 
        }

        $result = mysql_query($sql) or die("oh no! ".mysql_error());
        if($result){
            header("Location:admin-products.html");
        }
    }
    /*MMY Products functionality***********************************************/
    
    function getMMY(){
        $result = mysql_query("SELECT * FROM `ptype_mmy`");
        $result = $this->db->assocAllResult($result);
        return $result;
    }
    
    function getProductMMYData($table,$param){
        $result = mysql_query("SELECT * FROM `{$table}` WHERE `id`='{$param}'");
        $result = $this->assocRowResult($result);
        return $result; 
    }
        
    function saveProductMMY($table){
        $ptype_id = $_POST['ptype_id'];
        $name = $_POST['ptype_name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = $_POST['text'];
        $pic = $_POST['pic'];

        $sql = sprintf("INSERT INTO `{$table}` "
                . "(`ptype_id`,`ptype_name`,`title`,`meta_description`,`meta_keywords`,`header`,`text`,`pic`) "
                . "VALUES ($ptype_id,'{$name}','{$title}','{$meta_description}','{$meta_keywords}','{$header}','{$text}','{$pic}')");
        $result = mysql_query($sql) or die("Not added!");       

        if($result){
            header("Location:admin-products.html");
        }
    }
    
    function deleteProductMMY($table,$ptype_id){
        $result = $this->getProductMMYData($table,$ptype_id);
        if(file_exists($result['pic'])){
            unlink($result['pic']);   
        }         
        $result = mysql_query("DELETE FROM `{$table}` WHERE `id`= {$ptype_id}") or die("Cant delete");
        if($result){
            header("Location:admin-products.html");
        }
    } 
    
    function updateProductMMY($table,$id){
        $ptype_id = $_POST['ptype_id'];
        $name = $_POST['ptype_name'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = $_POST['text'];
        $pic = $_POST['pic'];
        $sql="";
        if($pic!=""){
        $sql = sprintf(""
                . "UPDATE `{$table}` SET "
                . "`ptype_id`='{$ptype_id}',`ptype_name`='{$name}',`title`='{$title}',`meta_description`='{$meta_description}',"
                . "`meta_keywords`='{$meta_keywords}',`header`='{$header}',`text`='{$text}',`pic`='{$pic}' "
                . "WHERE `id`=$id");            
        }else{
        $sql = sprintf(""
                . "UPDATE `{$table}` SET "
                . "`ptype_id`='{$ptype_id}',`ptype_name`='{$name}',`title`='{$title}',`meta_description`='{$meta_description}',"
                . "`meta_keywords`='{$meta_keywords}',`header`='{$header}',`text`='{$text}' "
                . "WHERE `id`=$id"); 
        }

        $result = mysql_query($sql) or die("oh no!".  mysql_error());
        if($result){
            header("Location:admin-products.html");
        }
    }
  
    
}