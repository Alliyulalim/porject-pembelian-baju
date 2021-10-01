<?php
    class pakaian extends database
    {

        public function index()
        {
            $datapakaian = mysqli_query($this->koneksi, "select pakaian.id_pakaian,pakaian.nama_pakaian,pakaian.harga_pakaian,supplier.id_supplier from pakaian 
            join supplier on pakaian.id_supplier = pakaian.id_pakaian");

            return $datapakaian;
        }

        public function create($id_supplier,$nama_pakaian,$harga_pakaian,$stok)
        {
            mysqli_query($this->koneksi,
                        "insert into pakaian values (null,'$id_supplier','$nama_pakaian','$harga_pakaian','$stok')"
                    );

        }
    
        public function show($id_pakaian)
        {
            $datapakaian = mysqli_query($this->koneksi, 
                        "select * from pakaian where id_pakaian='$id_pakaian'"
                    );

            return $datapakaian;
        }
        public function edit($id_pakaian)
        {
            $datapakaian = mysqli_query($this->koneksi, 
                        "select * from pakaian  where id_pakaian='$id_pakaian'"
                    );

            return $datapakaian;
        }
        public function update($id_pakaian, $id_supplier,$nama_pakaian, $harga_pakaian,$stok)
        {
            mysqli_query(
                $this->koneksi,
                "update pembeli set id_supplier='$id_suppler', nama_pakaian='$nama_pakaian', harga_pakaian='$harga_pakaian', stok=$stok where id_pakaian='$id_pakaian'"
            );
        }
        public function delete($id_pakaian)
        {
            mysqli_query($this->koneksi, "delete from pembeli where id_pakaian='$id_pakaian'"
                    );

        }
        
    }
        

?>