<?php
    class pembeli extends database
    {

        public function index()
        {
            $datapembeli = mysqli_query($this->koneksi, "select * from pembeli");

            return $datapembeli;
        }

        public function create($nama_pembeli,$jk,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,
                        "insert into pembeli values (null,'$nama_pembeli','$jk','$no_telp','$alamat')"
                    );

        }
    
        public function show($id)
        {
            $datapembeli = mysqli_query($this->koneksi, 
                        "select * from pembeli where id='$id'"
                    );

            return $datapembeli;
        }
        public function edit($id)
        {
            $datapembeli = mysqli_query($this->koneksi, 
                        "select * from pembeli  where id='$id'"
                    );

            return $datapembeli;
        }
        public function update($id, $nama_pembeli, $jk,$no_telp,$alamat)
        {
            mysqli_query(
                $this->koneksi,
                "update pembeli set nama_pembeli='$nama_pembeli', jk='$jk', no_telp='$no_telp', alamat=$alamat where id='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from pembeli where id='$id'"
                    );

        }
        
    }
        

?>