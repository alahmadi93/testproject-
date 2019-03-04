<?php
	//Added a comment
      public $method=$_GET['method']; 
      public $name=$_GET['name'];
      public $contents=$_GET['contents'];

      class test {

                        public function_construct()
                        {
                                      if($method=="create")
                                      {
                                      $myfile=fopen("/tmp/webapp/$name","w");
                                      fwrite($myfile,$contents);
                                      fclose($myfile);
                                      echo "File Created";
                                      }
                         
                                      if($method=='del')
                                      {
                                      unlink("/tmp/webapp/$name");
                                      echo "File Deleted";
                                      }
                                     
                                      if($method=='view')
                                      {
                                      echo file_get_contents("/tmp/webapp/$name");
                                      }
                        }
                 }

?>
