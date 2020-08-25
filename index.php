<?php

// 以下にItemクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Item  
{
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function infomation()
    {
        return '品名:' . $this->name . '、サイズ番号:' . $this->number .
            '、カラー:' . $this->color . 'です。';
    }
}


// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 品名、サイズ番号、カラー
$item1 = new Item ('Denim', 32, 'Cheakerboard');

// 品名を取得
echo $item1->getName();
echo '<br>';

// サイズ番号を取得
echo $item1->getNumber();
echo '<br>';

// カラーを取得
echo $item1->getColor();
echo '<br>';

// アイテムの情報表示を表示
echo $item1->infomation();
echo '<br>';

// 品名を更新
$item1->setName('Jeans');
echo $item1->getName();
echo '<br>';

// サイズ番号を取得
$item1->setNumber(200);
echo $item1->getNumber();
echo '<br>';

// カラーを取得
$item1->setColor('red');
echo $item1->getColor();
echo '<br>';

// 商品の情報表示を表示
echo $item1->infomation();
echo '<br>';