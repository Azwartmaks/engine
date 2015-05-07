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
        $result = $this->prepare("SELECT * FROM `ptype_mm`");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function getM(){
        $result = $this->prepare("SELECT * FROM `ptype_m`");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function getProducts(){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE `type`='product'");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function getProductData($param){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE `id`= :id AND `type`='product'");
        $result->execute(array(':id'=>$param));
        return $result->fetchAll(PDO::FETCH_ASSOC); 
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
        
        $result = $this->prepare("INSERT INTO `ptype` "
                . "(`parent_id`,`rel_table`,`type`,`name`,`alias`,`title`,`meta_description`,`meta_keywords`,`header`,`text`,`pic`) "
                . "VALUES (:parent_id,:rel_table,:type,:name,:alias,:title,:meta_description,:meta_keywords,:header,:text,:pic)");  
        
        $result->execute(array(
            ":parent_id"=>$parent_id,
            ":rel_table"=>$rel_table,
            ":type"=>'product',
            ":name"=>$name,
            ":alias"=>$alias,
            ":title"=>$title,
            ":meta_description"=>$meta_description,
            ":meta_keywords"=>$meta_keywords,
            ":header"=>$header,
            ":text"=>$text,
            ":pic"=>$pic
        ));        
        
        $sth = $this->prepare("SELECT id, name FROM  `ptype` ORDER BY id DESC LIMIT 1");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        $last_id = $res[0]['id'];
        $ptype_name = $res[0]['name'];
        
        $sth = $this->prepare("INSERT INTO `ptype_mmy`(`ptype_id`,`ptype_name`) VALUES (:last_id,:ptype_name)");
        $sth->execute(array(':last_id'=>$last_id,':ptype_name'=>$ptype_name));
        
        $sth = $this->prepare("INSERT INTO `ptype_mm`(`ptype_id`,`ptype_name`) VALUES (:last_id,:ptype_name)");
        $sth->execute(array(':last_id'=>$last_id,':ptype_name'=>$ptype_name));
        
        $sth = $this->prepare("INSERT INTO `ptype_m`(`ptype_id`,`ptype_name`) VALUES (:last_id,:ptype_name)");
        $sth->execute(array(':last_id'=>$last_id,':ptype_name'=>$ptype_name));
        if($res){
            header("Location:admin-products.html");
        }
    }
    
    function deleteProduct($ptype_id){
        $result = $this->getProductData($ptype_id);
        if(file_exists($result['pic'])){
            unlink($result['pic']);   
        }         
        
        $sth = $this->prepare("DELETE FROM `ptype` WHERE `id`= :ptype_id");
        $sth->execute(array(':ptype_id'=>$ptype_id));
        $sth = $this->prepare("DELETE FROM `ptype_mmy` WHERE `id`= :ptype_id");
        $sth->execute(array(':ptype_id'=>$ptype_id));
        $sth = $this->prepare("DELETE FROM `ptype_mm` WHERE `id`= :ptype_id");
        $sth->execute(array(':ptype_id'=>$ptype_id));
        $sth = $this->prepare("DELETE FROM `ptype_m` WHERE `id`= :ptype_id");
        $sth->execute(array(':ptype_id'=>$ptype_id));
        
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
            $result = $this->prepare("UPDATE `ptype` SET "
                    . "`parent_id`=:parent_id,`rel_table`=:rel_table,`name`=:name,`alias`=:alias,`title`=:title,"
                    . "`meta_description`=:meta_description,`meta_keywords=:meta_keywords,`header`=:header,`text`=:text,`pic`=:pic "
                    . "WHERE `id`=:ptype_id");  
            $result->execute(array(
                ":parent_id"=>$parent_id,
                ":rel_table"=>$rel_table,
                ":name"=>$name,
                ":alias"=>$alias,
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":pic"=>$pic,
                ":ptype_id"=>$ptype_id
            ));          
                
        }else{
            $result = $this->prepare("UPDATE `ptype` SET "
                    . "`parent_id`=:parent_id,`rel_table`=:rel_table,`name`=:name,`alias`=:alias,`title`=:title,"
                    . "`meta_description`=:meta_description,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text "
                    . "WHERE `id`=:ptype_id");  
            
            $result->execute(array(
                ":parent_id"=>$parent_id,
                ":rel_table"=>$rel_table,
                ":name"=>$name,
                ":alias"=>$alias,
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":ptype_id"=>$ptype_id
            ));             
        }

        if($result){
            header("Location:admin-products.html");
        }
    }
    /*MMY Products functionality***********************************************/
    
    function getMMY(){
        $sth = $this->prepare("SELECT * FROM `ptype_mmy`");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getProductMMYData($table,$param){
        $sth = $this->prepare("SELECT * FROM `{$table}` WHERE `id`=:id");
        $sth->execute(array(":id"=>$param));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
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

        $result = $this->prepare("INSERT INTO `{$table}` "
                . "(`ptype_id`,`rel_table`,`name`,`alias`,`title`,`meta_description`,`meta_keywords`,`header`,`text`) "
                . "VALUES (:ptype_id,:rel_table,:name,:alias,:title,:meta_description,:meta_keywords,:header,:text)");  
        
        $result->execute(array(
            ":ptype_id"=>$ptype_id,
            ":name"=>$name,
            ":alias"=>$alias,
            ":title"=>$title,
            ":meta_description"=>$meta_description,
            ":meta_keywords"=>$meta_keywords,
            ":header"=>$header,
            ":text"=>$text,
            ":pic"=>$pic
        ));  

        if($result){
            header("Location:admin-products.html");
        }
    }
    
    function deleteProductMMY($table,$ptype_id){
        $result = $this->getProductMMYData($table,$ptype_id);
        if(file_exists($result['pic'])){
            unlink($result['pic']);   
        }         
        $sth = $this->prepare("DELETE FROM `{$table}` WHERE `id`= :ptype_id");
        $sth->execute(array(':ptype_id'=>$ptype_id));
        if($sth){
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
            $result = $this->prepare("UPDATE `{$table}` SET "
                    . "`ptype_id`=:ptype_id,`ptype_name`=:name,`title`=:title,"
                    . "`meta_description`=:meta_description,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text,`pic`=:pic "
                    . "WHERE `id`=:id");  

            $result->execute(array(                
                ":ptype_id"=>$ptype_id,
                ":id" => $id,
                ":name"=>$name, 
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":pic"=>$pic
            )); 
        }else{
            $result = $this->prepare("UPDATE `{$table}` SET "
                    . "`ptype_id`=:ptype_id,`ptype_name`=:name,`title`=:title,"
                    . "`meta_description`=:meta_description,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text "
                    . "WHERE `id`=:id");  
            $result->execute(array(                
                ":ptype_id"=>$ptype_id,
                ":id" => $id,
                ":name"=>$name, 
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text
            ));
        }        
        if($result){
            header("Location:admin-products.html");
        }
    }
    
    function getBrands(){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE `type`='brand'");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function saveBrand(){
        $name = $_POST['name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = $_POST['text'];
        $pic = $_POST['pic'];
        
        /*Get data for Gallery**********************************************/
        $result = $this->prepare("INSERT INTO `ptype` "
                . "(`type`,`name`,`alias`,`title`,`meta_description`,`meta_keywords`,`header`,`text`,`pic`) "
                . "VALUES (:type,:name,:alias,:title,:meta_description,:meta_keywords,:header,:text,:pic)");  
        
        $result->execute(array(
            ":type"=>'brand',
            ":name"=>$name,
            ":alias"=>$alias,
            ":title"=>$title,
            ":meta_description"=>$meta_description,
            ":meta_keywords"=>$meta_keywords,
            ":header"=>$header,
            ":text"=>$text,
            ":pic"=>$pic
        ));        
        
        $sth = $this->prepare("SELECT id FROM  `ptype` ORDER BY id DESC LIMIT 1");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        $last_id = $res[0]['id'];
        
        $src = json_encode($_POST['imgpath']);
        $alt = json_encode($_POST['imgalt']);
        $theme = json_encode($_POST['imgtheme']);
        $features = $_POST['features'];
        $sth = $this->prepare("INSERT INTO `brands_data`(`brand_id`,`img_src`,`alt`,`theme`,`features`) "
                . "VALUES (:last_id,:src,:alt,:theme,:features)");
        $sth->execute(array(
            ':last_id'=>$last_id,
            ':src'=>$src,
            ':alt'=>$alt,
            ':theme'=>$theme,
            ':features'=>$features
        ));           
        
        if($sth){
            header("Location:admin-brands.html");
        }
    }  
    
    function getBrandData($brand_id){
        $sth = $this->prepare("SELECT P.*, BD.`brand_id`, BD.`img_src`, BD.`alt`,BD.`theme`,BD.`features` FROM `ptype` P "
                . "LEFT JOIN `brands_data` BD ON BD.`brand_id`=P.`id` WHERE "
                . "P.`id` = :brand_id");
        $sth->execute(array(':brand_id'=>$brand_id));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function updateBrand($brand_id){
        $name = $_POST['name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = str_replace(array("'"),array("&#39;"),$_POST['text']);
        $pic = $_POST['pic'];
        
        if($pic!=""){
            $result = $this->prepare("UPDATE `ptype` SET "
                    . "`name`=:name,`alias`=:alias,`title`=:title,"
                    . "`meta_description`=:meta_description,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text,`pic`=:pic "
                    . "WHERE `id`=:ptype_id");  
            $result->execute(array(
                ":name"=>$name,
                ":alias"=>$alias,
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":pic"=>$pic,
                ":ptype_id"=>$brand_id
            )); 
            
            $src = json_encode($_POST['imgpath']);
            $alt = json_encode($_POST['imgalt']);
            $theme = json_encode($_POST['imgtheme']);
            $features = $_POST['features'];
            $sth = $this->prepare("UPDATE `brands_data`"
                    . " SET `img_src`=:src,`alt`=:alt,`theme`=:theme,`features`=:features "
                    . " WHERE `brand_id`=:last_id ");
            $sth->execute(array(
                ':last_id'=>$brand_id,
                ':src'=>$src,
                ':alt'=>$alt,
                ':theme'=>$theme,
                ':features'=>$features
            )); 
 
        }else{
            $result = $this->prepare("UPDATE `ptype` SET "
                    . "`name`=:name,`alias`=:alias,`title`=:title,"
                    . "`meta_description`=:meta_description`,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text "
                    . "WHERE `id`=:ptype_id");  
            
            $result->execute(array(
                ":name"=>$name,
                ":alias"=>$alias,
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":ptype_id"=>$brand_id
            ));             

            $src = json_encode($_POST['imgpath']);
            $alt = json_encode($_POST['imgalt']);
            $theme = json_encode($_POST['imgtheme']);
            $features = $_POST['features'];
            $sth = $this->prepare("UPDATE `brands_data`"
                    . " SET `img_src`=:src,`alt`=:alt,`theme`=:theme,`features`=:features "
                    . " WHERE `brand_id`=:last_id ");
            $sth->execute(array(
                ':last_id'=>$brand_id,
                ':src'=>$src,
                ':alt'=>$alt,
                ':theme'=>$theme,
                ':features'=>$features
            ));            
  
        }

        if($result){
            header("Location:admin-brands.html");
        }
    }
    
    function deleteBrand($brand_id){
        $sth = $this->prepare("DELETE FROM `ptype` WHERE id=:brand_id");
        $sth->execute(array(':brand_id'=>$brand_id));
        
        $sth = $this->prepare("DELETE FROM `brands_data` WHERE brand_id=:brand_id");
        $sth->execute(array(':brand_id'=>$brand_id)); 
        if($sth)
            header("Location:admin-brands.html");
    }
    
    function getArticles(){
        $result = $this->prepare("SELECT * FROM `ptype` WHERE `type`='article'");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function saveArticle(){
        $name = $_POST['name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = $_POST['text'];
        $pic = $_POST['pic'];
        
        /*Get data for Gallery**********************************************/
        $result = $this->prepare("INSERT INTO `ptype` "
                . "(`type`,`name`,`alias`,`title`,`meta_description`,`meta_keywords`,`header`,`text`,`pic`) "
                . "VALUES (:type,:name,:alias,:title,:meta_description,:meta_keywords,:header,:text,:pic)");  
        
        $result->execute(array(
            ":type"=>'article',
            ":name"=>$name,
            ":alias"=>$alias,
            ":title"=>$title,
            ":meta_description"=>$meta_description,
            ":meta_keywords"=>$meta_keywords,
            ":header"=>$header,
            ":text"=>$text,
            ":pic"=>$pic
        ));        
        
        $sth = $this->prepare("SELECT id FROM  `ptype` ORDER BY id DESC LIMIT 1");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        $last_id = $res[0]['id'];
        
        $src = json_encode($_POST['imgpath']);
        $alt = json_encode($_POST['imgalt']);
        $theme = json_encode($_POST['imgtheme']);
        $features = $_POST['features'];
        $category = $_POST['category'];
        $sth = $this->prepare("INSERT INTO `articles_data`(`brand_id`,`img_src`,`alt`,`theme`,`features`,`category`) "
                . "VALUES (:last_id,:src,:alt,:theme,:features,:category)");
        $sth->execute(array(
            ':last_id'=>$last_id,
            ':src'=>$src,
            ':alt'=>$alt,
            ':theme'=>$theme,
            ':features'=>$features,
            ':category'=>$category
        ));            
               
        if($sth){
            header("Location:admin-articles.html");
        }
    } 
    
    function getArticleData($article_id){
        $sth = $this->prepare("SELECT P . * , AD.`article_id` , AD.`img_src` , AD.`alt` , AD.`theme` , AD.`features` , AD.`category` 
                                FROM  `ptype` P
                                LEFT JOIN  `articles_data` AD ON AD.`article_id` = P.`id` 
                            WHERE P.`id` = :article_id");
        $sth->execute(array(':article_id'=>$article_id));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function updateArticle($article_id){
        $name = $_POST['name'];
        $alias = $_POST['alias'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];
        $meta_keywords = $_POST['meta_keywords'];
        $header = $_POST['header'];
        $text = str_replace(array("'"),array("&#39;"),$_POST['text']);
        $pic = $_POST['pic'];
        
            $src = json_encode($_POST['imgpath']);
            $alt = json_encode($_POST['imgalt']);
            $theme = json_encode($_POST['imgtheme']);
            $features = $_POST['features'];
            $category = $_POST['category'];
            
        if($pic!=""){
            $result = $this->prepare("UPDATE `ptype` SET "
                    . "`name`=:name,`alias`=:alias,`title`=:title,"
                    . "`meta_description`=:meta_description,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text,`pic`=:pic "
                    . "WHERE `id`=:ptype_id");  
            $result->execute(array(
                ":name"=>$name,
                ":alias"=>$alias,
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":pic"=>$pic,
                ":ptype_id"=>$article_id
            ));             

            $sth = $this->prepare("UPDATE `articles_data`"
                    . " SET `img_src`=:src,`alt`=:alt,`theme`=:theme,`features`=:features, `category`=:category "
                    . " WHERE `article_id`=:last_id ");
            $sth->execute(array(
                ':last_id'=>$article_id,
                ':src'=>$src,
                ':alt'=>$alt,
                ':theme'=>$theme,
                ':features'=>$features,
                ':category'=>$category    
            )); 
 
        }else{
            $result = $this->prepare("UPDATE `ptype` SET "
                    . "`name`=:name,`alias`=:alias,`title`=:title,"
                    . "`meta_description`=:meta_description`,`meta_keywords`=:meta_keywords,`header`=:header,`text`=:text "
                    . "WHERE `id`=:ptype_id");  
            
            $result->execute(array(
                ":name"=>$name,
                ":alias"=>$alias,
                ":title"=>$title,
                ":meta_description"=>$meta_description,
                ":meta_keywords"=>$meta_keywords,
                ":header"=>$header,
                ":text"=>$text,
                ":ptype_id"=>$article_id
            ));    


            $sth = $this->prepare("UPDATE `articles_data`"
                    . " SET `img_src`=:src,`alt`=:alt,`theme`=:theme,`features`=:features,`category`=:category"
                    . " WHERE `article_id`=:last_id ");
            $sth->execute(array(
                ':last_id'=>$article_id,
                ':src'=>$src,
                ':alt'=>$alt,
                ':theme'=>$theme,
                ':features'=>$features,
                ':category'=>$category 
            ));            
  
        }

        if($result){
            header("Location:admin-articles.html");
        }
    }
    function deleteArticle($article_id){
        $sth = $this->prepare("DELETE FROM `ptype` WHERE id=:article_id");
        $sth->execute(array(':article_id'=>$article_id));
        
        $sth = $this->prepare("DELETE FROM `articles_data` WHERE brand_id=:article_id");
        $sth->execute(array(':article_id'=>$article_id)); 
        if($sth)
            header("Location:admin-articles.html");
    }
}