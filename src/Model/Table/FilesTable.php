<?php
namespace App\Model\Table;

use App\Model\Entity\File;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Core\Configure;

/**
 * Files Model
 */
class FilesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('files');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('mime_type', 'create')
            ->notEmpty('mime_type');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
    
    public function saveFile($userId,$field, $args = []){
        /**
         * 
         * in case the Requested filed has not been set over the server
         */
        if(!isset($field['error'])){
            return false;
        }
        /**
         * in case of any error while file upload plz. ignor
         */
        if($field['error'] != UPLOAD_ERR_OK){
            return false;
        }
        $finfo              = finfo_open(FILEINFO_MIME_TYPE);
        $fileName           = $field['name'];
        $fileExtention      = pathinfo($field['name']     , PATHINFO_EXTENSION);
        $fileMimeType       = finfo_file($finfo,$field['tmp_name']);
        $file               = $this->newEntity([
            'mime_type'     => $fileMimeType,
            'name'          => $fileName,
            'extention'     => $fileExtention,
            'user_id'       => $userId,
        ]);
        
        $file               = $this->save($file);
        $fileHash           = md5($file->id);
        
        $fileName           = $fileHash . "." . $fileExtention;
        $fileDestination    = Configure::read('Simgupload') .  $fileName;
        move_uploaded_file($field['tmp_name'],$fileDestination);
        
        return $file;
    }
}
