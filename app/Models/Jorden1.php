<?php

namespace App\Models;
use PDOFactory;

class Jordan1
{
    private $db;
    private $jd_id = -1;
    public $name;
    public $img_1;
    public $img_2;
    public $img_3;
    public $img_4;
    private $size_id;
    public $size_36;
    public $size_36_5;
    public $size_37;
    public $size_37_5;
    public $size_38;
    public $size_38_5;
    public $size_39;
    public $size_39_5;
    public $size_40;
    public $size_40_5;
    public $size_41;
    public $size_41_5;
    public $size_42;
    public $size_42_5;
    public $size_43;
    public $size_43_5;
    public $size_44;
    public $size_44_5;
    public $price;
    public $created_at;
    public $updated_at;
    private $errors = [];
    public function get_id()
    {
        return $this->jd_id;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_img_1()
    {
        return $this->img_1;
    }
    public function get_img_2()
    {
        return $this->img_2;
    }
    public function get_img_3()
    {
        return $this->img_3;
    }
    public function get_img_4()
    {
        return $this->img_4;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function __construct($PDO)
    {
        $this->db = $PDO;
    }

    public function fill(array $data)
    {
        if (isset($data['name'])) {
            $this->name = trim($data['name']);
        }

        if (isset($data['img_1'])) {
            $this->img_1 = trim($data['img_1']);
        }

        // if (isset($data['img_2'])) {
        // 	$this->img_2 = trim($data['img_2']);
        // }

        // if (isset($data['img_3'])) {
        // 	$this->img_3 = trim($data['img_3']);
        // }

        // if (isset($data['img_4'])) {
        // 	$this->img_4 = trim($data['img_4']);
        // }

        if (isset($data['price'])) {
            $this->price = trim($data['price']);
        }

        return $this;
    }

    public function validate()
    {
        if (!$this->name) {
            $this->errors['name'] = 'Invalid name.';
        }

        if (!$this->img_1) {
            $this->errors['img_1'] = 'Invalid img.';
        }

        // if (!$this->img_2) {
        // 	$this->errors['img_2'] = 'Invalid img.';
        // }

        // if (!$this->img_3) {
        // 	$this->errors['img_3'] = 'Invalid img.';
        // }

        // if (!$this->img_4) {
        // 	$this->errors['img_4'] = 'Invalid img.';
        // }


        if (!$this->price) {
            $this->errors['price'] = 'Invalid price.';
        }

        return empty($this->errors);
    }

    public function getValidationErrors()
    {
        return $this->errors;
    }

    public function all()
    {
        $Jordan1s = [];
        $statement = $this->db->prepare('SELECT * FROM product LEFT JOIN size on product.jd_id = size.jd_id');
        $statement->execute();
        while ($row = $statement->fetch()) {
            $Jordan1 = new Jordan1($this->db);
            $Jordan1->fillFromDB($row);
            $Jordan1s[] = $Jordan1;
        }
        return $Jordan1s;
    }

    protected function fillFromDB(array $row)
    {
        [
            'jd_id' => $this->jd_id,
            'name' => $this->name,
            'img_1' => $this->img_1,
            'img_2' => $this->img_2,
            'img_3' => $this->img_3,
            'img_4' => $this->img_4,
            'price' => $this->price,
            'size_id' => $this->size_id,
            'size_36' => $this->size_36,
            'size_36_5' => $this->size_36_5,
            'size_37' => $this->size_37,
            'size_37_5' => $this->size_37_5,
            'size_38' => $this->size_38,
            'size_38_5' => $this->size_38_5,
            'size_39' => $this->size_39,
            'size_39_5' => $this->size_39_5,
            'size_40' => $this->size_40,
            'size_40_5' => $this->size_40_5,
            'size_41' => $this->size_41,
            'size_41_5' => $this->size_41_5,
            'size_42' => $this->size_42,
            'size_42_5' => $this->size_42_5,
            'size_43' => $this->size_43,
            'size_43_5' => $this->size_43_5,
            'size_44' => $this->size_44,
            'size_44_5' => $this->size_44_5,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ] = $row;
        return $this;
    }

    public function save()
    {
        $result = false;
        $statement_Jordan1 = $this->db->prepare(
            'insert into product (name, img_1, img_2, img_3, img_4, price, created_at, updated_at)
            values (:name, :img_1, :img_2,:img_3,:img_4,:price, now(), now())'
        );
        $result_Jordan1 = $statement_Jordan1->execute([
            'name' => $this->name,
            'img_1' => $this->img_1,
            'img_2' => $this->img_2,
            'img_3' => $this->img_3,
            'img_4' => $this->img_4,
            'price' => $this->price,
        ]);
        if ($result_Jordan1) {
            $temp = $this->db->lastInsertId();
            $this->jd_id = $temp;
        }
        $statement_size = $this->db->prepare(
            'insert into size (size_36, size_36_5, size_37, size_37_5, size_38, size_38_5, size_39, size_39_5,size_40, size_40_5 , size_41, size_41_5, size_42, size_42_5, size_43, size_43_5, size_44, size_44_5,created_at, updated_at,jd_id)
            values (:size_36, :size_36_5, :size_37, :size_37_5, :size_38, :size_38_5, :size_39, :size_39_5, :size_40, :size_40_5, :size_41, :size_41_5, :size_42, :size_42_5, :size_43, :size_43_5, :size_44, :size_44_5, now(), now(),:jd_id)'
        );
        $result_size = $statement_size->execute([
            'size_36' => $this->size_36,
            'size_36_5' => $this->size_36_5,
            'size_37' => $this->size_37,
            'size_37_5' => $this->size_37_5,
            'size_38' => $this->size_38,
            'size_38_5' => $this->size_38_5,
            'size_39' => $this->size_39,
            'size_39_5' => $this->size_39_5,
            'size_40' => $this->size_40,
            'size_40_5' => $this->size_40_5,
            'size_41' => $this->size_41,
            'size_41_5' => $this->size_41_5,
            'size_42' => $this->size_42,
            'size_42_5' => $this->size_42_5,
            'size_43' => $this->size_43,
            'size_43_5' => $this->size_43_5,
            'size_44' => $this->size_44,
            'size_44_5' => $this->size_44_5,
            'jd_id' => $temp
        ]);
    }
    //ham su dung boi trang search.php
    public function search($search)
    {
        $sql = "SELECT * FROM product LEFT JOIN size on product.jd_id = size.jd_id WHERE product.name LIKE '%$search%';";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $Jordan1s = [];
        while ($row = $statement->fetch()) {
            $Jordan1 = new Jordan1($this->db);
            $Jordan1->fillFromDB($row);
            $Jordan1s[] = $Jordan1;
        }
        return $Jordan1s;
    }
    //ham su dung de hien thi chi tiet san pham
    public function find_name($name_product)
    {
        $statement = $this->db->prepare("SELECT * FROM product LEFT JOIN size on product.jd_id = size.jd_id WHERE product.name=:name_product");
        $statement->execute(['name_product' => $name_product]);
        $row = $statement->fetch();
        $this->fillFromDB($row);
        return $this;
    }
    //ham timm kiem san pham theo id su dung boi trang edit.php va delete_product.php
    public function find($jd_id)
    {
        $statement = $this->db->prepare('select * from product inner join size on product.jd_id = size.jd_id where  product.jd_id = :jd_id');
        $statement->execute(['jd_id' => $jd_id]);
        if ($row = $statement->fetch()) {
            $this->fillFromDB($row);
            return $this;
        }

        return null;
    }
    public function update($id)
    {
        $result = false;
        $statement = $this->db->prepare("UPDATE product set name = :name , img_1 = :img_1, img_2 = :img_2, img_3 = :img_3,
        img_4 = :img_4, price = :price, updated_at = now()
        where jd_id = :id ");
        $result = $statement->execute([
            'name' => $this->name,
            'img_1' => $this->img_1,
            'img_2' => $this->img_2,
            'img_3' => $this->img_3,
            'img_4' => $this->img_4,
            'price' => $this->price,
            'id' =>$id 
        ]);
        $statement_size = $this->db->prepare("UPDATE size set size_36 = :size_36, size_36_5 = :size_36_5, size_37 = :size_37, size_37_5 = :size_37_5, size_38 = :size_38, 
            size_38_5 = :size_38_5, size_39 = :size_39, size_39_5 = :size_39_5, size_40 = :size_40, size_40_5 = :size_40_5, size_41 = :size_41, size_41_5= :size_41_5, 
            size_42 = :size_42, size_42_5 = :size_42_5, size_43 = :size_43, size_43_5 = :size_43_5, size_44 = :size_44, size_44_5= :size_44_5, updated_at = now()
            where jd_id = :id");
        $result_size = $statement_size->execute([
            'size_36' => $this->size_36,
            'size_36_5' => $this->size_36_5,
            'size_37' => $this->size_37,
            'size_37_5' => $this->size_37_5,
            'size_38' => $this->size_38,
            'size_38_5' => $this->size_38_5,
            'size_39' => $this->size_39,
            'size_39_5' => $this->size_39_5,
            'size_40' => $this->size_40,
            'size_40_5' => $this->size_40_5,
            'size_41' => $this->size_41,
            'size_41_5' => $this->size_41_5,
            'size_42' => $this->size_42,
            'size_42_5' => $this->size_42_5,
            'size_43' => $this->size_43,
            'size_43_5' => $this->size_43_5,
            'size_44' => $this->size_44,
            'size_44_5' => $this->size_44_5,
            'id' => $id
        ]);
    }
    //ham xoa san pham
    public function delete()
    {
        $statement = $this->db->prepare('delete from size where jd_id = :jd_id');
        $statement2 = $this->db->prepare('delete from product where jd_id = :jd_id');
        $statement->execute(['jd_id' => $this->jd_id]);
        $statement2->execute(['jd_id' => $this->jd_id]);
    }
}
