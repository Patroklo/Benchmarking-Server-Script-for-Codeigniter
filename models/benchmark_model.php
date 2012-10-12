<?php
/*
##########################################################################
#                      PHP Benchmark Performance Script                  #
#                        FOR CODEIGNITER                                 #
#                         © 2010 Code24 BV                               # 
#                                                                        #
#  Author      : Alessandro Torrisi                                      #
#  Company     : Code24 BV, The Netherlands                              #
#  Changes     : Joseba Juániz                                           #
#  Company     : Cyneek.com                                              #
#  Date        : October 11, 2012                                        #
#  version     : 1.0.2                                                   #
#  License     : Creative Commons CC-BY license                          #
#  Website     : http://www.php-benchmark-script.com                     #  
#                                                                        #
##########################################################################
*/

class benchmark_model extends CI_Model {

    private $tableName = 'benchmark_test';
    private $string_length = 10;
    private $fileName = 'benchmark_test.txt';
    private $lorem = 'Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per. Ius id vidit volumus mandamus, vide veritus democritum te nec, ei eos debet libris consulatu. No mei ferri graeco dicunt, ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril meliore. Dicunt maiorum eloquentiam cum cu, sit summo dolor essent te. Ne quodsi nusquam legendos has, ea dicit voluptua eloquentiam pro, ad sit quas qualisque. Eos vocibus deserunt quaestio ei. Blandit incorrupte quaerendum in quo, nibh impedit id vis, vel no nullam semper audiam. Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat. Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo. Homero salutatus suscipiantur eum id, tamquam voluptaria expetendis ad sed, nobis feugiat similique usu ex. Eum hinc argumentum te, no sit percipit adversarium, ne qui feugiat persecuti. Odio omnes scripserit ad est, ut vidit lorem maiestatis his, putent mandamus gloriatur ne pro. Oratio iriure rationibus ne his, ad est corrumpit splendide. Ad duo appareat moderatius, ei falli tollit denique eos. Dicant evertitur mei in, ne his deserunt perpetua sententiae, ea sea omnes similique vituperatoribus. Ex mel errem intellegebat comprehensam, vel ad tantas antiopam delicatissimi, tota ferri affert eu nec. Legere expetenda pertinacia ne pro, et pro impetus persius assueverit. Ea mei nullam facete, omnis oratio offendit ius cu. Doming takimata repudiandae usu an, mei dicant takimata id, pri eleifend inimicus euripidis at. His vero singulis ea, quem euripidis abhorreant mei ut, et populo iriure vix. Usu ludus affert voluptaria ei, vix ea error definitiones, movet fastidii signiferumque in qui. Vis prodesset adolescens adipiscing te, usu mazim perfecto recteque at, assum putant erroribus mea in. Vel facete imperdiet id, cum an libris luptatum perfecto, vel fabellas inciderint ut. Veri facete debitis ea vis, ut eos oratio erroribus. Sint facete perfecto no vel, vim id omnium insolens. Vel dolores perfecto pertinacia ut, te mel meis ullum dicam, eos assum facilis corpora in. Mea te unum viderer dolores, nostrum detracto nec in, vis no partem definiebas constituam. Dicant utinam philosophia has cu, hendrerit prodesset at nam, eos an bonorum dissentiet. Has ad placerat intellegam consectetuer, no adipisci mandamus senserit pro, torquatos similique percipitur est ex. Pro ex putant deleniti repudiare, vel an aperiam sensibus suavitate. Ad vel epicurei convenire, ea soluta aliquid deserunt ius, pri in errem putant feugiat. Sed iusto nihil populo an, ex pro novum homero cotidieque. Te utamur civibus eleifend qui, nam ei brute doming concludaturque, modo aliquam facilisi nec no. Vidisse maiestatis constituam eu his, esse pertinacia intellegam ius cu. Eos ei odio veniam, eu sumo altera adipisci eam, mea audiam prodesset persequeris ea. Ad vitae dictas vituperata sed, eum posse labore postulant id. Te eligendi principes dignissim sit, te vel dicant officiis repudiandae. Id vel sensibus honestatis omittantur, vel cu nobis commune patrioque. In accusata definiebas qui, id tale malorum dolorem sed, solum clita phaedrum ne his. Eos mutat ullum forensibus ex, wisi perfecto urbanitas cu eam, no vis dicunt impetus. Assum novum in pri, vix an suavitate moderatius, id has reformidans referrentur. Elit inciderint omittantur duo ut, dicit democritum signiferumque eu est, ad suscipit delectus mandamus duo. An harum equidem maiestatis nec. At has veri feugait placerat, in semper offendit praesent his. Omnium impetus facilis sed at, ex viris tincidunt ius. Unum eirmod dignissim id quo. Sit te atomorum quaerendum neglegentur, his primis tamquam et. Eu quo quot veri alienum, ea eos nullam luptatum accusamus. Ea mel causae phaedrum reprimique, at vidisse dolores ocurreret nam.';


    private function test_Math($count = 140000) {
        $time_start = microtime(true);
        $mathFunctions = array("abs", "acos", "asin", "atan", "bindec", "floor", "exp", "sin", "tan", "pi", "is_finite", "is_nan", "sqrt");
        foreach ($mathFunctions as $key => $function) {
            if (!function_exists($function)) unset($mathFunctions[$key]);
        }
        for ($i=0; $i < $count; $i++) {
            foreach ($mathFunctions as $function) {
                $r = call_user_func_array($function, array($i));
            }
        }
        return number_format(microtime(true) - $time_start, 3);
    }
    
    
    private function test_StringManipulation($count = 130000) {
        $time_start = microtime(true);
        $stringFunctions = array("addslashes", "chunk_split", "metaphone", "strip_tags", "md5", "sha1", "strtoupper", "strtolower", "strrev", "strlen", "soundex", "ord");
        foreach ($stringFunctions as $key => $function) {
            if (!function_exists($function)) unset($stringFunctions[$key]);
        }
        $string = "the quick brown fox jumps over the lazy dog";
        for ($i=0; $i < $count; $i++) {
            foreach ($stringFunctions as $function) {
                $r = call_user_func_array($function, array($string));
            }
        }
        return number_format(microtime(true) - $time_start, 3);
    }


    private function test_Loops($count = 19000000) {
        $time_start = microtime(true);
        for($i = 0; $i < $count; ++$i);
        $i = 0; while($i < $count) ++$i;
        return number_format(microtime(true) - $time_start, 3);
    }

    
    private function test_IfElse($count = 9000000) {
        $time_start = microtime(true);
        for ($i=0; $i < $count; $i++) {
            if ($i == -1) {
            } elseif ($i == -2) {
            } else if ($i == -3) {
            }
        }
        return number_format(microtime(true) - $time_start, 3);
    }   

    private function test_random_string($count = 100000)
    {
        $time_start = microtime(true);
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $size = strlen( $chars );
        
        for($i = 0; $i < $count; $i++)
        {
            $str = '';
            for( $j = 0; $j < $this->string_length; $j++ ) {
                $str .= $chars[ rand( 0, $size - 1 ) ];
            }
        }
        return number_format(microtime(true) - $time_start, 3);
    }
    
    private function test_file_reading($count = 10000)
    {
        $this->fileName = BASEPATH.$this->fileName;
        $time_start = microtime(true);
        $handle = fopen($this->fileName, 'w+');
        fwrite($handle,$this->lorem);
        fclose($handle);
        for($i = 0; $i < $count; $i++)
        {
            $handle = fopen($this->fileName, 'r');
            fread($handle, filesize($this->fileName));
            fclose($handle);
        }       
        unlink($this->fileName);
        return number_format(microtime(true) - $time_start, 3);
    }

    private function test_insert_DDBB($count = 3000)
    {
        $time_start = microtime(true);

        //Check if the table already exists. If so, throws an error  
        if ($this->db->table_exists($this->tableName))
        {
           show_error('Table already exists (test_insert_DDBB)');
        } 
        $fields = array(
                        'id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 5,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          )
                );      
        $this->load->dbforge();
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table($this->tableName, TRUE);

        for($i = 0; $i < $count; $i++)
        {
            $data = array('name' => 'John Connor');
            $this->db->insert($this->tableName,$data);
        }
        return number_format(microtime(true) - $time_start, 3);
    }

    private function test_read_DDBB($count = 3000)
    {
        $time_start = microtime(true);

        for($i = 0; $i < $count; $i++)
        {
            $query = $this->db->get_where($this->tableName, array('id' => $i));
        }
        
        $this->dbforge->drop_table($this->tableName);
        return number_format(microtime(true) - $time_start, 3);
    }
    

    
    public function run () {
        $total = 0;
        $server = (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '?') . '@' . (isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '?' );
        $methods = get_class_methods('benchmark_model');
        $line = str_pad("-",38,"-");
        $return = "<pre>$line\n|".str_pad("PHP BENCHMARK SCRIPT",36," ",STR_PAD_BOTH)."|\n$line\nStart : ".date("Y-m-d H:i:s")."\nServer : $server\nPHP version : ".PHP_VERSION."\nPlatform : ".PHP_OS. "\n$line\n";
        foreach ($methods as $method) {
            if (preg_match('/^test_/', $method)) {
                $total += $result = $this->$method();
                $return .= str_pad($method, 25) . " : " . $result ." sec.\n";
            }
        }
        $return .= str_pad("-", 38, "-") . "\n" . str_pad("Total time:", 25) . " : " . $total ." sec.</pre>";
        return $return;
    }

}