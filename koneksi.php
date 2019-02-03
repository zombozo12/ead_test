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

    public function Register($username, $password,$nama,$nik,$alamat,$status,$pekerjaan,$tempatLahir,$tanggalLahir,$email){
        $username = mysqli_real_escape_string($this->connect, $username);
        $password = mysqli_real_escape_string($this->connect, $password);
        $nama = mysqli_real_escape_string($this->connect, $nama);
        $nik = mysqli_real_escape_string($this->connect, $nik);
        $alamat = mysqli_real_escape_string($this->connect, $alamat);
        $status = mysqli_real_escape_string($this->connect, $status);
        $pekerjaan = mysqli_real_escape_string($this->connect, $pekerjaan);
        $tempatLahir= mysqli_real_escape_string($this->connect, $tempatLahir);
        $tanggalLahir = mysqli_real_escape_string($this->connect, $tanggalLahir);
        $email = mysqli_real_escape_string($this->connect, $email);

        $password_hash = hash('md5', $this->salt . $password);
        $create = $this->connect->prepare("INSERT INTO registrasi (usr_username,usr_password,usr_nama,usr_nik,usr_alamat,usr_status,usr_pekerjaan,usr_tempatLahir,usr_tanggalLahir,usr_email) VALUES (?,?,?,?,?,?,?,?,?,?)");

        $create->bind_param('sssissssis', $username, $password_hash,$nama,$nik,$alamat,$status,$pekerjaan,$tempatLahir,$tanggalLahir,$email);
        $create->execute();
        $create->store_result();
        if($create->affected_rows == 0){
            return false;
        }
    }
    public function simpan($id,$tanggal,$total){
        $id = mysqli_real_escape_string($this->connect, $id);
        $tanggal = mysqli_real_escape_string($this->connect, $tanggal);
        $total = mysqli_real_escape_string($this->connect, $total);

        $simpan = $this->connect->prepare("INSERT INTO simpan (usr_id,sim_tanggal,sim_total) VALUES(?,?,?)");

        $simpan->bind_param('iii',$usr_id,$sim_tanggal,$sim_total);
        $simpan->execute();
        $simpan->store_result();
        if($simpan->affected_rows == 0){
            return false;
        }
    }
    public function pinjam($id,$tanggal,$total){
        $id = mysqli_real_escape_string($this->connect, $id);
        $username = mysqli_real_escape_string($this->connect, $tanggal);
        $username = mysqli_real_escape_string($this->connect, $total);

        $pinjam = $this->connect->prepare("INSERT INTO pinjam (usr_id,pin_tanggal,pin_total) VALUES(?,?,?)");

        $pinjam->bind_param('iii',$usr_id,$pin_tanggal,$pin_total);
        $pinjam->execute();
        $pinjam->store_result();
        if($pinjam->affected_rows == 0){
            return false;
        }
    }
    public function dltPinjam($id){
        $id = mysqli_real_escape_string($this->connect, $id);

        $dltPinjam = $this->connect->prepare("DELETE FROM pinjam WHERE pin_id = $id");
        $dltPinjam->bind_param('i',$id);
        $dltPinjam->execute();
        $dltPinjam->store_result();
        if($dltPinjam->affected_rows == 0){
            return false;
        }

    }
    public function dltSimpan($id){
        $id = mysqli_real_escape_string($this->connect, $id);

        $dltSimpan = $this->connect->prepare("DELETE FROM siman WHERE sim_idd = $id");
        $dltSimpan->bind_param('i',$id);
        $dltSimpan->execute();
        $dltSimpan->store_simpan();
        if($dltSimpan->affected_rows == 0){
            return false;
        }
    }
    public function upPinjam($pin_id,$usr_id,$tanggal,$total){
        $pin_id = mysqli_real_escape_string($this->connect, $pin_id);
        $usr_id = mysqli_real_escape_string($this->connect, $usr_id);
        $tanggal = mysqli_real_escape_string($this->connect, $tanggal);
        $total = mysqli_real_escape_string($this->connect, $total);
        
        $upPinjam = $this->connect->prepare("UPDATE pinjam SET usr_id = $usr_id, pin_tanggal = $tanggal, pin_total = $total");
        $upPinjam->bind_param('iii',$usr_id,$tanggal,$total);
        $upPinjam->execute();
        $upPinjam->store_result();
        if($upPinjam->affected_rows == 0){
            return false;
        }
    }
    public function upSimpan($sim_id,$usr_id,$tanggal,$total){
        $sim_id = mysqli_real_escape_string($this->connect, $sim_id);
        $usr_id = mysqli_real_escape_string($this->connect, $usr_id);
        $tanggal = mysqli_real_escape_string($this->connect, $tanggal);
        $total = mysqli_real_escape_string($this->connect, $total);

        $upSimpan = $this->connect->prepare("UPDATE simpan SET usr_id = $usr_id, sim_tanggal = $tanggal, sim_total = $total");
        $upSimpan->bind_param('iii',$usr_id,$tanggal,$total);
        $upSimpan->execute();
        $upSimpan->store_result();
        if($upSimpan->affected_rows == 0){
            return false;
        }
    }
}