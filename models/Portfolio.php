<?php

namespace app\models;

use Yii;
use yii\imagine\Image;

/**
 * This is the model class for table "{{%portfolio}}".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $img
 * @property int $status
 */
class Portfolio extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%portfolio}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['description'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'imageFile' => 'Img',
            'status' => 'Status',
        ];
    }

    public function upload(){

        if($this->validate()){
            if(!empty($this->imageFile->name)) {
                $fileName = $this->translit($this->imageFile->name);

                $this->imageFile->saveAs("uploads/{$fileName}");
                $this->img = "/uploads/resize/{$fileName}";

                Image::thumbnail('@webroot/uploads/'.$fileName, 285, 230)
                    ->save(Yii::getAlias('@webroot/uploads/resize/'.$fileName), ['quality' => 100]);
            }

        }else{
            return false;
        }
    }

    private function translit($s) {
        $s = (string) $s; // преобразуем в строковое значение
        $s = strip_tags($s); // убираем HTML-теги
        $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
        $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
        $s = trim($s); // убираем пробелы в начале и конце строки
        $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
        $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
        //$s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
        $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
        return $s; // возвращаем результат
    }
}
