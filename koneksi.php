<?php
namespace koneksi;
class koneksi{
    private $connect;

    private $salt;
    /**
     * @return koneksi
     */
    public static function initDatabase(){
        define("DBHOSTNAME", "127.0.0.1");
        define("DBUSERNAME", "root");
        define("DBPASSWORD", "jancok");
        define("DBNAME", "db_koperasi");
        $connect = mysqli_connect(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME) or die(mysqli_error($connect));

        if($connect->connect_error){
            die("Connection to Database Failed");
        }else{
            $statement = new self();
            $statement->connect = $connect;
            $statement->salt = 'EaD!SaLT!@#$^%';
            return $statement;
        }
    }

    public function login($username, $password){
        $username = mysqli_real_escape_string($this->connect, $username);
        $password = mysqli_real_escape_string($this->connect, $password);

        if(empty($username) || empty($password)){
            return false;
        }

        $password_hash = hash('md5', $this->salt . $password);
        $login = $this->connect->prepare("SELECT usr_username, usr_password, usr_email FROM registrasi WHERE usr_username = ? AND usr_password = ?");
        $login->bind_param('ss', $username, $password_hash);
        $login->execute();
        $login->store_result();

        if($login->num_rows == 0){
            return false;
        }

        $loginDetail['log_detail'] = array();
        $login->bind_result($username);
        while($login->fetch()){
            array_push($loginDetail['log_detail'], $username);
        }
        return $loginDetail['log_detail'];
    }

    public function count_simpanan(){
        $get = $this->connect->prepare('SELECT COUNT(*) FROM simpan');
        $get->execute();
        $get->store_result();
        if($get->num_rows == 0){
            return false;
        }

        $countSimpanan = array();
        $get->bind_result($data);
        while($get->fetch()){
            $countSimpanan[] = ['jumlah_simpanan' => $data];
        }
        return $countSimpanan;
    }
}