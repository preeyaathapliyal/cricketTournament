<?php

/**
 * This is the model class for table "tbl_match".
 *
 * The followings are the available columns in table 'tbl_match':
 * @property integer $match_id
 * @property integer $tournament_id
 * @property integer $tounrnament_match_num
 * @property integer $team1
 * @property integer $team2
 * @property string $match_status
 * @property integer $winner
 * @property integer $score
 * @property string $created_at
 * @property string $updated_at
 */
class TblMatchModel extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tbl_match';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('match_id', 'required'),
            array('match_id, tournament_id, tounrnament_match_num, team1, team2, winner, score', 'numerical', 'integerOnly'=>true),
            array('match_status', 'length', 'max'=>1),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('match_id, tournament_id, tounrnament_match_num, team1, team2, match_status, winner, score, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'match_id' => 'Match',
            'tournament_id' => 'Tournament',
            'tounrnament_match_num' => 'Tounrnament Match Num',
            'team1' => 'Team1',
            'team2' => 'Team2',
            'match_status' => 'Match Status',
            'winner' => 'Winner',
            'score' => 'Score',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('match_id',$this->match_id);
        $criteria->compare('tournament_id',$this->tournament_id);
        $criteria->compare('tounrnament_match_num',$this->tounrnament_match_num);
        $criteria->compare('team1',$this->team1);
        $criteria->compare('team2',$this->team2);
        $criteria->compare('match_status',$this->match_status,true);
        $criteria->compare('winner',$this->winner);
        $criteria->compare('score',$this->score);
        $criteria->compare('created_at',$this->created_at,true);
        $criteria->compare('updated_at',$this->updated_at,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TblMatchModel the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
