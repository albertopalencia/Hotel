<?php


class Songs extends Controller
{
   
    public function index()
    {
        
        $songs_model = $this->loadModel('SongsModel');
        $songs['songs'] = $songs_model->getAllSongs();

       
        require 'Hotel/views/_templates/header.php';
        require 'Hotel/views/songs/index.php';
        require 'Hotel/views/_templates/footer.php';
    }

    
    public function addSong()
    {
       
        if (isset($_POST["submit_add_song"])) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('SongsModel');
            $songs_model->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }

       
        header('location: ' . URL . 'songs/index');
    }

    /**
     * ACTION: deleteSong
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteSong($song_id)
    {
        
        if (isset($song_id)) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('SongsModel');
            $songs_model->deleteSong($song_id);
        }

      
        header('location: ' . URL . 'songs/index');
    }
}
