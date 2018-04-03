<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $co_id
 * @property string $co_code
 * @property string $co_desc
 * @property int $pc_id
 *
 * @property ProgramCode $pc
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['co_code', 'co_desc', 'pc_id'], 'required'],
            [['co_desc'], 'string'],
            [['pc_id'], 'integer'],
            [['co_code'], 'string', 'max' => 10],
            [['pc_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProgramCode::className(), 'targetAttribute' => ['pc_id' => 'pc_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'co_id' => Yii::t('app', 'Course Id'),
            'co_code' => Yii::t('app', 'Course Code'),
            'co_desc' => Yii::t('app', 'Course '),
            'pc_id' => Yii::t('app', 'Program Title'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPc()
    {
        return $this->hasOne(ProgramCode::className(), ['pc_id' => 'pc_id']);
    }

    /**
     * @inheritdoc
     * @return CourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CourseQuery(get_called_class());
    }

    public function getPcList($model)
    {
        $temp = $this->getPc();
        return $temp->pc_desc;
    }

    public static function getAllCourse($pc_id = NULL)
    {
        if ($pc_id !== NULL) {
            $courses = [];
            $temp = self::find()->where(['pc_id' => $pc_id])->all();
            foreach ($temp as $course) {
                $courses[] = $course->co_desc;
            }
            $text = implode('<br>' , $courses);
            return $text;
        }
        return FALSE;
    }
}
