<?php

class database{
     public $connection=null; //variable 
        function __construct()
 {
    $this->connectionwithDb(); 
    //in oop constructor access 1st without creating an object
 }
        function connectionwithDb()
 {
    $this->connection=mysqli_connect('localhost','root','','lms_new'); //connection gareko database snga
 }
        function Insert($tablename,$post) //tablename vaneko database ma table ko name k xa teo rakni,post ma chai get ho ki post
 {
            $columns= implode(',',array_keys($post));
            $sql = "INSERT INTO $tablename (";
            $vals=implode("','",array_values($post));
            $sql.=$columns.") VALUES ('";
            $sql.=$vals."')";
            echo $sql;
            $result=mysqli_query($this->connection,$sql);
        if ($result)
        {
            echo 'succesful';
        }
        else
        {
            echo "not sucessful";
        }
            
    }
    
    function Select($tablename,$all='*',$criteria='',$criteriaValue='')
    {
        $sql="SELECT $all From $tablename";
        if($criteria!="")
        {
            $sql.=" WHERE $criteria='$criteriaValue'";
        }
        // echo $sql;
        $result=mysqli_query($this->connection,$sql);
        return $result;
    }
    function delete($tableName,$criteria,$criteriaValue) {
        $sql="delete from $tableName where $criteria = $criteriaValue";
        $result=mysqli_query($this->connection,$sql);
        // echo $sql;
    }
    function update($tableName,$datas,$criteria,$criteriaValue){
        $sql="UPDATE $tableName SET ";
        foreach($datas as $key=>$value){
        $sql.="$key ='$value',";
        }
        $sql=substr($sql, 0, -1);
        $sql.=" WHERE $criteria=$criteriaValue";
        echo $sql;
        $result=mysqli_query($this->connection,$sql); 
    }
   


}
$obj = new database();

?>