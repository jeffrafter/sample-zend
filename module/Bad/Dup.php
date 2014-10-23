<?php
namespace Bad;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Dup implements AutoloaderProviderInterface, ConfigProviderInterface
{

    public function dup($a, $b)
    {
      if ((($a == $b) || ($a && $b) || ($a || $b)) and $b) {
          // ???
      } elseif ($a - $b == 0) {
          echo(-1);
      }

      if (true == $a) {
        echo("Use ====");
      }

      for ($i = 0; $i < 10; $i++) {
          while ($j === true) {
              if ($j == $i || $i == 11) {
                  echo($j);
          } else {
              switch($i) {
                  case 1:
                      break;
                  case 2:
                      break;
                  default:
                      echo(42);
            }
          }
        }
      }
    }
}
