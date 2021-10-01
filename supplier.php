<?php
    class supplier extends database
    {

        public function index()
        {
            $datasupplier = mysqli_query($this->koneksi, "select * from supplier");

            return $datasupplier;
        }

        public function create($nama_supplier,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,
                        "insert into supplier values (null,'$nama_supplier','$no_telp','$alamat')"
                    );

        }
    
        public function show($id_supplier)
        {
            $datasupplier = mysqli_query($this->koneksi, 
                        "select * from supplier where id_supplier='$id_supplier'"
                    );

            return $datasupplier;
        }
        public function edit($id_supplier)
        {
            $datasupplier = mysqli_query($this->koneksi, 
                        "select * from supplier  where id_supplier='$id_supplier'"
                    );

            return $datasupplier;
        }
        public function update($id_supplier, $nama_supplier,$no_telp,$alamat)
        {
            mysqli_query(
                $this->koneksi,
                "update supplier set nama_supplier='$nama_supplier', no_telp='$no_telp', alamat=$alamat where id_supplier='$id_supplier'"
            );
        }
        public function delete($id_supplier)
        {
            mysqli_query($this->koneksi, "delete from supplier where id_supplier='$id_supplier'"
                    );

        }
        
    }
        

?>