<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "program_code".
 *
 * @property int $pc_id
 * @property string $pc_code
 * @property string $pc_desc
 * @property int $pc_is_deleted
 * @property string $pc_created_at
 * @property string $pc_updated_at
 * @property string $pc_created_by
 *
 * @property Course[] $courses
 * @property Student[] $students
 */
class ProgramCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pc_code', 'pc_desc'], 'required'],
            [['pc_desc', 'pc_created_by'], 'string'],
            [['pc_created_at', 'pc_updated_at'], 'safe'],
            [['pc_code'], 'string', 'max' => 10],
            [['pc_is_deleted'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pc_id' => Yii::t('app', 'Pc ID'),
            'pc_code' => Yii::t('app', 'Program Code'),
            'pc_desc' => Yii::t('app', 'Program Desc'),
            'pc_is_deleted' => Yii::t('app', 'Program Is Deleted'),
            'pc_created_at' => Yii::t('app', 'Program Created At'),
            'pc_updated_at' => Yii::t('app', 'Program Updated At'),
            'pc_created_by' => Yii::t('app', 'Program Created By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['pc_id' => 'pc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['pc_id' => 'pc_id']);
    }

    public static function dropdown()
    {
        //get and cache data
        $dropdown = [];
            //get all records from database and generate
            $models = self::find()->all();
            foreach ($models as $model) {
                $dropdown[$model->pc_id] = $model->pc_desc;
            }
        return $dropdown;
    }
}
