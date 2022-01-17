<?php
  /* 
 * AUTOLOAD FUNC FOR LOAD CLASS AND WHAT I NEED
 */
  
    function autoloadClass($className) {
      $classFile = classDir.$className.".class.php";
      if (file_exists($classFile)) {
        require $classFile;
      }
    }
    
    function autoloadClassDatabase($className) {
      $dClassFile = dbDir.$className.".class.php";
      if (file_exists($dClassFile)) {
        require $dClassFile;
      }
    }

    function autoloadClassModuleModels($className) {
        if(strstr($className, "_") ){
            $deger = explode("_",$className);
            $mClassFile = modulesDir.$deger[0]."/models/".$deger[1].".class.php";
            if (file_exists($mClassFile)) {
              require $mClassFile;
            }
        }else{
            $mClassFile = modulesDir.$className."/models/".$className.".class.php";
            if (file_exists($mClassFile)) {
              require $mClassFile;
            }   
        }
    }
  
    function autoloadSmarty($className)
    {
        global $smartyRootClasses;
        $_class = strtolower($className);
        if (strpos($_class, 'smarty') !== 0) {
            return;
        }
        $file =  SMARTY_SYSPLUGINS_DIR. $_class . '.php';
        if (is_file($file)) {
            include $file;
        } else if (isset($smartyRootClasses[ $_class ])) {
            $file = classDir . $smartyRootClasses[ $_class ];
            if (is_file($file)) {
                include $file;
            }
        }
        return;
    }
  
    function autoloadPDFClass($className) {
      $classFile = libraryDir."tcpdf/".$className.".php";
      if (file_exists($classFile)) {
        require $classFile;
      }
    }
    
    function autoloadMailler($className) {
      $classFile = libraryDir."phpmailer/".$className.".php";
      if (file_exists($classFile)) {
        require $classFile;
      }
    }
    
  //REGISTER FUNC
  spl_autoload_register("autoloadClass");
  spl_autoload_register("autoloadClassDatabase");
  spl_autoload_register("autoloadClassModuleModels");
  spl_autoload_register("autoloadSmarty");
  spl_autoload_register("autoloadPDFClass");
  spl_autoload_register("autoloadMailler");


