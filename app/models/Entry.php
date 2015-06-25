        <?php
class Entry extends Eloquent {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        public $table = 'entries';
	protected $guarded = array('id');
}
