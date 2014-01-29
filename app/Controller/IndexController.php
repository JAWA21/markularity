<?
App::uses('AppController', 'Controller');
App::uses('ClickThrough', 'Model');
App::uses('Thumb', 'Model');

class IndexController extends AppController{

    public $helpers = array('Html', 'Form');

    public function beforeFilter() {

                    parent::beforeFilter();

                    $this->Auth->allow('index');
                    
        }     

    public function index() {
    	//$bookmarks = $this->Index->topTen();
        $this->loadModel('Thumb');
        $this->loadModel('ClickThrough');

    	$bookmarks = $this->Index->topTen();

        foreach ($bookmarks as $bookmark) {

            $clickthroughs = intval($this->ClickThrough->find('count', array(
                'conditions' => array(
                    'bookmark_id' => $bookmark['Index']['bookmark_id'])
                )));

            $thumbsUp = intval($this->Thumb->find('count', array(
                'conditions' => array(
                    'bookmark_id' => $bookmark['Index']['bookmark_id'],
                    'thumbed' => 'true')
                )
            ));

            $thumbsDown = intval($this->Thumb->find('count', 
            array(
                'conditions' => array(
                    'bookmark_id' => $bookmark['Index']['bookmark_id'],
                    'thumbed' => 'false')
            )
            ));

            $total = ($thumbsUp * 5) + $clickthroughs - ($thumbsDown * 3);

            $bookmark['Bookmark']['popularity'] = $total;

            array_push($bookmarks, $bookmark);
        }
        
        $this->set('bookmarks', $bookmarks);
    }
}
